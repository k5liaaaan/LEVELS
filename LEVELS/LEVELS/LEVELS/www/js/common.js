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

  $(function(){
   $(".tabs").droppy();

   //スクロールをカスタマイズをしたい箇所へ追加のセレクタ
    $('.scroll-pane').jScrollPane();
    //ページを読み込んだ時はスクロールバーを透明にする
    $('.jspDrag').css('opacity',0);
    //カスタマイズさせたい箇所を囲むボックスに対してhoverを利用して表示・非表示を切り替える
    $('.waku').hover(function(){
    $('.jspDrag').animate({opacity:1});
    },function(){
    $('.jspDrag').animate({opacity:0});
    });
  });

});