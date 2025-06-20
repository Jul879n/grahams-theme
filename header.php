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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="profile"
          href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('container'); ?>>
<?php wp_body_open(); ?>
<div id="page"
     class="site">
    <header id="masthead"
            class="site-header py-3 px-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01"
                        aria-controls="navbarTogglerDemo01"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-3"
                     id="navbarTogglerDemo01">
                    <div class="row w-100">
                        <div class="col-6 movil">

                                <?php if (is_active_sidebar('nav-left')) :
                                    dynamic_sidebar('nav-left');
                                endif; ?>

                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center movil">
                            <?php aws_get_search_form(true); ?>
                            <?php if (is_active_sidebar('nav-rigth')) :
                                dynamic_sidebar('nav-rigth');
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- #masthead -->

