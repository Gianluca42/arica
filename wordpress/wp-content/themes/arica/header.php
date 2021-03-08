<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arica
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url')?>/assets/css/owl.carousel.min.css' media='all'>
	<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url')?>/assets/css/owl.theme.default.min.css' media='all'>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/main.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<div class="wrapper">

		<h1><a class="logo ir" href="<?php bloginfo('siteurl')?>">Arica Filmes</a></h1>

		<button class="bt-menu"><hr><hr><hr></button>

		<nav class="menu">
			<ul>
				<li><a class="<?php if(is_page('Sobre')){?> ativo <?php } ?>" href="<?php bloginfo('siteurl')?>/sobre">Sobre</a></li>
				<li><a class="<?php if(is_page('Projetos')){?> ativo <?php } ?>" href="<?php bloginfo('siteurl')?>/projetos">Projetos</a></li>
				<li><a class="<?php if(is_page('Em breve')){?> ativo <?php } ?>" href="<?php bloginfo('siteurl')?>/em-breve">Em breve</a></li>
				<li><a class="<?php if(is_page('Blog')){?> ativo <?php } ?> desativado" href="<?php bloginfo('siteurl')?>/blogs">Contato</a></li>
			</ul>
		</nav>
	</div>
</header>

<main>
