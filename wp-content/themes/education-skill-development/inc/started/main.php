<?php

add_action( 'admin_menu', 'education_skill_development_getting_started' );
function education_skill_development_getting_started() {
	add_theme_page( esc_html__('Theme Info', 'education-skill-development'), esc_html__('Theme Info', 'education-skill-development'), 'edit_theme_options', 'education-skill-development-guide-page', 'education_skill_development_test_guide', 1);
}

if ( ! defined( 'EDUCATION_SKILLS_DEVELOPMENT_DOCS_FREE' ) ) {
define('EDUCATION_SKILLS_DEVELOPMENT_DOCS_FREE',__('https://www.mishkatwp.com/instruction/education-skill-development-free-docs/','education-skill-development'));
}
if ( ! defined( 'EDUCATION_SKILLS_DEVELOPMENT_DOCS_PRO' ) ) {
define('EDUCATION_SKILLS_DEVELOPMENT_DOCS_PRO',__('https://www.mishkatwp.com/instruction/education-skill-development-pro-docs/','education-skill-development'));
}
if ( ! defined( 'EDUCATION_SKILLS_DEVELOPMENT_BUY_NOW' ) ) {
define('EDUCATION_SKILLS_DEVELOPMENT_BUY_NOW',__('https://www.mishkatwp.com/themes/skill-development-wordpress-theme/','education-skill-development'));
}
if ( ! defined( 'EDUCATION_SKILLS_DEVELOPMENT_SUPPORT_FREE' ) ) {
define('EDUCATION_SKILLS_DEVELOPMENT_SUPPORT_FREE',__('https://wordpress.org/support/theme/education-skill-development','education-skill-development'));
}
if ( ! defined( 'EDUCATION_SKILLS_DEVELOPMENT_REVIEW_FREE' ) ) {
define('EDUCATION_SKILLS_DEVELOPMENT_REVIEW_FREE',__('https://wordpress.org/support/theme/education-skill-development/reviews/#new-post','education-skill-development'));
}
if ( ! defined( 'EDUCATION_SKILLS_DEVELOPMENT_DEMO_PRO' ) ) {
define('EDUCATION_SKILLS_DEVELOPMENT_DEMO_PRO',__('https://www.mishkatwp.com/pro/education-skill-development/','education-skill-development'));
}

function education_skill_development_test_guide() { ?>
	<?php $education_skill_development_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="righty">
			<div class="getstart-postbox donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'education-skill-development' ); ?></h3>
				<div class="getstart-inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','education-skill-development'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( EDUCATION_SKILLS_DEVELOPMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'education-skill-development' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( EDUCATION_SKILLS_DEVELOPMENT_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'education-skill-development' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( EDUCATION_SKILLS_DEVELOPMENT_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'education-skill-development' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','education-skill-development'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','education-skill-development'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','education-skill-development'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','education-skill-development'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				</div>
				<div id="admin_links">
					<a href="<?php echo esc_url( EDUCATION_SKILLS_DEVELOPMENT_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Free Documentation', 'education-skill-development' ) ?></a>
					<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'education-skill-development' ); ?> </a>
				</div>
				<div id="admin_links">
					<a class="blue-button-2" href="<?php echo esc_url( EDUCATION_SKILLS_DEVELOPMENT_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'education-skill-development' ) ?></a>
					<a href="<?php echo esc_url( EDUCATION_SKILLS_DEVELOPMENT_REVIEW_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Review', 'education-skill-development' ) ?></a>
				</div>
		</div>
		<div id="lefty">
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','education-skill-development'); ?><?php echo esc_html( $education_skill_development_theme ); ?>  <span><?php esc_html_e('Version: ', 'education-skill-development'); ?><?php echo esc_html($education_skill_development_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $education_skill_development_theme->get_screenshot() ); ?>" />
				<div id="description-inside">
					<?php
						$education_skill_development_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'theme_description', esc_html( $education_skill_development_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
