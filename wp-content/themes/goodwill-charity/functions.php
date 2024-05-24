<?php
/**
 * Theme functions and definitions
 *
 * @package Goodwill_Charity
 */

/**
 * After setup theme hook
 */
function goodwill_charity_theme_setup(){
    /*
     * Make chile theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'goodwill-charity', get_stylesheet_directory() . '/languages' );
    add_theme_support( "title-tag" );
    add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'goodwill_charity_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function goodwill_charity_enqueue_styles() {
    
    $parent_style = 'benevolent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'goodwill-charity-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'goodwill_charity_enqueue_styles' );

/** 
* Footer Credit
**/
function benevolent_footer_credit(){
    $copyright_text = get_theme_mod( 'benevolent_footer_copyright_text' );
    $text  = '<div class="site-info"><div class="container">';
    $text .= '<span class="copyright">';
      if( $copyright_text ){
        $text .=  wp_kses_post( $copyright_text );
      }else{
        $text .=  esc_html__( '&copy; ', 'goodwill-charity' ) . date_i18n( esc_html__( 'Y', 'goodwill-charity' ) ); 
        $text .= ' <a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
      }
    $text .= '.</span>';
    if ( function_exists( 'the_privacy_policy_link' ) ) {
       $text .= get_the_privacy_policy_link();
   }
    $text .= '<span class="by">';
    $text .= esc_html__( 'Goodwill Charity | Developed By ', 'goodwill-charity' );
    $text .= '<a href="' . esc_url( 'https://rarathemes.com/' ) .'" rel="nofollow" target="_blank">' . esc_html__( 'Rara Themes', 'goodwill-charity' ) . '</a>.';
    $text .= sprintf( esc_html__( ' Powered by %s', 'goodwill-charity' ), '<a href="'. esc_url( 'https://wordpress.org/' ) .'" target="_blank">WordPress</a>.' );
    $text .= '</span></div></div>';
    echo apply_filters( 'benevolent_footer_text', $text );
}

function goodwill_charity_remove_parent_action(){
    remove_action( 'customize_register', 'benevolent_customizer_theme_info' );
}
add_action( 'init', 'goodwill_charity_remove_parent_action' );

function goodwill_charity_customizer_options( $wp_customize ){

    $wp_customize->add_section( 'theme_info' , array(
        'title'       => __( 'Information Links' , 'goodwill-charity' ),
        'priority'    => 6,
        ));

    $wp_customize->add_setting('theme_info_theme',array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
        ));
    
    $theme_info = '';
    $theme_info .= '<h3 class="sticky_title">' . __( 'Need help?', 'goodwill-charity' ) . '</h3>';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'View demo', 'goodwill-charity' ) . ': </label><a href="' . esc_url( 'https://rarathemes.com/previews/?theme=goodwill-charity/' ) . '" target="_blank">' . __( 'here', 'goodwill-charity' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'View documentation', 'goodwill-charity' ) . ': </label><a href="' . esc_url( 'https://docs.rarathemes.com/docs/benevolent/' ) . '" target="_blank">' . __( 'here', 'goodwill-charity' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'Support ticket', 'goodwill-charity' ) . ': </label><a href="' . esc_url( 'https://rarathemes.com/support-ticket/' ) . '" target="_blnak">' . __( 'here', 'goodwill-charity' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><label class="more-detail row-element">' . __( 'More Details', 'goodwill-charity' ) . ': </label><a href="' . esc_url( 'https://rarathemes.com/wordpress-themes/' ) . '" target="_blank">' . __( 'here', 'goodwill-charity' ) . '</a></span><br />';
    

    $wp_customize->add_control( new Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
        'label' => __( 'About Goodwill Charity' , 'goodwill-charity' ),
        'section' => 'theme_info',
        'description' => $theme_info
    )));	
}
add_action( 'customize_register', 'goodwill_charity_customizer_options' );

/**
 * Header
 */
function benevolent_header(){ 
	?>
	<header id="masthead" class="site-header header-two" role="banner" itemscope itemtype="https://schema.org/WPHeader">

	<?php 
		if(  get_theme_mod( 'benevolent_ed_social_header' ) || has_nav_menu( 'secondary' ) ){ ?>
		
			<div class="header-top">
				<div class="container">
					<?php 
						if( has_nav_menu( 'secondary' ) ) { ?>
							<div id="secondary-mobile-header">
								<a id="responsive-secondary-menu-button" href="javascript:void(0);"><?php esc_html_e( 'Menu', 'goodwill-charity' ); ?></a>
							</div>
							
							<nav id="top-navigation" class="secondary-navigation" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
								<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'fallback_cb' => false ) ); ?>
							</nav><!-- #site-navigation -->
						<?php }
						if( get_theme_mod( 'benevolent_ed_social_header' ) ) do_action( 'benevolent_social_links' );
					?>
				</div>
			</div><!-- .header-top -->
			<?php
		}	
	?>		
		<div class="header-bottom">		
			<div class="container">
				<?php 
					$site_title = get_bloginfo( 'name' );
					$description = get_bloginfo( 'description', 'display' );
					
					if( has_custom_logo() && ( $site_title || $description ) ) {
						$add_class = 'logo-text';
					}else{
						$add_class = '';
					}
				?>
				<div class="site-branding <?php echo esc_attr( $add_class ); ?>" itemscope itemtype="https://schema.org/Organization">
					<?php if( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
						echo '<div class="site-logo">';
						the_custom_logo();
						echo '</div>';
					}?>
					<div class="site-title-wrap">
						<?php if ( is_front_page() ) : ?>
							<h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif;  
					
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div>
				</div><!-- .site-branding -->
				<div class="right-panel">
					<nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<?php 
						$button_text = get_theme_mod( 'benevolent_button_text', __( 'Donate Now', 'goodwill-charity' ) );
						$button_url = get_theme_mod( 'benevolent_button_url' );
						if( $button_text && $button_url ) echo '<a href="' . esc_url( $button_url ). '" class="btn-donate">' . esc_html( $button_text ) . '</a>';
					?> 
				</div>
			</div>
		</div><!-- .header-bottom -->
	</header>
<?php
}

/**
 * Register custom fonts.
 */
function benevolent_fonts_url() {
    $fonts_url = '';

    /*
    * translators: If there are characters in your language that are not supported
    * by Raleway, translate this to 'off'. Do not translate into your own language.
    */
    $inter_font = _x( 'on', 'Inter: on or off', 'goodwill-charity' );

    if ( 'off' !== $inter_font ) {
        $font_families = array();

        if ( 'off' !== $inter_font ) {
            $font_families[] = 'Inter:100,200,300,400,500,600,700,800,900';
        }
       
        $query_args = array(
            'family'  => urlencode( implode( '|', $font_families ) ),
            'subset'  => urlencode( 'latin,latin-ext' ),
            'display' => urlencode( 'fallback' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url( $fonts_url );
}