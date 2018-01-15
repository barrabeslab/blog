<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <?php wp_head();?>



</head>

<body>

	<header id="menu">
		<div class="mask"></div>
		<div>
			<nav>
				<div class="header">
					<a href="#ppal" class="smooth">
						<div class="logo-menu">
							<img src="<?php echo get_template_directory_uri(); ?>/img/bbs_big_yellow.svg" alt="logo Barrabes">
						</div>
					</a>

					<a class="btn_menu">
						<div class="icon_menu"></div>
					</a>
				</div>

				<ul class="links col-md-8">
					<li><a href="#" class="smooth">Home</a></li>

					<?php
				  	$args = array( 'orderby' => 'slug', 'parent' => 0 );
				  	$categories = get_categories( $args );
				  	foreach ( $categories as $category ) {
				  		echo '<li><a class ="' . $category->slug . '" href="' . $category->slug . '" rel="bookmark">' . $category->name . '</a>
				  	</li>'; }
					?>
				</ul>

				<div class="options">
					<ul>
						<li><a>Spanish</a></li>
						<li><a>English</a></li>
					</ul>
				</div>
      </nav>
			<div class="main-header header">
				<a class="btn_search">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.svg" alt="logo Barrabes">
				</a>

				<a href="#ppal" class="smooth">
					<div class="logo-menu">
						<img src="<?php echo get_template_directory_uri(); ?>/img/bbs_big_yellow.svg" alt="logo Barrabes">
					</div>
				</a>

				<a class="btn_menu">
					<div class="icon_menu"></div>
				</a>
			</div>
		</div>
	</header>
