<?php get_header(); ?>

<div class="slider">

</div>

<div class="content main bb">
    <div class="intro">
        <?php while ( have_posts() ) : the_post(); ?>

           <?php the_field('intro'); ?>

       <?php endwhile; ?>
    </div>

    <div class="divider">

    </div>

    <div class="items">

		<div class="services">
            <dl>
                <dt>
                    <span class="li li_megaphone"></span>
                </dt>
                <dd>
                    <h3>Services</h3>

                    <?php while ( have_posts() ) : the_post(); ?>

                       <?php the_field('services'); ?>

                   <?php endwhile; ?>

                    <a href="<?php echo get_page_link(22); ?>">Learn More</a>
                </dd>
            </dl>
        </div>

		<div class="workshops">
            <dl>
                <dt>
                    <span class="li li_bulb"></span>
                </dt>
                <dd>
                    <h3>Workshops &amp; Seminars</h3>

                    <?php while ( have_posts() ) : the_post(); ?>

                       <?php the_field('workshops-seminars'); ?>

                   <?php endwhile; ?>

                    <a href="<?php echo get_page_link(9); ?>">Learn More</a>
                </dd>
            </dl>
        </div>

        <div class="testimonials">
            <dl>
                <dt>
                    <span class="li li_bubble"></span>
                </dt>
                <dd>
                    <h3>Testimonials</h3>

                    <?php while ( have_posts() ) : the_post(); ?>

                       <?php the_field('testimonials'); ?>

                   <?php endwhile; ?>

                    <a href="<?php echo get_page_link(13); ?>">Learn More</a>
                </dd>
            </dl>
        </div>

    </div>
</div>
<!-- /content main bb -->

<div class="content main">

    <div class="heading">
        <h1><span class="li li_calendar"></span> Upcoming Events</h1>
        <div class="decoration"></div>
    </div>

    <div class="events">

        <?php
    		$args =  array(
    			'post_type' => 'events',
    			'orderby' => 'menu_order',
    			'order' => 'ASC',
                'posts_per_page'   => 3
    		);

            $custom_query = new WP_Query( $args );
            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

    		<article>
                <h3><?php the_title(); ?></h3>
                <small><span class="li li_location"></span> Held at <?php the_field('location'); ?> <span class="li li_calendar"></span> On <?php the_field('date'); ?></small>

    			<?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">View Event</a>
    		</article>

        <?php endwhile; else: ?>

            <h3>No events</h3>

        <?php endif; ?>

    </div>
</div>
<!-- /content main bb -->

<div class="content-break">

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="testimonial-img">
            <?php
                $image_id = get_field('testimonial_image');
                $image_size = 'home-testimonial';
                $image_array = wp_get_attachment_image_src($image_id, $image_size);
                $image_url = $image_array[0];
            ?>

            <img src="<?php echo $image_url; ?>" alt="">

    	</div>
        <div class="testimonial">
            <?php the_field('highlight-testimonial'); ?>
            <span class="client"><?php the_field('testimonial_attribute'); ?></span>
        </div>

    <?php endwhile; // end of the loop. ?>

</div>

<div class="content main">
    <div class="heading">
        <h1><span class="li li_news"></span> Latest From the Newsroom</h1>
        <div class="decoration"></div>
    </div>

    <div class="newsroom">

        <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');
        ?>

        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

        <article>
            <h3><?php the_title(); ?></h3>
            <ul class="post-meta">
                <li>
                    <span class="li li_user"></span> Posted by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
                </li>
                <li>
                    <span class="li li_calendar"></span> On <?php the_date(); ?>
                </li>
            </ul>
            <?php the_excerpt(); ?>
            <div class="category">
                <span class="li li_tag"></span> <?php the_category( ', ' ); ?>
            </div>
            <a href="<?php the_permalink(); ?>">Read More</a>
        </article>

        <?php endwhile; ?>

    </div>
</div>

<div class="mailing-list">
	<div class="ml-label">
	    Sign Up to the <span>Methmac Newsletter</span>
	</div>
    <div class="ml-name">
        <input type="text" placeholder="Your Name" />
    </div>
    <div class="ml-email">
        <input type="email" placeholder="Your Email" />
    </div>
    <div class="ml-sign-up">
        <button>Sign Up!</button>
    </div>
</div>
<!-- content main bb -->

<?php get_footer(); ?>
