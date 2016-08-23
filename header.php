<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper ">
		<div class="off-canvas-wrapper-inner " data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
    
    
<div class="row outer-shadow">
   <header>
<div id="top-header-block">
<div class="row small-up-1 medium-up-3 large-up-3">
   <div class="column block-1">
<h1>St. John's Co-Ed School</h1>
<h2>
Naini, Allahabad <br />
Contact No. - +91 7852856020<br />
School Code - UP271 <br />
</h2>
   </div>
   <div class="column block-2 large-uncollapse no-pad-right no-pad-left">
<iframe src="http://stjohnscoed.com/dev/wp-content/themes/FoundationPress/assets/imageScroller_jquery_plugin/index.htm" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" ></iframe>
   </div>
   <div class="column block-3">
   
   
   <div class="row">
   <div class="columns">
     <ul class="menu">
        <li><?php get_search_form();?></li>
       </ul>
      
 </div>
 
 <div class="columns">
      <a href="http://stjohnscoed.com/app/teacher/teacher.php" target="_blank" class=" login-button button pull-center">Teacher Login</a>
 </div>
</div>

   </div>
   </div>
   </div>
</header>
<div class="row column">
	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"></li>
				</ul>
			</div>
			<div class="top-bar-right" style="float:left !important">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
	
            </div>
		</nav>
	</header>

</div>	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
