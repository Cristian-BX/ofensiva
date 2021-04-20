<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/images/logos/ofensiva_logo.ico" sizes="24x24">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head() ?>

    <title>O F E N S I V A</title>
  </head>

  <body>

    <nav class="navbar fixed-top">
        <div class="container ms-5">
          <a class="navbar-brand" href="<?php echo get_site_url();?>">
            <img class='logo_ofsv' src="<?php echo get_template_directory_uri();?>/assets/images/logos/logo_ofsv.png" alt="" width="150">
          </a>
        </div>
    </nav>

    <div id="sidebar" class="sidebar">
      <div id='logo' class="logo">
        <a>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/logos/vinilo.png" >
        </a>
      </div>
      <ul>
      <li><a href="#home">_Inicio</a></li>
        <li><a href="#noticias">_Noticias</a></li>
        <li><a href="#programacion">_Programación</a></li>
        <li><a href="#nosotros">_Nosotros</a></li>
      </ul>
    </div>
