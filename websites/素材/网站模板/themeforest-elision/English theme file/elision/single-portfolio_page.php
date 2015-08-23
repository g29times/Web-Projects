<?php
$id = get_the_ID();

if(get_post_meta(get_the_ID(), "qode_show-sidebar", true) != ""){
	$sidebar = get_post_meta(get_the_ID(), "qode_show-sidebar", true);
}else{
	$sidebar = $qode_options_elision['portfolio_single_sidebar'];
}

if(get_post_meta(get_the_ID(), "qode_responsive-title-image", true) != ""){
 $responsive_title_image = get_post_meta(get_the_ID(), "qode_responsive-title-image", true);
}else{
	$responsive_title_image = $qode_options_elision['responsive_title_image'];
}

if(get_post_meta(get_the_ID(), "qode_fixed-title-image", true) != ""){
 $fixed_title_image = get_post_meta(get_the_ID(), "qode_fixed-title-image", true);
}else{
	$fixed_title_image = $qode_options_elision['fixed_title_image'];
}

if(get_post_meta(get_the_ID(), "qode_title-image", true) != ""){
 $title_image = get_post_meta(get_the_ID(), "qode_title-image", true);
}else{
	$title_image = $qode_options_elision['title_image'];
}
$title_image_height = "";
$title_image_width = "";
if(!empty($title_image)){
	$title_image_url_obj = parse_url($title_image);
  if (file_exists($_SERVER['DOCUMENT_ROOT'].$title_image_url_obj['path']))
		list($title_image_width, $title_image_height, $title_image_type, $title_image_attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$title_image_url_obj['path']);
}

$portfolio_qode_like = "on";
if (isset($qode_options_elision['portfolio_qode_like'])) {
	$portfolio_qode_like = $qode_options_elision['portfolio_qode_like'];
}

$lightbox_single_project = "no";
if (isset($qode_options_elision['lightbox_single_project'])) 
	$lightbox_single_project = $qode_options_elision['lightbox_single_project'];


$porftolio_template = 1;
if(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) != ""){
	if(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 1){
		$porftolio_template = 1;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 2){
		$porftolio_template = 2;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 3){
		$porftolio_template = 3;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 4){
		$porftolio_template = 4;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 5){
		$porftolio_template = 5;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 6){
		$porftolio_template = 6;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 7){
		$porftolio_template = 7;
	}
}elseif(isset($qode_options_elision['portfolio_style'])){
	if($qode_options_elision['portfolio_style'] == 1){
		$porftolio_template = 1;
	}elseif($qode_options_elision['portfolio_style'] == 2){
		$porftolio_template = 2;
	}elseif($qode_options_elision['portfolio_style'] == 3){
		$porftolio_template = 3;
	}elseif($qode_options_elision['portfolio_style'] == 4){
		$porftolio_template = 4;
	}elseif($qode_options_elision['portfolio_style'] == 5){
		$porftolio_template = 5;
	}elseif($qode_options_elision['portfolio_style'] == 6){
		$porftolio_template = 6;
	}elseif($qode_options_elision['portfolio_style'] == 7){
		$porftolio_template = 7;
	}
}
	
$porftolio_single_template = get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true);
	
$columns_number = "v4";
if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) != ""){
	if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 2){
		$columns_number = "v2";
	} else if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 3){
		$columns_number = "v3";
	} else if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 4){
		$columns_number = "v4";
	}
}else{
	if(isset($qode_options_elision['portfolio_columns_number'])){
		if($qode_options_elision['portfolio_columns_number'] == 2){
			$columns_number = "v2";
		} else if($qode_options_elision['portfolio_columns_number'] == 3) {
			$columns_number = "v3";
		} else if($qode_options_elision['portfolio_columns_number'] == 4) {
			$columns_number = "v4";
		}
	}
}

if(get_post_meta(get_the_ID(), "qode_title-height", true) != ""){
 $title_height = get_post_meta(get_the_ID(), "qode_title-height", true);
}else{
	$title_height = $qode_options_elision['title_height'];
}

$title_background_color = '';
if(get_post_meta(get_the_ID(), "qode_page-title-background-color", true) != ""){
 $title_background_color = get_post_meta(get_the_ID(), "qode_page-title-background-color", true);
}else{
	$title_background_color = $qode_options_elision['title_background_color'];
}

$show_title_image = true;
if(get_post_meta(get_the_ID(), "qode_show-page-title-image", true)) {
	$show_title_image = false;
}

$qode_page_title_style = "standard";
if(get_post_meta($id, "qode_page_title_style", true) != ""){
	$qode_page_title_style = get_post_meta($id, "qode_page_title_style", true);
}else{
	if(isset($qode_options_elision['title_style'])) {
		$qode_page_title_style = $qode_options_elision['title_style'];
	} else {
		$qode_page_title_style = "standard";
	}
}
$height_class = "";
if($qode_page_title_style == "title_on_bottom") {
	$height_class = " title_on_bottom";
}

?>

<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
				<script>
				var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
				</script>
			<?php } ?>
			<?php if(!get_post_meta($id, "qode_show-page-title", true)) { ?>
				<div class="title<?php echo $height_class; ?> <?php if($responsive_title_image == 'no' && $title_image != "" && ($fixed_title_image == "yes" || $fixed_title_image == "yes_zoom") && $show_title_image == true){ echo 'has_fixed_background '; if($fixed_title_image == "yes_zoom"){ echo 'zoom_out '; } } if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true){ echo 'has_background'; } if($responsive_title_image == 'yes' && $show_title_image == true){ echo 'with_image'; } ?>" style="<?php if($responsive_title_image == 'no' && $title_image != "" && $show_title_image == true){ if($title_image_width != ''){ echo 'background-size:'.$title_image_width.'px auto;'; } echo 'background-image:url('.$title_image.');';  } if($title_height != ''){ echo 'height:'.$title_height.'px;'; } if($title_background_color != ''){ echo 'background-color:'.$title_background_color.';'; } ?>">
					<div class="image <?php if($responsive_title_image == 'yes' && $title_image != "" && $show_title_image == true){ echo "responive"; }else{ echo "not_responsive"; } ?>"><?php if($title_image != ""){ ?><img src="<?php echo $title_image; ?>" alt="&nbsp;" /> <?php } ?></div>
					<?php if(!get_post_meta($id, "qode_show-page-title-text", true)) { ?>
						<div class="title_holder">
							<div class="container">
								<div class="container_inner clearfix">
									<?php if($qode_page_title_style == "title_on_bottom") {  ?>
										<div class="title_on_bottom_wrap">
											<div class="title_on_bottom_holder">
												<div class="title_on_bottom_holder_inner" <?php if(get_post_meta($id, "qode_page_title_holder_color", true)) { ?> style="background-color:<?php echo get_post_meta($id, "qode_page_title_holder_color", true) ?>" <?php } ?>>
													<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><span><?php the_title(); ?></span></h1>
												</div>
											</div>
										</div>
									<?php } else { ?>
										<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><span><?php the_title(); ?></span></h1>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			
			<?php
			$revslider = get_post_meta($id, "qode_revolution-slider", true);
			if (!empty($revslider)){ ?>
				<div class="q_slider"><div class="q_slider_inner">
				<?php echo do_shortcode($revslider); ?>
				</div></div>
			<?php
			}
			?>
            <?php if($porftolio_template != 7) { ?>
			<div class="container">
				<div class="container_inner">
					<?php if(($sidebar == "default")||($sidebar == "")) : ?>
						<?php get_template_part('portfolio', 'loop'); ?>
					<?php elseif($sidebar == "1" || $sidebar == "2"): ?>
						<?php if($sidebar == "1") : ?>	
							<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
						<?php elseif($sidebar == "2") : ?>	
							<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
						<?php endif; ?>
								<div class="column1">
									<div class="column_inner">
										<?php get_template_part('portfolio', 'loop'); ?>
									</div>
								</div>	
								<div class="column2"> 
									<?php get_sidebar(); ?>
								</div>
							</div>
						<?php elseif($sidebar == "3" || $sidebar == "4"): ?>
							<?php if($sidebar == "3") : ?>	
								<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
							<?php elseif($sidebar == "4") : ?>	
								<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
							<?php endif; ?>
										<div class="column1"> 
											<?php get_sidebar(); ?>
										</div>
										<div class="column2">
											<div class="column_inner">
												<?php get_template_part('portfolio', 'loop'); ?>
											</div>
										</div>	
								</div>
						<?php endif; ?>
				</div>
			</div>
            <?php } else {
                get_template_part('portfolio', 'loop');
            } ?>
			
		<?php endwhile; ?>
	<?php endif; ?>	
<?php get_footer(); ?>	