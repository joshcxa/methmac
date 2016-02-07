<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); echo the_title(); ?></title>

    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<div class="top-content">
		<div class="contact">
			<a href="<?php echo get_page_link(18); ?>">Email Leah</a> Call Leah on <?php echo get_option('phone'); ?>
		</div>
		<div class="social">
            <ul>
                <li><a href="<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo get_option('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
            </ul>
		</div>
	</div>

	<!-- site-header -->
	<header class="site-header">
		<div class="site-logo">
			<a href="<?php bloginfo('wpurl');?>"><img alt="" src="<?php bloginfo( 'template_directory' ); ?>/images/methmac-logo.png" />
</a>
		</div>

        <div class="menu-toggle"><i class="fa fa-bars fa-2x"></i></div>

		<nav class="site-nav">

			<ul>
				<!-- <li class="current"><a href="#">Home</a></li>
				<li><a href="#">Bio</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Workshops &amp; Seminars</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Newsroom</a></li>
				<li><a href="#">Contact</a></li> -->

                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</ul>
		</nav>
	</header>
	<!-- /site-header -->
