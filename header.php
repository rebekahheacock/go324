<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="page-wrap">

    <header class="site-header">

        <nav class="navbar" role="navigation">

            <nav class="top-navbar" role="navigation">

              <div class="inner-wrap">

                    <div class="header_social">
                        <?php dynamic_sidebar('header_social'); ?>

                    </div>


                    <div class="navbar-header">
                        <?php if ( has_nav_menu( 'secondary' ) ) { ?>

                           <a class="navbar-toggle" href="#menu-top-slide">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </a>


                           <?php wp_nav_menu( array(
                               'container_id'   => 'menu-top-slide',
                               'theme_location' => 'secondary'
                           ) );
                       }  ?>

                    </div>


                    <div id="navbar-main">

                        <?php if (has_nav_menu( 'secondary' )) {
                            wp_nav_menu( array(
                                'menu_class'     => 'nav navbar-nav dropdown sf-menu',
                                'theme_location' => 'secondary'
                            ) );
                        } ?>


                    </div><!-- #navbar-main -->

                </div><!-- ./inner-wrap -->

            </nav><!-- .navbar -->

            <div class="clear"></div>

        </nav><!-- .navbar -->

        <?php if ( is_active_sidebar( 'fullwidth_header' ) ) : ?>
          <?php dynamic_sidebar( 'fullwidth_header' ); ?>
        <?php endif; ?>

        <div class="inner-wrap">

            <div class="navbar-brand<?php if (option::is_on('ad_head_select')) { ?> left-align<?php } ?>">
                <?php if ( ! foodica_has_logo() ) echo '<h1>'; ?>

                <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'description' ); ?>">

                    <?php
                    if ( foodica_has_logo() ) {
                        foodica_logo();
                    } else {
                        bloginfo( 'name' );
                    }
                    ?>

                </a>

                <?php if ( ! foodica_has_logo() ) echo '</h1>'; ?>

                <?php
                $hide_tagline = (int) get_theme_mod( 'hide-tagline', foodica_get_default( 'hide-tagline' ) );
                ?>
                <?php if ( ! get_theme_mod( 'hide-tagline' ) ) : ?>
                    <p class="tagline"><?php bloginfo( 'description' ); ?></p>
                <?php endif; ?>

            </div><!-- .navbar-brand -->


            <?php if (option::is_on('ad_head_select')) { ?>
                <div class="adv">

                    <?php if ( option::get('ad_head_code') <> "") {
                        echo stripslashes(option::get('ad_head_code'));
                    } else { ?>
                        <a href="<?php echo option::get('banner_top_url'); ?>"><img src="<?php echo option::get('banner_top'); ?>" alt="<?php echo option::get('banner_top_alt'); ?>" /></a>
                    <?php } ?>

                </div><!-- /.adv --> <div class="clear"></div>
            <?php } ?>

        </div>



        <nav class="navbar" role="navigation">


            <nav class="main-navbar" role="navigation">

                <div class="inner-wrap">


                    <?php if ( ! get_theme_mod( 'navbar-hide-search', foodica_get_default( 'navbar-hide-search' ) ) ) : ?>

                        <div id="sb-search" class="sb-search">
                            <?php get_search_form(); ?>
                        </div>

                     <?php endif; ?>



                    <div class="navbar-header">
                        <?php if ( has_nav_menu( 'primary' ) ) { ?>

                           <a class="navbar-toggle" href="#menu-main-slide">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </a>


                           <?php wp_nav_menu( array(
                               'container_id'   => 'menu-main-slide',
                               'theme_location' => 'primary'
                           ) );
                       }  ?>

                    </div>


                    <div id="navbar-main">

                        <?php if (has_nav_menu( 'primary' )) {
                            wp_nav_menu( array(
                                'menu_class'     => 'nav navbar-nav dropdown sf-menu',
                                'theme_location' => 'primary',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s' . foodica_wc_menu_cartitem() . '</ul>'
                            ) );
                        } ?>


                    </div><!-- #navbar-main -->

                </div><!-- ./inner-wrap -->

            </nav><!-- .navbar -->


            <div class="clear"></div>


        </nav><!-- .navbar -->


    </header><!-- .site-header -->

    <div class="inner-wrap">