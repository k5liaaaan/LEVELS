<header>
      <a class="main_logo" href="/"><img class="no h_logo_plus" src="<?php echo get_template_directory_uri(); ?>/www/images/logo_ver02.png" alt="株式会社レベルズ"></a>
    </div>

    <div class="smp-menu toggle">
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div class="plus_head_nav">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'global',
            'container'      => 'div',
            'depth'          => 0,
            'fallback_cb' => false,
            'menu_class'      => 'plus_head_nav_child'
          ) );
        ?>
</header>