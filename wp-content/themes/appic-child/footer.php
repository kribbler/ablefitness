<?php if (get_theme_option('footer_show_widgets')) :
	if ('4' == get_theme_option('footer_widgets_columns')) {
		get_template_part('includes/templates/footer/4columns');
	} else {
		get_template_part('includes/templates/footer/3columns');
	}
endif; ?>

<div class="footer-wrap">
	<div class="blue-line-wrap">
		<footer class="container">
		<?php if (get_theme_option('footer_show_social_media')) : ?>
			<ul class="social pull-right">
			<?php
				if($slPinterest = get_theme_option("social_link_pinterest")){
					echo '<li title="pinterest" class="custom-tooltip blue-tooltip"><a href="' . $slPinterest . '" class="pinterest-icon"></a></li>';
				}
				
				if($slGoogle = get_theme_option("social_link_google")){
					echo '<li title="google" class="custom-tooltip blue-tooltip"><a href="' . $slGoogle . '" class="google-icon"></a></li>';
				}
				
				if($slLinkedIn = get_theme_option("social_link_linkedin")){
					echo '<li title="linkedin" class="custom-tooltip blue-tooltip"><a href="' . $slLinkedIn . '" class="linkedin-icon"></a></li>';
				}
				
				if($slTwitter = get_theme_option("social_link_twitter")){
					echo '<li title="twitter" class="custom-tooltip blue-tooltip"><a href="' . $slTwitter . '" class="twitter-icon"></a></li>';
				}
				
				if($slFacebook = get_theme_option("social_link_facebook")){
					echo '<li title="facebook" class="custom-tooltip blue-tooltip"><a href="' . $slFacebook . '" class="facebook-icon"></a></li>';
				}
			?>
			</ul>
		<?php endif; ?>
		
		<div class="container">
			<div class="row">
				<div class="span4">
					<?php dynamic_sidebar('footer-left');?>
				</div>
				<div class="span4">
					<?php dynamic_sidebar('footer-center');?>
				</div>
				<div class="span4">
					<?php dynamic_sidebar('footer-right');?>
					<div class="purple_box_footer">
						<?php
							if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
								echo do_shortcode('[content_block id=60 ]');
							else 
								echo do_shortcode('[content_block id=78 ]'); 
						?>
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="row row_upper_border">
				<div class="span6">
					<?php dynamic_sidebar('coyright-area-1');?>
				</div>
				<div class="span6 right_align">
					<?php dynamic_sidebar('coyright-area-2');?>
				</div>
			</div>
		</div>
			<div class="copyright pull-left">
				<?php //echo get_theme_option('footer_note'); ?>
			</div>
		</footer>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>