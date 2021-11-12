<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NEW FUNCY</title>
    <link rel="stylesheet" href="<?php get_stylesheet_uri();?>">
</head>
<body>

<?php get_header("header")?>

<div id="cuerpo">
    <?php

        echo "<h1 class='morado'>HOLA FUNCY</h1>";
        echo get_stylesheet_uri();
    ?>
</div>
<?php get_footer()?>
</body>
</html>