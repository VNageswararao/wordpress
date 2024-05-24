<!-- Start: Footer Sidebar
============================= -->
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
	<footer id="footer-widgets" class="footer-sidebar footer_bg">
		<?php if ( true == get_theme_mod( 'education_skill_development_footer_widgets_on_off', 'on' ) ) : ?>
			<div class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</footer>
<?php } ?>
<!-- End: Footer Sidebar
============================= -->
<?php 
	$education_skill_development_copyright_content   = get_theme_mod('copyright_content','[site_title] | Powered by [theme_author]');
	$education_skill_development_copyright_content_text   = get_theme_mod('education_skill_development_copyright_content_text','Education WordPress Theme');
?>

<section id="footer-copyright">
	<div class="container">
		<div class="text-center">
			<?php if ( true == get_theme_mod( 'education_skill_development_copyright_on_off', 'on' ) ) : ?>
				<p class="mb-0">
					<?php 
						$education_skill_development_copyright_allowed_tags = array(
							'[current_year]' => date_i18n('Y'),
							'[site_title]'   => '<a href="https://www.mishkatwp.com/themes/free-education-wordpress-theme/" target="_blank">'.$education_skill_development_copyright_content_text.'</a>',
							'[theme_author]' => sprintf(__('<a href="https://wordpress.org/" target="_blank">WordPress.org</a>', 'education-skill-development')),
						);
						echo apply_filters('education_skill_development_footer_copyright', wp_kses_post(education_skill_development_str_replace_assoc($education_skill_development_copyright_allowed_tags, $education_skill_development_copyright_content)));
					?>
				</p>
			<?php endif; ?>
			<?php if ( true == get_theme_mod( 'education_skill_development_scroll_to_top_setting', 'off' ) ) : ?>
				<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
			<?php endif; ?>
		</div>
	</div>
</section>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>