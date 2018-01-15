
<?php get_header();?>
<main class="main-page">
			
		<section id="main-content">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article class="post">
				<header class="post-header">
						<figure>
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
							}
							?>
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
								<img src="<?php the_author_meta( 'avatar' , $author_id ); ?> "  class="avatar" />
								<div>
									<p><?php the_author_meta( 'display_name' , $author_id ); ?> Apellido Largo  </p>
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
						<?php the_content(); ?>
						<div class="tags-area">
					<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
					</div>
						
					</div>
					
					
				
				</article>	<!-- article -->
				<?php endwhile; endif; ?>

				<!-- #comments-area -->
				<!-- <div id="comments-area" class="container">
				php	<comments_template(); >
				
				</div>
				 -->
				
			</section><!-- /#main-content -->
			
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