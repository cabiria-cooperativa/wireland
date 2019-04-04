<?php 
/*
 * Template Name: Wireland landing
 * Template Post Type: page
 */ 
?>

<?php include_once(dirname(__FILE__) . '/../inc/head.php') ?>
    <body>
        <?php Wireland::theLoop() ?>
        <?php if (Wireland::isMadeWithElementor() === false) include_once(dirname(__FILE__) . '/template-parts/' . basename(__FILE__, '.php') . '-content.php'); ?>
        <?php include_once(dirname(__FILE__) . '/../inc/footer.php') ?>  
    </body>
</html>