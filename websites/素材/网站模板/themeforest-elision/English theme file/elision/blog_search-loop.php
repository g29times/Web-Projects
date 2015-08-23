<?php 
global $qode_options_elision;
$blog_hide_comments = "";
if (isset($qode_options_elision['blog_hide_comments'])) {
	$blog_hide_comments = $qode_options_elision['blog_hide_comments'];
}
$qode_like = "on";
if (isset($qode_options_elision['qode_like'])) {
	$qode_like = $qode_options_elision['qode_like'];
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_info">
		<div class="inner">
			<div class="post_date">
				<span class="date"><?php the_time('d'); ?></span>
				<span class="month"><?php the_time('F'); ?></span>
			</div>
			<?php if( $qode_like == "on" ) { ?>
				<div class="blog_like">
					<?php if( function_exists('qode_like') ) qode_like(); ?>
				</div>
			<?php } ?>
			<?php echo do_shortcode('[social_share]'); ?>
		</div>
	</div>
	<div class="post_content_holder">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post_image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div>
		<?php } ?>
		<div class="post_text">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php
            $my_excerpt = get_the_excerpt();
            if ($my_excerpt != '') {
                echo $my_excerpt;
            }
            ?>
			<a href="<?php the_permalink(); ?>" class="qbutton tiny"><?php _e('Read More','qode'); ?></a>
		</div>
	</div>
</article>