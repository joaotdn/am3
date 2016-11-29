<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"/>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-ico"/>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<nav id="scroll-menu" class="small-12 show-for-large">
		<div class="row">
			<div class="small-12 columns">
				<figure class="float-left">
					<a href="<?php echo home_url(); ?>" title="Página principal">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_am3white.png" alt="" width="90">
					</a>
				</figure>

				<div class="float-right get-menu"></div>
			</div>
		</div>
	</nav>

	<?php
		/**
		 * TOP BAR
		 */
	?>
	<div id="top-bar" class="small-12 float-left show-for-medium">
		<div class="row">
			<div class="small-12 columns">
				<ul class="menu float-left social topo">
					<?php get_template_part( 'template-parts/social-links' ); ?>
				</ul>

				<ul class="menu float-right contato-topo">
					<?php
						$telefone = get_field('am3_telefone', 'option');
						$suporte = get_page_by_title('Suporte');

						if ($telefone)
							echo '<li><i class="mkdf-icon-font-awesome fa fa-phone"></i> '. $telefone .'</li>';
					?>
					<li class="suporte-link">
						<a href="<?php echo ($suporte->ID) ? get_page_link($suporte->ID) : 'http://www.am3solucoes.com.br/suporte/'; ?>" title="Suporte AM3" target="_blank">
							<i class="mkdf-icon-font-awesome fa fa-life-ring"></i>
							<strong>Suporte</strong>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<header id="header" class="small-12 float-left">

		<div class="row rel show-for-large">

			<figure class="medium-3 large-2 columns">
				<a href="<?php echo home_url(); ?>" title="Página principal">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.png" alt="">
				</a>
			</figure>

			<nav id="menu-principal" class="medium-9 large-10 columns text-right">
				<ul class="menu v-center" data-magellan>
					<?php
						$defaults = array(
							'theme_location'  => 'primary',
							'menu'            => 'Menu principal',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'primary',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '%3$s',
							'depth'           => 0,
							'walker'          => '',
						);
						wp_nav_menu($defaults);
					?>
					<li><a href="#" title="Buscar" class="mkdf-icon-font-awesome fa fa-search" data-toggle="search-box"></a></li>
				</ul>

				<div class="dropdown-pane bottom" id="search-box" data-dropdown data-auto-focus="true" data-hover="true" data-hover-pane="true">

					<form action="<?php echo home_url(); ?>" method="get" id="searchform-menu">
						<div class="small-12 float-left">
							<label>
								<input type="text" name="s" placeholder="Buscar...">
								<button class="button" type="submit">Pesquisar</button>
							</label>
						</div>
					</form>

				</div>
			</nav>

		</div>

	</header>

	<header id="mo-header" class="row rel hide-for-large">

		<div class="small-12 columns">
			<figure class="float-left small-12 text-center rel">
				<a href="#" title="Exibir menu" class="open-menu float-left" data-open-menu></a>
				<h1 class="no-margin">
					<a href="<?php echo home_url(); ?>" title="Página principal">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.png" alt="AM3 Soluções">
					</a>
				</h1>
			</figure>
		</div>

		<div class="mask small-12"></div>

		<nav id="mo-menu" class="small-12 float-left">
		</nav>
	</header>

	<a href="#" class="close-menu small-12 hide-for-large" data-open-menu></a>


