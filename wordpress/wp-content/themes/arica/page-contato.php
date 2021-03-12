<?php
/**
 * Template Name: Contato
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
<section class="section-contato">
  <img src="<?php bloginfo('template_url'); ?>/assets/imgs/fundo-contato.svg" alt="">
  <div class="div-contato">
    <p>contato@arica</p>
    <p>+1 222-345-0000</p>
    <div class="social">
      <img src="<?php bloginfo('template_url'); ?>/assets/imgs/Facebook.svg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/assets/imgs/Instagram.svg" alt="">
      <img src="<?php bloginfo('template_url'); ?>/assets/imgs/Behance.svg" alt="">
    </div>
  </div>
</section>
<?php
get_footer();
