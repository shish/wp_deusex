<div class="sidebar" style="float: left;">
	<h2 onclick="toggle('main')">Main</h2>
	<ul id="main">
		<li><a href="/" title="The front page">Index</a>
		<li><a href="/misc/about.php" title="Notes about ShishNet">About</a>
	</ul>

	<h2 onclick="toggle('projects')">Projects</h2>
	<ul id="projects">
		<li><a href="/projects/travmap/" title="Travian Map">TravMap</a>
		<li><a href="/projects/shimmie/" title="Image Board">Shimmie</a>
		<li><a href="/projects/cview2/" title="Online Manga Viewer">CView2</a>
		<!-- <li><a href="/projects/xclannad/" title="A RealLive clone for *nix">XClannad</a> -->
		<!-- <li><a href="/projects/radio/" title="Things I listen to, streamed">SNRadio</a> -->
		<li><a href="/projects/siggy/" title="Web-based fortune file">Siggy</a>
		<li><a href="/projects/rav/" title="Avatar hosting & Randomiser">Rav</a>
		<!-- <li><a href="/projects/userpage/user.php" title="For ShishNet services">Signup / Login</a> -->
		<li><a href="/trac/" title="With Trac">Source Code</a>
		<!-- <li><a href="/cgi-bin/viewcvs.cgi/" title="With viewcvs">Misc Source Code</a> -->
	</ul>

	<h2 onclick="toggle('pics')">Graphics</h2>
	<ul id="pics">
		<li><a href="/pics/gimp/" title="Random creations">GIMP</a>
		<li><a href="/pics/wall/" title="4:3 images (8:3 soon~)">Wallpaper</a>
		<li><a href="/pics/blender/" title="3D images & animations">Blender</a>
		<li><a href="/pics/poster/" title="High-res A4 images">Posters</a>
		<li><a href="/pics/bin/" title="Crap">Bin</a>
	</ul>

	<h2 onclick="toggle('sites')">Sites</h2>
	<ul id="sites">
		<li><a href="/sites/tif/" title="For Travel Insurance Facilities">TIF</a>
		<li><a href="/sites/prograde/" title="Grading system (A-Level)">Prograde</a>
		<li><a href="/sites/animeconnect/" title="Behind-the-scenes recode">Animeconnect</a>
		<li><a href="/sites/trm/" title="For TravelRisk Management">TRM</a>
		<li><a href="/sites/ebonite/" title="For Young Enterprise">Ebonite</a>
	</ul>

	<h2 onclick="toggle('misc')">Misc</h2>
	<ul id="misc">
		<li><a href="http://ircarchive.ath.cx/" title="By PISG">IRC Stats</a>
		<li><a href="/misc/stats/" title="By MRTG">Net Stats</a>
		<li><a href="/misc/awstats/" title="By AWStats">Web Stats</a>
		<li><a href="/nagios/cgi-bin/status.cgi?host=all" title="By Nagios (guest:guest)">Service Stats</a>
		<hr>
		<li><a href="/misc/blender/" title="Because it rocks, but is a pain to learn">Blender Tips</a>
		<li><a href="/misc/answers.php" title="RTFFAQ">Java Reading</a>
		<li><a href="/misc/quake/" title="Quake 3 Maps">Quake</a>
		<li><a href="/misc/mupad/" title="Pretty maths">MuPAD</a>
	</ul>
	
	<h2 onclick="toggle('pages')">Pages</h2>
	<ul id="pages">
		<?php wp_list_pages('title_li='); ?>
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

	<h2 onclick="toggle('categories')">Categories</h2>
	<ul id="categories">
		<?php # wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		<?php wp_list_cats(); ?>
	</ul>

	<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
	<?php get_links_list(); ?>
	
	<h2 onclick="toggle('meta')">Meta</h2>
	<ul id="meta">
		<li><?php wp_register(); ?>
		<li><?php wp_loginout(); ?>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a>
		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a>
		<li><?php wp_meta(); ?>
	</ul>
	<?php } ?>
</div>

