<?php 
/*
 * Template Name: Wireland Thank you
 * Template Post Type: page
 */ 
?>

<?php WireLand::send_email() ?>
<?php include_once(dirname(__FILE__) . '/../inc/head.php') ?>
    <body>
        <?php Wireland::theLoop() ?>
        <?php if (Wireland::isMadeWithElementor() === false) include_once(dirname(__FILE__) . '/template-parts/' . basename(__FILE__, '.php') . '-content.php'); ?>
        <?php include_once(dirname(__FILE__) . '/../inc/footer.php') ?>
    </body>
</html>