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
          <a href="/">
            <div class="company_link footer_link col-md-6 col-xs-12">
              <div class="company_btn">
                <!--CompanyInformationSession<br>-->
                <span class="word">会社説明会に参加する</span>
              </div>
            </div>
          </a>
        </div>

        <div class="row">
          <div id="footer-wrapper" class="col-md-12 col-xs-12">




            <div class="collapse navbar-collapse" id="nav-menu-4">
                <?php
                  wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => 'div',
                    'depth'          => 0,
                    'fallback_cb' => false,
                    'menu_class'      => 'copyright_area footerPlus'
                  ) );
                ?>
            </div>

            <div class="copyright_area col-md-4 col-md-offset-0 col-xs-12 col-xs-offset-0">
              <div id="copyright">
                Copyright (C) 2020 LEVELS Co., Ltd. all rights reserved.
              </div>
            </div>

          </div><!--footer-wrapper end-->
        </div>
</div>