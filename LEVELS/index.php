<!DOCTYPE html>
<html lang="ja">

<head>

<meta charset="utf-8">

<title><?php require "include/siteName.php"; ?></title>
<?php require "include/description.php"; ?>
<link rel="canonical" href="/" />
<?php require "include/common.php"; ?>    
<?php wp_enqueue_script( 'jquery' ); ?>
<?php wp_head(); ?>

</head>
<body>
<?php get_header(); ?>

  <div id="wrapper">

    <div id="wrap">

        <div class="top_page">
          <img class="top_image" src="<?php echo get_template_directory_uri(); ?>/www/img/sample_top.jpg" class="img-responsive" alt="株式会社プライムハートで働く社員">
          <div class="top_hover_anime">
            <p class="top_hover_anime_p">あなたの未来はここから変わる</p>
            <a class="top_hover_anime_a" href="/entry/">会社説明会へ</a>
          </div>
        </div>


          <div class="top_massage">
            <h1 class="top_massage_h1">株式会社LEVELS<br>採用ページへようこそ</h1>
            <p class="top_massage_text">
              未経験からエンジニアへ。<br><br>
              30代からでも遅くない。<br>
              挑戦したいあなたを応援します。
            </p>
          </div>

          <div class="top_link">
            <h2 class="top_link_h2">採用基準は今と未来</h2>
            <p class="top_link_text">
              過去の経歴や経験は問いません。<br>
              夢や理想に向けて走り出そうという気持ちを持っている人を求めています。
            </p>
            <a id="new_button" class="top_link_a link_btn link_btn paper paper-raise-flatten" href="/person/">
              求める人物像
            </a>
          </div>

          <div class="top_link top_link_last">
            <h2 class="top_link_h2">研修制度への自信</h2>
            <p class="top_link_text">
              ＩＴ経験ゼロでも「わかる」教育方法。<br>
              初心者から中級者まで<br>
              それぞれのレベルに合わせて学んでいきます。
            </p>
            <a id="new_button" class="top_link_a link_btn link_btn paper paper-raise-flatten" href="/training/">
              LEVELSの研修制度
            </a>
          </div>

          <?php /*
            <div class="top_info">
              <h2 class="top_info_h2">LEVELS NEWS</h2>
                <div class="top_info_box">
                  <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5 ) ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="top_info_data">
                          <p class="nowrap"><?php echo get_the_date(); ?></p>
                          <p class="top_info_content">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                          </p>
                        </div>
                      <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div> 
                      <?php endif; ?>
            </div>
          */ ?>
    </div><!-- wrap -->
  </div><!-- wrapper -->


<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>
