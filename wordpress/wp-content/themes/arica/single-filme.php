<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package arica
 */

get_header();
?>
<section class="section-dingle-filme">
  <div class="carrossel owl-carousel">
    <div class="foto">
      <img src='<?php bloginfo('template_url'); ?>/assets/imgs/Background.png' alt="">
    </div>
    <div class="foto">
      <img src='<?php bloginfo('template_url'); ?>/assets/imgs/Background.png' alt="">
    </div>
    <div class="foto">
      <img src='<?php bloginfo('template_url'); ?>/assets/imgs/Background.png' alt="">
    </div>
  </div>
  <div class="info-topo">
    <div class="info-destaque">
      <p>Curta-metragem</p>
      <h1><?php the_title(); ?></h1>
      <h2>dirigido por <?php the_field('direcao'); ?></h2>
      <h3><?php the_field('descricao'); ?></h3>
    </div>
    <div class="premios-box carrossel  owl-carousel">
      <div class="premio">
        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/icone-prmio.svg" alt="">
          <h1>Nome do Festival ou Prêmio em destaque</h1>
          <h2>Nome do projeto</h2>
      </div>
      <div class="premio">
        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/icone-prmio.svg" alt="">
          <h1>Nome do Festival ou Prêmio em destaque</h1>
          <h2>Nome do projeto</h2>
      </div>
      <div class="premio">
        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/icone-prmio.svg" alt="">
          <h1>Nome do Festival ou Prêmio em destaque</h1>
          <h2>Nome do projeto</h2>
      </div>
      <div class="premio">
        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/icone-prmio.svg" alt="">
          <h1>Nome do Festival ou Prêmio em destaque</h1>
          <h2>Nome do projeto</h2>
      </div>
    </div>
  </div>
  <div class="bottom-interna">
    <div class="trailer">
      <img src="<?php bloginfo('template_url'); ?>/assets/imgs/video-interna.jpg" alt="">
    </div>
    <div class="ficha-tecnica">
      <h1>Ficha Técnica</h1>
      <div class="ficha-bloco">
        <div class="ficha-info">
          <h2>Produção</h2>
          <p>Maria da Silva</p>
        </div>
        <div class="ficha-info">
          <h2>Produção</h2>
          <p>Maria da Silva</p>
        </div>
        <div class="ficha-info">
          <h2>Produção</h2>
          <p>Maria da Silva</p>
        </div>
        <div class="ficha-info">
          <h2>Produção</h2>
          <p>Maria da Silva</p>
        </div>

      </div>
    </div>
  </div>
</section>
<?php
get_footer();
