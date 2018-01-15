<?php get_header(); ?>
			
			<section id="main-content">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				
				<article class="post resume">
					<div class="thumbnail">
					<?php
          if ( has_post_thumbnail() ) {
                the_post_thumbnail();
					}
					?>
					</div>

					<header class="post-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small class="meta"><?php the_time( get_option('date_format')); ?> &bull; <a href=""><?php the_category(','); ?></a></small>
					</header>
					<div class="post-content">
					<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo &rarr;', 'apk'); ?></a>
					</div>
				</article>	<!-- article -->

			<?php endwhile; else : ?>
			<article class="post resume">
					<header class="post-title">
						<h2><?php _e('No hay contenidos disponibles', 'apk'); ?></h2>
						
					</header>
					<div class="post-content">
					<?php the_excerpt(); ?> 
						
					</div>
				</article>	<!-- article -->
			<?php endif; ?>
			<?php if( get_next_posts_link() || get_previous_post_link() )?>
				
				<div class="posts-nav cf">
					<?php next_posts_link(__('&larr; Previos', 'apk'));?>
					<?php previous_posts_link(__('Recientes &rarr;', 'apk'));?>
				</div>
				
				
			</section><!-- /#main-content -->
			
			<?php get_sidebar(); ?>
			
			<?php get_footer(); ?>
