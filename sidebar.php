<div class="sidebar" style="float: left;">
	<h2 onclick="toggle('main')">Main</h2>
	<ul id="main">
		<li><a href="/" title="The front page">Index</a>
	</ul>

	<h2 onclick="toggle('pages')">Pages</h2>
	<ul id="pages">
		<?php wp_list_pages('title_li='); ?>
	</ul>
	
	<h2 onclick="toggle('categories')">Categories</h2>
	<ul id="categories">
		<?php # wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		<?php wp_list_cats(); ?>
	</ul>

	<h2 onclick="toggle('meta')">Meta</h2>
	<ul id="meta">
		<li><?php wp_register(); ?>
		<li><?php wp_loginout(); ?>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a>
		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a>
		<li><?php wp_meta(); ?>
	</ul>
</div>

<div class="sidebar" style="float: right;">
	<h2 onclick="toggle('whereami')">Where Am I?</h2>
	<ul id="whereami">
		<li>
		<?php /* If this is a 404 page */ if (is_404()) { ?>
		The 404 page
		
		<?php /* If this is a category archive */ } elseif (is_category()) { ?>
		You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
		
		<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
		You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
		for the day <?php the_time('l, F jS, Y'); ?>.
		
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
		for <?php the_time('F, Y'); ?>.

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
		for the year <?php the_time('Y'); ?>.
		
		<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
		You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
		for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.

		<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		You are currently browsing the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.

		<?php } else { ?>
		Reading the blog

		<?php } ?>
		</li>
	</ul>

	<h2 onclick="toggle('archives')">Archives</h2>
	<ul id="archives">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

	<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
	<?php get_links_list(); ?>
	<?php } ?>
</div>

