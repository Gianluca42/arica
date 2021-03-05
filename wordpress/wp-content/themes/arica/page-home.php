<?php
/**
 * Template Name: Home
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arica
 */

get_header();
?>

<section class="section-home">
  <div class="foto-destaque" style="background:url('<?php bloginfo('template_url'); ?>/assets/imgs/home.png') no-repeat; background-size: cover; background-position: center top;" >
    <img src="<?php bloginfo('template_url'); ?>/assets/imgs/Vectorcima.svg" alt="">
  </div>
  <div class="sobre-home">
    <div class="wrapper">
        <img class="virada" src="<?php bloginfo('template_url'); ?>/assets/imgs/Vector.svg" alt="">
    <p>Desde 2015 a <b>Arica Filmes</b> dedica-se à criação e ao desenvolvimento de projetos para o cinema, internet e televisão, como filmes, documentários, videoclipes, curtas-metragens e séries.</p>
      <img class="normal" src="<?php bloginfo('template_url'); ?>/assets/imgs/Vector.svg" alt="">
    </div>
  </div>
</section>

<?php
get_footer();
