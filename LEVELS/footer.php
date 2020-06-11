<div id="footer">

  <div class="row">
    <a href="/entry/">
      <div class="entry_link footer_link col-md-6 col-xs-12">
        <div class="entry_btn">
          <!--Entry<br>-->
          <span class="word">応募する</span>
        </div>
      </div>
    </a>
    <a href="/briefing/">
      <div class="company_link footer_link col-md-6 col-xs-12">
        <div class="company_btn">
          <!--CompanyInformationSession<br>-->
          <span class="word">会社説明会に参加する</span>
        </div>
      </div>
    </a>
  </div>

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
</div>