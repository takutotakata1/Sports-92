jQuery(function($){
    //モーダルウィンドウ
    var winScrollTop;
    $('.js-modal-open').each(function(){
        $(this).on('click',function(){
            //スクロール位置を取得
            winScrollTop = $(window).scrollTop();
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        $('body,html').stop().animate({scrollTop:winScrollTop}, 100);
        return false;
    });
    
    // トップページであと何日かを取得
    var today = new Date();
    var festival = new Date("2021/9/26")
    var countdown = Math.ceil((festival.getTime() - today.getTime()) / (1000 * 60 * 60 * 24));
    if(countdown>=0){
      $('.remaindays span').text(+countdown+"日");
    } else{
      $('.remaindays').text("2021年度体育祭は終了いたしました。")
    }
    
    //マーカーのアニメーション
    // トップページ
    $('.remaindays').markerAnimation();
    // 記事
    $('.paragraph h2').markerAnimation({thickness:'0.5em'});
    // フルスクリーンナビゲーションの稼働
    $('.menu').on('click',function(){
      $('.menu__line').toggleClass('active');
      $('.gnav').slideToggle();
    });

    //競技説明ページの切り替え
    $('.lists dt').each(function(){
      $(this).on('click',function () { 
        $(this).toggleClass('on');
        $('+.sub',this).slideToggle();
        return false;
       })
    });
    $('.judge').each(function(){
      $(this).on('click',function () { 
        $(this).toggleClass('on');
        $('+p',this).slideToggle();
        return false;
       })
    });
  });

  // animsitionの実行
  $(document).ready(function() {
    $(".animsition").animsition();
  });

  $(function() {
    $("#nav").load("../html/parts/nav.html");
    $("#footer").load("../html/parts/footer.html");
<<<<<<< HEAD
=======
    $("#privatenav").load("nav.html");
>>>>>>> develop
});
