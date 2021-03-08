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
      <h3>Algumas breves ocasiões podem mudar nossas vidas. Daniel volta para casa depois de uma viagem de trabalho e começa a refletir sobre a vida e sua solidão. À partir de um encontro casual, descobre que as respostas para seus anseios e dúvidas talvez encontrem-se dentro dele mesmo.</h3>
    </div>
    <div class="premios-box">
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
</section>
<?php
get_footer();
