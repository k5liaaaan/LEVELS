<footer>

  <div class="footer_content">
      <div class="footer_menu">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'footer',
              'container'      => 'div',
              'depth'          => 0,
              'fallback_cb' => false,
              'menu_class'      => 'footerPlus'
            ) );
          ?>
      </div>
      <div class="plus_copyright">
        Copyright (C) 2020 LEVELS Co., Ltd. all rights reserved.
      </div>
  </div>
</footer>