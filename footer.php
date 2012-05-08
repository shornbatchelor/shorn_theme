<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div id="footer" role="contentinfo">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p>
		<a class="small red button radius" href="<?php bloginfo('home'); ?>">I am <?php bloginfo('name'); ?></a> <a class="small green button radius" href="http://wordpress.org/">I publish with</a> <a class="small green button radius" href="http://foundation.zurb.com/" target="_blank">I built with</a> <a class="small green button radius" href="<?php bloginfo('rss2_url'); ?>">Subscribe with</a>
	</p>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
