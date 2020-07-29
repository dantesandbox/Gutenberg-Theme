<?php
/*************************
Header
*************************/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="https://use.typekit.net/rtd1rvn.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- Mobile Navigation -->
		<div class="theme-mobile-nav-panel">
			<div class="theme-inner-mobile-panel">
				<div class="theme-mobile-nav-row">
					<?php if(get_theme_mod('logo_header') == 'header-logo'){ ?>
						<!-- Mobile Menu Logo -->
						<div class="branding">
							<a href="<?php echo site_url(); ?>">
								<?php the_custom_logo(); ?>
							</a>
						</div>
					<?php } ?>
					<?php if(get_theme_mod('logo_header') == 'svg-logo'){ ?>
						<div class="branding">
							<a href="<?php echo site_url(); ?>">
							<!-- Include Mobile SVG Logo Here -->
							</a>
						</div>
					<?php } ?>
					<button class="hamburger hamburger--spin theme-mobile-btn" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
			</div>
		</div>
	<header class="theme-g-nav nav-visible">
		<div class="theme-g-container">
			<div class="theme-g-nav-row">
				<?php if(get_theme_mod('logo_header') == 'header-logo'){ ?>
					<!-- Default Logo Here -->
					<div class="branding">
						<a href="<?php echo site_url(); ?>">
							<?php the_custom_logo(); ?>
						</a>
					</div>
				<?php } ?>
				<?php if(get_theme_mod('logo_header') == 'svg-logo'){ ?>
					<div class="branding">
						<a href="<?php echo site_url(); ?>">
						<!-- Include SVG Logo Here -->
						</a>
					</div>
				<?php } ?>
				<!-- Mobile Toggle Button -->
				<button class="hamburger hamburger--spin theme-mobile-btn" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<!-- Desktop Navigation -->
				<nav class="theme-main-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
				</nav>
			</div>
		</div>
</header>
