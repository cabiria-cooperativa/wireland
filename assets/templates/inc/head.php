<?php include_once(dirname(__FILE__) . '/../../../wireland.php') ?>
<!doctype html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <?php if (!Wireland::isMadeWithElementor()) : ?>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
            <?php endif; ?>
        <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ?>../../css/style.css?ver=<?php echo mt_rand() ?>">
        <?php if (!Wireland::isMadeWithElementor()) : ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php endif; ?>
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
		<script src="<?php echo plugin_dir_url( __FILE__ ) ?>../../js/wireland.js?ver=<?php echo mt_rand() ?>"></script>

        <?php Wireland::getTrackingAnalytics() ?>
        <?php Wireland::getTrackingPixel() ?>

        <title>
        <?php 
        global $post;
        echo $post->post_title;
        ?>
        </title>
        <?php 
        // per usare Elementor nel backend ho bisogno di wp_head
        if (Wireland::isElementorActive() && Wireland::isMadeWithElementor()) wp_head();
        ?>
    </head>