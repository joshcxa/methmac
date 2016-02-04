<div class="newsroom">

	<h2 class="news-title"><?php the_title(); ?></h2>

    <small><span class="li li_calendar"></span> <?php the_date(); ?> by <span class="li li_user"></span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p></small>

    <?php the_excerpt(); ?>
    <span class="li li_tag"></span><?php the_category(); ?>

    <a href="<?php the_permalink(); ?>">Read More</a>

</div><!-- /.newsroom -->
