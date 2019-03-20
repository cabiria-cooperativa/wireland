<?php
/**
 * Plugin Name: Wireland
 * Plugin URI: https://github.com/cabiria-cooperativa/wireland
 * Description: Wireframe per landing page
 * Version: 1.0.0
 * Author: Simone Alati
 * Author URI: https://www.cabiria.net
 * Text Domain: cabi
 */

 // termino l'esecuzione se il plugin è richiamato direttamente
 if (!defined('WPINC')) die;

class Wireland {

    function __construct() {

        add_action('wp_enqueue_scripts', array($this, 'init'));     	/* accodo js e css                      */
        add_action('admin_menu', array($this, 'add_settings_page'));    /* creo una pagina di impostazioni      */
        add_shortcode('cabi_plugin', array($this, 'render'));       	/* aggiungo uno shortcode               */

        /* azioni ajax */
        add_action('wp_ajax_nopriv_hello_world_ajax', array($this, 'hello_world_ajax'));
        add_action('wp_ajax_hello_world_ajax', array($this, 'hello_world_ajax'));

        add_filter('theme_page_templates', array($this, 'add_template_to_select'), 10, 4);
        add_filter('template_include', array($this, 'get_template'));

        /* attivazione e disattivazione plugin */
        register_activation_hook(__FILE__, array($this, 'activation'));
        register_deactivation_hook( __FILE__, array($this, 'deactivation'));
    }

    function activation(){
        $this->add_settings();
    }

    function deactivation(){
        $this->remove_settings();
	}

    function init() {
        wp_enqueue_style( 'cabi_plugin', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' , array(), mt_rand());
        wp_enqueue_script('cabi_plugin', plugin_dir_url( __FILE__ ) . 'assets/js/wireland.js', array('jquery'), mt_rand(), true);
    }
	
	static function getImgPath() {
		return plugin_dir_url(__FILE__) . 'assets/images/';
	}

    /* aggiunge il template alla select del backend */
    function add_template_to_select($post_templates, $wp_theme, $post, $post_type) {
 
        $this->get_template_files('landing', $post_templates);
        $this->get_template_files('thankyou', $post_templates);
        return $post_templates;
    }

    /* recupera i template file */
    private function get_template_files($folder, &$post_templates) {
        $templates = scandir(plugin_dir_path( __FILE__ ) . 'assets/templates/' . $folder, SCANDIR_SORT_DESCENDING);
        for ($i = 0; $i < count($templates); $i++) {
            if ($templates[$i] != '.' && $templates[$i] != '..') $post_templates[$templates[$i]] = __(basename($templates[$i],'.php'));
        }
    }

    /* recupera il template della pagina */
    function get_template($template) {
        global $post;
        $wireland_template = $this->scan_templates('landing');
        if (!$wireland_template) $wireland_template = $this->scan_templates('thankyou');
        if (!$wireland_template) return $template;
        return $wireland_template;
    }

    /* scansiona i template file */
    private function scan_templates($folder) {
        $template_files = scandir(plugin_dir_path( __FILE__ ) . 'assets/templates/'. $folder , SCANDIR_SORT_DESCENDING);
        for ($i = 0; $i < count($template_files); $i++) {
            if ($template_files[$i] != '.' && $template_files[$i] != '..') {
                if (get_page_template_slug($post->ID) === $template_files[$i]) {
                    if ($theme_file = locate_template(array($template_files[$i]))) {
                        $template = $theme_file;
                    } else {
                        $template = plugin_dir_path( __FILE__ ) . 'assets/templates/' . $folder . '/' . $template_files[$i];
                    }
                }
            }
        }
        return $template;
    }

    function render($atts, $content = null) {
        extract(shortcode_atts(array(
            'par1' => 'Hello',
            'par2' => 'world'
            ), $atts,  'render'));
        ob_start();
		?>
        <p class="cabi_helloworld">
            <?php echo $par1 ?> <?php echo $par2 ?>!
        </p>
        <?php
        return ob_get_clean();
    }

    static function getThankYouPageUrl() {
        return get_option('wireland-thank-you-page');
    }

    static function getTrackingAnalytics() {
        if (get_option('wireland-tracking-analytics') != '') {
            ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_option('wireland-tracking-analytics') ?>"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', <?php echo get_option('wireland-tracking-analytics') ?>, { 'anonymize_ip': true });
            </script>
            <?php
        }
    }

    static function getTrackingPixel() {
        if (get_option('wireland-tracking-pixel') != '') {
            ?>
            <!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', <?php echo get_option('wireland-tracking-pixel') ?>);
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=<?php echo get_option('wireland-tracking-pixel') ?>&ev=PageView&noscript=1"
            /></noscript>

            <!-- Facebook Pixel Code - tracciamento eventi sui pulsanti -->
            <script>
            jQuery('.cabi_block__cta').click(function() {
                fbq('trackCustom', 'EVENT_NAME', {
                    id: 'cta_click',
                    value: 0.5,
                    currency: 'EUR'
                });
            });
            </script>
            <?php
        }
    }


    function hello_world_ajax() {
        echo json_encode(array('Hello', 'world'));
		wp_die(); /* previene che WordPress accodi '0' al risultato */
    }

    
    function add_settings_page() {
        add_options_page(
            'Wireland',
            'Wireland',
            'manage_options',
            'wireland',
            array($this,'render_settings_page')
        );
    }

    function add_settings() {
        add_option('wireland-tracking-analytics', '');
        add_option('wireland-tracking-pixel', '');
        add_option('wireland-thank-you-page', '');
        add_option('wireland-email', '');
    }

    function remove_settings() {
        delete_option('wireland-tracking-analytics');
        delete_option('wireland-tracking-pixel');
        delete_option('wireland-thank-you-page', '');
        delete_option('wireland-email', '');
    }

    function render_settings_page() {
        if (!current_user_can('manage_options')) wp_die('Non possiedi i permessi per accedere a questa pagina');
        ?>
        <div class="wrap">
            <style><?php include_once(dirname(__FILE__) . '/assets/css/admin.css') ?></style>
            <?php
            if (isset($_POST['submit']) && wp_verify_nonce($_POST['modify_settings_nonce'], 'modify_settings')) {
                echo '<p class="wireland_admin_message wireland_admin_message--success">Impostazioni aggiornate!</p>';
                update_option('wireland-tracking-pixel', $_POST['pixel']);
                update_option('wireland-tracking-analytics', $_POST['analytics']);
                update_option('wireland-thank-you-page', $_POST['thank-you']);
                update_option('wireland-email', $_POST['email']);
            }
            ?>
            <h1>Impostazioni Wireland</h1>
            <form method="post" class="wireland_admin_form">
                <h2>1. Codici di tracciamento</h2>
                <?php wp_nonce_field('modify_settings', 'modify_settings_nonce') ?>
                <label>Codice Facebook pixel</label>
                <input class="wireland_admin_form__input" value="<?php echo get_option('wireland-tracking-pixel') ?>" type="text" name="pixel" id="pixel" placeholder="PIXEL_TRACKING_CODE">
                <label>Codice Analytics</label>
                <input class="wireland_admin_form__input" value="<?php echo get_option('wireland-tracking-analytics') ?>" type="text" name="analytics" id="analytics" placeholder="ANALYTICS_TRACKING_CODE">
                
                
                
                
                <h2>2. Thank you page</h2>
                <?php
                /*
                $landing_files = scandir(plugin_dir_path( __FILE__ ) . 'assets/templates/landing', SCANDIR_SORT_DESCENDING);
                for ($i = 0; $i < count($landing_files); $i++) {
                    if ($landing_files[$i] != '.' && $landing_files[$i] != '..') {
                        ?><label><?php echo basename($landing_files[$i], '.php') ?></label><?php
                        $thankyou_files = scandir(plugin_dir_path( __FILE__ ) . 'assets/templates/thankyou', SCANDIR_SORT_DESCENDING);
                        for ($j = 0; $j < count($thankyou_files); $j++) {
                            if ($thankyou_files[$j] != '.' && $thankyou_files[$j] != '..') {
                            ?><select><?php
                                ?><option value="<?php echo basename($thankyou_files[$j], '.php') ?>"><?php echo basename($thankyou_files[$j], '.php') ?></option><?php
                            ?></select><?php
                            }
                        }
                    }
                }
                */

                $query = new WP_query (array(
                    'post_type' => 'page',
                    'nopaging' => true,
                    'orderby' => 'post_title',
                    'order' => 'ASC'
                ));
                if ($query->have_posts()) {
                    $options = '';
                    while ($query->have_posts()) {
                        $query->the_post();
                        $options .= '<option';
                        if (get_the_permalink() == get_option('wireland-thank-you-page')) $options .= ' selected="selected"';
                        $options .= ' value="' . get_the_permalink() . '">' . get_the_title() . '</option>';
                    }
                }
                wp_reset_query();
                wp_reset_postdata();
                ?>
                <label>Seleziona la pagina di atterraggio del form</label>
                <select class="wireland_admin_form__select" name="thank-you" id="thank-you">
                <?php echo $options ?>    
                </select>

                <h2>3. Indirizzo email</h2>
                <label>A chi verrano inviati i dati del form?</label>
                <input class="wireland_admin_form__input" value="<?php echo get_option('wireland-email') ?>" type="text" name="email" id="email" placeholder="EMAIL">

                <?php submit_button('Salva'); ?>

            </form>
        </div>
        <?php
    }

    static function send_email() {
        
        $message = '';
        $userdata = '';
        
        if (isset($_POST['submit']) && wp_verify_nonce($_POST['to_thank_you_page_nonce'], 'to_thank_you_page') && get_option('wireland-email') != '') {
            foreach ($_POST as $key => $value) {
                $userdata .= "$key: $value\n";
            }
            $message .= $userdata;
            mail(get_option('wireland-email'), 'Thank you page', $message);
        }
    }
    

}

new Wireland();
