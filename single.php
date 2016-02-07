<?php get_header(); ?>

<div class="content main bb">

	<div class="newsroom-contents">

		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content-news', get_post_format() );



			endwhile; endif;
		?>

	</div><!-- /.newsroom -->

    <?php get_sidebar(); ?>

</div>
<!-- content main bb -->

<?php get_footer(); ?>
