<?php
/* Template name: Contact After shoes*/

get_header(); 
?>
	
	<div class="content-area">
		<main id="main" class="site-main--contact" role="main">
			
			<header class="site-main__header">
				<h2><?php the_title(); ?></h2>
			</header>

			<section class="site-main__content">
				<article class="site-main__content--wrapper container">
					<?php the_content(); ?>
				</article>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();