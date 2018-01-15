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
					<a href="<?php echo home_url(); ?>" class="smooth">
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
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
					    <path fill="#333" fill-rule="evenodd" d="M16 15.246l-4.734-4.7A6.365 6.365 0 0 0 12.8 6.398 6.406 6.406 0 0 0 6.4 0C2.87 0 0 2.87 0 6.399 0 9.929 2.87 12.8 6.4 12.8a6.368 6.368 0 0 0 4.11-1.502L15.247 16l.754-.754zm-9.6-3.513A5.335 5.335 0 0 1 1.067 6.4 5.333 5.333 0 1 1 6.4 11.733z"/>
					</svg>
				</a>

				<a href="<?php echo home_url(); ?>" class="smooth">
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
