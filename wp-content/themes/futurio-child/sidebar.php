<?php if ( is_active_sidebar( 'futurio-sidebar' ) || ( is_archive() || is_search() ) && is_active_sidebar( 'futurio-archive-sidebar' ) ) { ?>
	<aside id="sidebar" class="col-md-<?php echo absint( get_theme_mod( 'sidebar_size', '3' ) ) ?> <?php futurio_sidebar_position( 'sidebar' ) ?>">
		<?php
		if ( ( is_archive() || is_search() ) && is_active_sidebar( 'futurio-archive-sidebar' ) ) {
			dynamic_sidebar( 'futurio-archive-sidebar' );
		} else {
			dynamic_sidebar( 'futurio-sidebar' );
		}
		?>

		<?php
		if ( has_children() OR $post->post_parent > 0 ) { ?>
			<nav class="site-nav children-links clearfix">
				<span class="parent-link"><a href="<?php echo get_the_permalink(get_ancestor_id()); ?>"><?php echo get_the_title(get_ancestor_id()); ?></a></span>
				<ul>
					<?php
					$args = array(
						'child_of' => get_ancestor_id(),
						'title_li' => ''
					);
					?>
					<?php wp_list_pages($args); ?>
				</ul>
			</nav>

		<?php } ?>

	</aside>
<?php } ?>
