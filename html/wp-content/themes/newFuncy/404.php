<?php

get_header();
?>

<div id="contenedor"class ="rojo">
    <div id=fixed">
        <h1>Estou na cabecera</h1>
    </div>

    <div id="cuerpo">
        <log src="<?php echo get_stylesheet_directory_uri();?>"/>
    </div>
</div>
<div class="static">
    <img src="<?php echo get_stylesheet_directory_uri();?>/imagenes/eror-404.jpg" id="imagen">
</div>

<div id="relative">
    <h1>NONONO ESTA PAGINA NO ESTA OPERATIVA COMO EL PATICA</h1>
    <div id="absolute">
        <h1>ABSOLUTE</h1>
    </div>
</div>


<?php get_footer()?>

