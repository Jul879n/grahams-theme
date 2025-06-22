<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mr._graham\'s_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="profile"
          href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'container' ); ?>>
<?php wp_body_open(); ?>
<div id="page"
     class="site">
    <header id="masthead"
            class="site-header py-3 px-0">
        <div id='loader' class='position-absolute z-3 bg-mostaza w-100 h-100 start-0 top-0 d-flex
        justify-content-center align-items-center'>
	        <?php echo get_custom_logo(); ?>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class='col movil'><?php echo do_shortcode( '[fibosearch]' ); ?></div>
                <button class="navbar-toggler mb-0 border-0"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01"
                        aria-controls="navbarTogglerDemo01"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse mt-3"
                     id="navbarTogglerDemo01">
                    <div class="row w-100 desktop">
                        <div class="col-6">

							<?php if ( is_active_sidebar( 'nav-left' ) ) :
								dynamic_sidebar( 'nav-left' );
							endif; ?>

                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
							<?php echo do_shortcode( '[fibosearch]' ); ?>
							<?php if ( is_active_sidebar( 'nav-rigth' ) ) :
								dynamic_sidebar( 'nav-rigth' );
							endif; ?>
                        </div>
                    </div>
                    <div class="row w-100 movil">
                        <div class="col-12">
			                <?php if ( is_active_sidebar( 'nav-left' ) ) :
				                dynamic_sidebar( 'nav-left' );
			                endif; ?>

                        </div>
                        <div class="col-12">

			                <?php if ( is_active_sidebar( 'nav-rigth' ) ) :
				                dynamic_sidebar( 'nav-rigth' );
			                endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- #masthead -->

