<section class="hide-for-medium-down large-5 columns main-sidebar">

	<h2 class="sidebar-header">Categories</h2>


	<?php 

		// Display categories in columns
		$categories = get_categories(array('exclude' => 1));
		$count = 0;
		$cat_string = '<div class="row">';

		foreach( $categories as $category ) {

			$count++;

			if ( $count % 2 == 0 ) {
				$cat_string .= '<div class="sidebar-post-cat-container"><div class="large-5 left columns post-cat-box sidebar-cat-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></div></div>';
				$cat_string .= '</div>';
				$cat_string .= '<div class="row">';
			} else {
				$cat_string .= '<div class="sidebar-post-cat-container"><div class="large-5 left columns post-cat-box sidebar-cat-item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></div></div>';
			}
			
		}

		$cat_string .= "</div>";

		echo $cat_string;

	?>

	<h2 class="stuff-header">Some Stuff I've Done</h2>

	<h3 class="sidebar-subheader"><i class="icon-books sidebar-icons"></i>Books</h3>

	<p>The beast will be released... soon</p>

	<h3 class="sidebar-subheader"><i class="icon-short-stories sidebar-icons"></i>Short Stories</h3>

	<p>Go ahead, enjoy some short SciFi-ish stories I've written.</p>

	<div class="row sidebar-elements-container">

		<div class="large-4 columns">

			<a href="<?php echo home_url(); ?>/my-short-stories/plan-presented"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/plan-presented-thumb.png" class="sidebar-thumb" /></a>
			<a href="<?php echo home_url(); ?>/my-short-stories/plan-presented/" class="sidebar-elements-link">A Plan Presented</a>

		</div>

		<div class="large-4 columns">

			<a href="<?php echo home_url(); ?>/my-short-stories/among-them/"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/among-them-thumb.png" class="sidebar-thumb" /></a>
			<a href="<?php echo home_url(); ?>/my-short-stories/among-them/" class="sidebar-elements-link">Among Them</a>

		</div>

		<div class="large-4 columns">

			<a href="<?php echo home_url(); ?>/my-short-stories/eye-contact/"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/eye-contact-thumb.png" class="sidebar-thumb" /></a>
			<a href="<?php echo home_url(); ?>/my-short-stories/eye-contact/" class="sidebar-elements-link">Eye Contact</a>

		</div>

	</div>

</section><!-- end .my-featured-stuff-container -->	