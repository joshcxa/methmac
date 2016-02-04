<?php get_header(); ?>

<div class="content main bb">
    <?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; endif;
	?>

</div>
<!-- content main bb -->

<?php get_footer(); ?>
