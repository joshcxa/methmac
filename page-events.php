<?php get_header(); ?>

<div class="content main bb">

    <?php
		$args =  array(
			'post_type' => 'events',
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);

        $custom_query = new WP_Query( $args );
        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

		<div class="">
            <h2><?php the_title(); ?></h2>

            <p><?php the_field('location'); ?></p>

			<?php the_content(); ?>

            <?php if ( has_post_thumbnail() ) {
        	  the_post_thumbnail( );
        	} ?>

		</div>

		<?php endwhile; ?>

</div>
<!-- content main bb -->

<?php get_footer(); ?>
