<div class="newsroom">

	<?php if ( has_post_thumbnail() ) {
	  the_post_thumbnail( 'newsroom' );
	} ?>

	<h2 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<ul class="post-meta">
		<li>
			<span class="li li_user"></span> Posted by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
		</li>
		<li>
			<span class="li li_calendar"></span> On <?php the_date(); ?>
		</li>
		<li>
			<span class="li li_tag"></span> <?php the_category( ', ' ); ?>
		</li>

	</ul>

	<?php the_content( ('') ); // <!-- ('') removes the (more...) after the excerpt ?>

	<?php if( !is_single() ) { ?>
		<a href="<?php the_permalink(); ?>">Read More</a>
	<?php } ?>

</div><!-- /.newsroom -->
