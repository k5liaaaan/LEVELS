jQuery(function($){

  // page Topフェードイン・アウト
  $(function(){

    // ページ内リンクをクリックすると
    $('.pageTop').click(function(){
      $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
    });

    $(window).bind("scroll", function() {
      /* PC */
      if($(window).width() > 768){
        // トップから150px以上スクロールしたら
        if ($(this).scrollTop() > 150) {
         // ページトップのリンクをフェードインする
          $(".pageTop").fadeIn();
        } else { // それ以外は
         // ページトップのリンクをフェードアウトする
          $(".pageTop").fadeOut();
        }
        // ドキュメントの高さ
        scrollHeight = $(document).height();
        // ウィンドウの高さ+スクロールした高さ→ 現在のトップからの位置
        scrollPosition = $(window).height() + $(window).scrollTop();
        // フッターの高さ
        footHeight = $("#footer").height();

        // スクロール位置がフッターまで来たら
        if ( scrollHeight - scrollPosition  <= footHeight ) {
          // ページトップリンクをフッターに固定
          $(".pageTop a").css({"position":"absolute"});
        } else {
          // ページトップリンクを右下に固定
          $(".pageTop a").css({"position":"fixed"});
        }
      }
      /* スマホ */
      if($(window).width() <= 768){
        // トップから150px以上スクロールしたら
        if ($(this).scrollTop() > 100) {
         // ページトップのリンクをフェードインする
          $(".pageTop").fadeIn();
        } else { // それ以外は
         // ページトップのリンクをフェードアウトする
          $(".pageTop").fadeOut();
        }
        // ドキュメントの高さ
        scrollHeight = $(document).height();
        // ウィンドウの高さ+スクロールした高さ→ 現在のトップからの位置
        scrollPosition = $(window).height() + $(window).scrollTop();
        // フッターの高さ
        footHeight = 450;

        // スクロール位置がフッターまで来たら
        if ( scrollHeight - scrollPosition  <= footHeight ) {
          // ページトップリンクをフッターに固定
          $(".pageTop a").css({"position":"absolute"});
        } else {
          // ページトップリンクを右下に固定
          $(".pageTop a").css({"position":"fixed"});
        }
      }
    });
  });

 function active() {
    $(this).toggleClass("active").next().slideToggle(500);
  }
  $(".toggle").click(active);


  setTimeout(function(){
     $('.top_hover_anime').addClass("top_hover_anime_on");
  },1000);

  $(".top_hover_anime_a").hover

  $('.top_hover_anime_a').hover(
    function(){  
        $(".top_hover_anime").addClass("top_hover_anime_hover");
    },
    function(){
        $(".top_hover_anime").removeClass("top_hover_anime_hover");
    }
  );


});