<?php include_once(dirname(__FILE__) . '/../../../wireland.php') ?>
<!doctype html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ?>../../css/style.css?ver=<?php echo mt_rand() ?>">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <?php Wireland::getTrackingAnalytics() ?>
        <?php Wireland::getTrackingPixel() ?>

        <title>
        <?php 
        global $post;
        echo $post->post_title;
        ?>
        </title>
    </head>