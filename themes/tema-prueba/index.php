<?php get_header(); ?>

	<main class="main-page">
		<section class="blog main-post container">
			<div class="row">
				<div class="col-xs-12">
					<?php
						$args = array( 'numberposts' => 1 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
							<article class="post-article" style="background:url(
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail_url('full');
								}
								else {
									echo get_bloginfo( 'template_url' ) 
									. '/img/hero.png';
								}
								?>
								)no-repeat center; background-size:cover; box-shadow: 0 1px 8px 0 rgba(0, 0, 0, 0.5)">
								<a href="<?php the_permalink(); ?>">
									<main>
										<h3 class="title"><?php the_title(); ?></h3>
										<div class="basic-font">
											<?php the_excerpt(); ?>
											<span class="span-reading-time">
												<?php echo do_shortcode(
												'[rt_reading_time postfix="min read" postfix_singular="min read" label=""]'
												); ?>
											</span>
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
											<?php echo do_shortcode(
											'[wp_ulike]'
										); ?>
											<!-- <img src="<?php bloginfo('template_url'); ?>/img/like.svg"> -->
											<img src="<?php bloginfo('template_url'); ?>/img/share-white.svg">
										</div>
									</div>
								</footer>
							</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>


		<section class="top-section">
			<div class="container">
				<h2 class="title-2 color-underline">Top Stories</h2>
				<div class="popular-posts">
					<?php $pc = new WP_Query('orderby=comment_count&posts_per_page=10');
					while ($pc->have_posts()) : $pc->the_post(); ?>
						<article class="post-article article-<?php $category = get_the_category();echo $category[0]->slug;?>">
						<a href="<?php the_permalink(); ?>">
							<header>
									<?php if( has_post_thumbnail()): ?>
										<figure style="background:url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center; background-size:cover">
										</figure>
									<?php else: ?>
										<figure style="background:url(<?php bloginfo('template_url'); ?>/img/hero.png)no-repeat center; background-size:cover">
										</figure>
									<?php endif; ?>
							</header>
							<main>
								<div class="post-subtitle-info">
									<h4 class="subtitle"><?php $category = get_the_category();echo $category[0]->name;?></h4>
									<p class="basic-font">
										<?php echo do_shortcode(
										'[rt_reading_time postfix="min read" postfix_singular="min read" label=""]'
									); ?>
									</p>
								</div>
						
								<h3 class="title"><?php the_title(); ?></h3>
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
									<?php echo do_shortcode(
										'[wp_ulike]'
									); ?>
										<!-- <img src="<?php bloginfo('template_url'); ?>/img/like.svg"> -->
										<img src="<?php bloginfo('template_url'); ?>/img/share.svg">
									</div>
								</div>
						</footer>
					</article>
					<?php endwhile; ?><?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		
		<section class="blog container">
			<div class="row">
				<main class="col-sm-12">
				<?php query_posts('offset=1'); if( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<article class="post-article article-<?php $category = get_the_category();echo $category[0]->slug;?>">
						<a href="<?php the_permalink(); ?>">
							<header>
									<?php if( has_post_thumbnail()): ?>
										<figure style="background:url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center; background-size:cover">
										</figure>
									<?php else: ?>
										<figure style="background:url(<?php bloginfo('template_url'); ?>/img/hero.png)no-repeat center; background-size:cover">
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
									<?php echo do_shortcode(
										'[wp_ulike]'
									); ?>
										<!-- <img src="<?php bloginfo('template_url'); ?>/img/like.svg"> -->
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
					<span><?php _e('Suscríbete a nuestro boletín', 'btech'); ?></span>
					<?php _e('para mantenerse al día con todas las noticias sobre sus temas tecnológicos favoritos!', 'btech'); ?>
				</h5>
				<?php echo do_shortcode(
					'[contact-form-7 id="1451" title="Formulario de contacto 1"]'
				); ?>
			</div>
		</section>
	</main>


<?php get_footer(); ?>
