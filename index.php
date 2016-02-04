<?php get_header(); ?>

<div class="content main bb">

    <div class="newsroom-contents">
    <?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		get_template_part( 'content-news', get_post_format() );
	endwhile;
	?>

    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

    <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    </div>
    <!-- newsroom-contents -->

    <?php get_sidebar(); ?>

</div>
<!-- content main bb -->

<?php get_footer(); ?>
