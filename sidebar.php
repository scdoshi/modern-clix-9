<div id="sidebar" class="last span-12">
	<div class="col span-3">
		<h4 class="ver small">About</h4>
		<p><?php echo get_bloginfo('description'); ?></p>
	</div>

	<!-- Uncomment to show Twitter. Using Twitter Tools widget because it takes care of OAuth -->
	<!-- div class="section">
		<h4 class="ver small">Recently <span class="low">on</span> Twitter</h4>
		<div id="twitter_div">
			<ul id="twitter_update_list">
				<li></li>
			</ul>
		</div>
	</div -->
	<!-- Uncomment to show Twitter. Using Twitter Tools widget because it takes care of OAuth -->

	<!-- Uncomment if you want to display flickr in the homepage -->
	<!-- Change &user=27741269%40N00 to your own Flickr user to change this -->

	<!-- <div class="section">
		<h4 class="ver small">Photos</h4>
		<p>Recently uploaded photos to my <a href="http://www.flickr.com/photos/scdoshi/" title="View my photos">Flickr photostream</a>.</p>
		
		<div id="flickr_badge_wrapper">		
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=13816128%40N00"></script>
		</div>
	</div> -->

	<!-- Widgetized sidebar: Since the theme is simple, this is not fully
		 error tested and could not look as good as it should be, therefore
		 you might need to style the CSS file! For BETTER results:
		
		 1) Don't use widgets. Hard code each section as shown below.
		 2) Copy and paste the HTML for a sample section (lines 54 to 61).
		 3) Replace the section title (HTML element H4) with your own.
		 4) Replace the section description (HTML element P) with your own.
		 5) For a better and consistent look, ALWAYS use a title
		 and description for each section.
	-->	
	<!-- ul class="widgetized-sidebar nudge-3 span-3">
	<h4 class="ver small">Recently <span class="low">on</span> Twitter</h4>
		<?php if ( !function_exists('dynamic_sidebar')
				|| !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	</ul -->
	
	<!-- Uncomment if you want to display the tag cloud in the homepage -->
	
	<!-- <div class="section">
		<h4 class="ver small">Tags</h4>
		<?php wp_tag_cloud(); ?>
	</div> -->
	
	<div class="col span-3">
		<h4 class="ver small">Blogroll</h4>
		<p>From when I had a proper blog.</p>

		<ul class="nav">
			<?php wp_list_bookmarks('title_li=&categorize=0&category_name=blogroll'); ?>
		</ul>

		<h4 class="ver small">Frequent Visits</h4>
		<p>Surfing to kill time.</p>

		<ul class="nav">
			<?php wp_list_bookmarks('title_li=&categorize=0&category_name=frequent%20visits'); ?>
		</ul>
	</div>
	
	<div class="col span-6 last">
		<h4 class="ver small">Search</h4>
		<p>Enter the query to search and hit <kbd>enter</kbd>.</p>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>

</div>

<hr />

