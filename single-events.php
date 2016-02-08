<?php get_header(); ?>

<div class="content main bb">

	<div class="newsroom-contents">

		<h3>single-events.php</h3>

		<?php while ( have_posts() ) : the_post(); ?>

			<p><?php the_field('location'); ?></p>
			<p><?php the_field('address'); ?></p>
			<p><?php the_field('city_/_town_/_suburb'); ?></p>
			<p><?php the_field('date'); ?></p>
			<p><?php the_field('time'); ?></p>

			<?php

			$location = get_field('map');

			if( !empty($location) ):
			?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
			<?php endif; ?>

	    <?php endwhile; // end of the loop. ?>

	</div><!-- /.newsroom -->


</div>
<!-- content main bb -->

<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>


<?php get_footer(); ?>
