<?php 
/*
template name: Ancho completo
*/get_header(); ?>
			
			<section id="main-content" class="fullwidth">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				
				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1>
					</header>
					<div class="post-content">
					<?php the_content(); ?>
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif; ?>
				
				
				
			</section><!-- /#main-content -->
			
		</section><!-- /#global-content -->
		
		<?php get_footer(); ?>