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
        //add_action('admin_menu', array($this, 'add_settings_page'));  /* creo una pagina di impostazioni      */
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
        //$this->add_settings();
    }

    function deactivation(){
        //$this->remove_settings();
	  }

    function init() {
        wp_enqueue_style( 'cabi_plugin', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' , array(), mt_rand());
        wp_enqueue_script('cabi_plugin', plugin_dir_url( __FILE__ ) . 'assets/js/wireland.js', array('jquery'), mt_rand(), true);
        wp_localize_script('init', 'init_ajax', array('url' => admin_url( 'admin-ajax.php' )));
    }

    /* aggiunge il template alla select del backend */
    function add_template_to_select($post_templates, $wp_theme, $post, $post_type) {
        $post_templates['wireland-default.php'] = __('Wireland default');
        return $post_templates;
    }

    /* recupera il template default */
    function get_template($template) {
        global $post;
        if (get_page_template_slug($post->ID) === 'wireland-default.php') {
            if ($theme_file = locate_template(array('wireland-default.php'))) {
                $template = $theme_file;
            } else {
                $template = plugin_dir_path( __FILE__ ) . 'assets/templates/wireland-default.php';
            }
        }
        if (!$template) throw new \Exception('No template found');
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


    function hello_world_ajax() {
        echo json_encode(array('Hello', 'world'));
		wp_die(); /* previene che WordPress accodi '0' al risultato */
    }

    /*
    function add_settings_page() {
        add_options_page(
            'My custom settings page',
            'Custom settings page',
            'manage_options',
            'cabi-settings-page',
            array($this,'render_settings_page')
        );
    }

    function add_settings() {
        //add_option('key', 'value');
    }

    function remove_settings() {
        //delete_option('key');
    }

    function render_settings_page() {
        if (!current_user_can('manage_options')) wp_die('Non possiedi i permessi per accedere a questa pagina');
        ?>
        <div class="wrap">
            <h2>Setting title</h2>
            <?php
            if (isset($_POST['submit']) && wp_verify_nonce($_POST['modify_settings_nonce'], 'modify_settings')) {
                //update_option('key', 'value');
            }
            ?>
            <form method="post">
                <?php wp_nonce_field('modify_settings', 'modify_settings_nonce') ?>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
    */

}

new Wireland();
