<footer>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Bio</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Workshops &amp; Seminars</a></li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">Newsroom</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <div class="social">
        <ul>
            <li><a href="<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo get_option('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>

    <div class="credit">
        Website by <a href="http://joshcosta.com.au">Josh Costa</a>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/scripts.js"></script>

<?php wp_footer(); ?> 

</body>
</html>
