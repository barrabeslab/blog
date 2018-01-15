<?php get_header(); ?>
<section class="main-section js-height" style="background:url(<?php bloginfo('template_url'); ?>/img/hero.png) center no-repeat;background-size:cover;">
		<!-- <div class="mask"></div> -->
		<div class="container js-height">
			<article class="main-title">
				<h5 class="color-underline-cat2">INVESTIGACIÓN</h5>
				<h1>Artificial Intelligence As A Service: Image recognition</h1>
				<a href="" class="basic-link">Continue reading</a>
			</article>
		</div>

	</section>
	<main class="main-page">
		<section class="top-section">
			<div class="container">
				<h2 class="title-2 color-underline">Top Stories
					<span class="light-text">for you</span>
				</h2>
				<div class="articles">
					<article class="top-article">
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/hero.png" alt="">
						</figure>
						<h3 class="color-title-cat1"> Technology</h3>
						<h4 class="basic-font">
							Here's The Simple Trick To Look Your Best In Selfies From Your Smartphone

						</h4>
					</article>
					<article class="top-article">
						<figure>
							<img src="img/hero.png" alt="">
						</figure>
						<h3 class="color-title-cat2"> Investigation</h3>
						<h4 class="basic-font">
							An Astronaut's View Of Mount Etna's Recent Volcanic Eruption
						</h4>
					</article>
					<article class="top-article">
						<figure>
							<img src="img/hero.png" alt="">
						</figure>
						<h3 class="color-title-cat2"> Investigation</h3>
						<h4 class="basic-font">
							An Astronaut's View Of Mount Etna's Recent Volcanic Eruption
						</h4>
					</article>
					<article class="top-article">
						<figure>
							<img src="img/hero.png" alt="">
						</figure>
						<h3 class="color-title-cat3"> Events</h3>
						<h4 class="basic-font">
							An Astronaut's View Of Mount Etna's Recent Volcanic Eruption
						</h4>
					</article>
				</div>

			</div>
		</section>
		<section class="blog container">
			<div class="row">
				<main class="col-sm-12">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<article <?php post_class(); ?>>
						<header>
						<figure style="background:url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center; background-size:cover">
						<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('full');
									}
									?>
					<!-- <img src="img/hero.png" alt=""> -->
							</figure>
							<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="info-date"><?php the_time( get_option('date_format')); ?> &bull;  / </p>
							<p class="info-author"><strong>By <?php $author_id=$post->post_author; ?>
							<?php the_author_meta( 'display_name' , $author_id ); ?></strong></p>
							<p class="info-author"><strong><a href=""><?php the_category(','); ?></a></strong></p>
						</header>
						<main>
							<div class="basic-font">
								<?php the_excerpt(); ?>
							</div>
						</main>
						<a href="<?php the_permalink(); ?>" class="basic-link"><?php _e('Seguir leyendo', 'apk'); ?></a>
						
					</article>
					<?php endwhile; else : ?>
					<article class="">
						<header>
							<h2><?php _e('No hay contenidos disponibles', 'apk'); ?></h2>
						</header>
					<div class="post-content">
					<?php the_excerpt(); ?> 
						
					</div>
				</article>
					<?php endif; ?>
				</main>
				<!-- <aside class="col-sm-4">
					<div class="widget">
							<header>
								<h3 class="title">Artificial Intelligence As A Service: Image recognition</h3>
							</header>
					</div>
					<div class="widget">
							<header>
								<h3 class="title">Artificial Intelligence As A Service: Image recognition</h3>
							</header>

					</div>
				</aside> -->
			</div>
		</section>
			<!-- NEWSLETTER  -->
			<section class="newsletter">
			<div class="container">
				<h5 class="newsletter-title">
					<span>Join our newsletter</span>
					to stay up to date on all news on your favourite tech topics!
				</h5>

				<?php echo do_shortcode(
					'[contact-form-7 id="1451" title="Formulario de contacto 1"]'
				); ?>
			</div>
		</section>
	</main>
	</main>

<?php get_footer(); ?>
