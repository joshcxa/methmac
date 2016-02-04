<!-- the sidebar -->
<aside class="sidebar" role="complementary">
    <div class="widget-container">
        <h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?></p>
    </div><!-- .widget-container -->
    <div class="widget-container">
        <h4>Archives</h4>
		<ol class="archives">
			<?php wp_get_archives('type=monthly'); ?>
		</ol>
    </div><!-- .widget-container -->
    <div class="widget-container">
        <h4>Elsewhere</h4>
		<ol class="social">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
    </div><!-- .widget-container -->
</aside>
