<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>NEW FUNCY</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
</head>
<body>

<?php define( 'WP_USE_THEMES', false )?>
<?php get_header("header")?>




<div id="cuerpo">

    <?php
        echo get_stylesheet_uri();

        echo "<h1 class='morado'>HOLA FUNCY</h1>";

        global $post;
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_title();
                the_content();
                the_post_thumbnail();

                echo"<br>";
            endwhile;
        endif;
        ?>

</div>


</body>
</html>

<?php get_footer()?>