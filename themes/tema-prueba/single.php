
<?php get_header();?>
<main class="main-page">

		<section id="main-content">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article class="post">
				<header class="post-header">
						<figure style="background:url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center; background-size:cover">
						</figure>
						<div class="container">
							<div class="post-title">
								<h5 class="color-underline-<?php $category = get_the_category();echo $category[0]->slug;?>"><?php $category = get_the_category();echo $category[0]->cat_name;?></h5>
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
						<section class="post-info">
							<div class="container">
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
							</div>
						</section>
					</header>
					<div class="post-content container">
						<p><?php echo do_shortcode(
							'[rt_reading_time postfix="min read" postfix_singular="min read" label=""]'
						); ?><p>
						<?php the_content(); ?>
						<div class="tags-area">
							<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
						</div>
					</div>
				</article>
				<!-- article -->
				<?php endwhile; endif; ?>

				<!-- #comments-area -->
				<div id="comments-area" class="container">
				<?php comments_template(); ?>
			</div>
			

			</section>
			<!-- /#main-content -->

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
			<!-- NEWSLETTER  -->



	</main>

	<section class="nav-footer">
		<h5 class="title-footer">
			<?php the_title(); ?>
		</h5>
		<div class="actions">
			<img src="<?php bloginfo('template_url'); ?>/img/like.svg">
			<img src="<?php bloginfo('template_url'); ?>/img/share.svg">
		</div>
		<?php
		$next = get_permalink(get_adjacent_post(false,'',false));
			if 
			($next != get_permalink()): ?>
			<a class="navigation" href="<?php echo $next; ?>">
			<img src="<?php bloginfo('template_url'); ?>/img/arrow_next.svg">
		</a>
		<?php endif; ?>


		
		
		
	
	
		</section>

			<?php get_footer(); ?>
