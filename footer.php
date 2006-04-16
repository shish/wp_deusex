
		<!--========================================================================-->

		<div id="footer">
			MekTrix &copy; <a href="mailto:webmaster@shish.is-a-geek.net">Shish</a>
			2005 - Unless noted otherwise, website content licenced under <br>Creative Commons
			<a href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/">Attribution,
			Non-Commercial, Share-Alike</a> licence, and software licenced under the GPL.
			<br>All other logos &amp; names etc used without permission, no harm intended
			<!-- <br>This file is rooted at: [ <a href="<?=$addr;?>"><?=$addr;?></a> ] -->

			<!-- <br><?php bloginfo('name'); ?> is proudly powered by 
			<a href="http://wordpress.org/">WordPress</a> -->
			<br /><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
			and <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
			<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.

			<?php wp_footer(); ?>
		</div>
	</body>
</html>

