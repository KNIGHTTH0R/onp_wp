
<!-- Main header Template -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php $css_url = get_template_directory_uri().'/css/youtubeVideo.css'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $css_url; ?>">
    
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="container">
    <header>
      <div class="logo">
        <h2>BD</h2>
        <h3>Business Design</h3>
      </div><!-- end of "logo" -->

      <div class="social">
        <p>Join the conversation</p>
        <ul>
          <li><a href="#"><i class="icon-facebook-sign"></i></a></li>
          <li><a href="#"><i class="icon-twitter-sign"></i></a></li>
          <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
          <li><a href="#"><i class="icon-youtube-sign"></i></a></li>
        </ul>
      </div><!-- end of "social" -->

      <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'Online News Portal' ); ?>">
                <?php
                  wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'main-nav',
                   ) );
                ?>
        <form>
          <span class="search"><input type="text" placeholder="search"> <a href="#"><i class="icon-search"></i></a></span>
        </form>
      </nav><!-- .main-navigation -->
      <?php wp_head(); ?>
    </header>
