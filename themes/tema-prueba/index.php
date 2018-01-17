<?php get_header(); ?>

	<main class="main-page">
		<section class="blog main-post container">
			<div class="row">
				<div class="col-xs-12">
					<article style="background:url(http://localhost:8888/wordpress/wp-content/themes/tema-prueba/img/hero.png)no-repeat center; background-size:cover">
						<a href="http://localhost:8888/wordpress/2017/12/18/entrada-3/">
							<!-- <header>
								<figure style="background:url(http://localhost:8888/wordpress/wp-content/uploads/2017/12/a6754933-b54b-4715-8276-6a0c7ef00931.jpg)no-repeat center; background-size:cover"></figure>
							</header> -->
							<main>
								<h3 class="title">Artificial Intelligence As A Service: Image recognition</h3>
								<div class="basic-font">
									<p>Among the new storage systems that are appearing within the Big Data universe, Cassandra is one of the most interesting and significant. Cassandra is defined as a distributed and massively scalable NoSQL database, and this, from our point of view, is its greatest virtue: the capacity to scale up linearly. Additionally, Cassandra introduces very interesting […]</p>
									<span class="span-reading-time"> 1 min read</span>
								</div>
							</main>
						</a>
						<footer class="post-info">
							<div class="post-info-detail">
								<div class="post-author">
									<img alt="" src="http://0.gravatar.com/avatar/f35d54ab4199477152cc9b2b3f64ab11?s=48&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f35d54ab4199477152cc9b2b3f64ab11?s=96&amp;d=mm&amp;r=g 2x" class="avatar avatar-48 photo" height="48" width="48">
									<div>
										<p>barrabes</p>
										<p>18 diciembre, 2017</p>
									</div>
								</div>
								<div class="actions">
									<img src="http://localhost:8888/wordpress/wp-content/themes/tema-prueba/img/like-white.svg">
									<img src="http://localhost:8888/wordpress/wp-content/themes/tema-prueba/img/share-white.svg">
								</div>
							</div>
						</footer>
					</article>
				</div>
			</div>
		</section>


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

					<article class="article-<?php $category = get_the_category();echo $category[0]->slug;?>">
						<a href="<?php the_permalink(); ?>">
							<header>
							<?php if( has_post_thumbnail()): ?>
							<figure style="background:url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center; background-size:cover">
							</figure>
							<?php endif; ?>
							</header>
							<main>
								<h3 class="title"><?php the_title(); ?></h3>
								<div class="basic-font">
									<?php the_excerpt(); ?>
									<?php echo do_shortcode(
										'[rt_reading_time postfix="min read" postfix_singular="min read" label=""]'
									); ?>
								</div>
							</main>
						</a>
						<footer class="post-info">
							<div class="post-info-detail">
									<div class="post-author">
										<?php $author_id=$post->post_author; ?>
										<?php
											 echo get_avatar(get_the_author_meta('user_email'), $size = '48');
										?>
										<div>
											<p><?php the_author_meta( 'display_name' , $author_id ); ?></p>
											<p><?php the_time( get_option('date_format')); ?></p>
										</div>
								</div>
									<div class="actions">
										<img src="<?php bloginfo('template_url'); ?>/img/like.svg">
										<img src="<?php bloginfo('template_url'); ?>/img/share.svg">
									</div>
								</div>
						</footer>
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


<?php get_footer(); ?>
