<?php
/*
Template Name: single-p5-podcast-post
*/
?>
<?php get_header(); ?>
<div class="main p5-podcast-posts">
	<h1> LOL </h1>
	<?php wp_reset_postdata(); ?>
	<?php query_posts('posts_per_page=-1&post_type=p5-podcast-post'); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="p5-podcast-post">
				<h3 class="p5-podcast-post-name"><?php the_title(); ?></h3>
				<p class="p5-podcast-post-description"><?php the_excerpt(); ?></p>
				<?php the_post_thumbnail(); ?>
	    	</div>
	    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>