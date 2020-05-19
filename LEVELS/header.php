<nav class="navbar navbar-default navbar-origin" role="navigation">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu-4">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/"><img class="no h_logo_plus" src="<?php echo get_template_directory_uri(); ?>/www/images/levels_logo02.png" alt="株式会社レベルズ"></a>
    </div>

    <div class="collapse navbar-collapse" id="nav-menu-4">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'global',
            'container'      => 'div',
            'depth'          => 0,
            'fallback_cb' => false,
            'menu_class'      => 'nav navbar-nav navbar-right'
          ) );
        ?>
    </div>
  </div>
</nav>