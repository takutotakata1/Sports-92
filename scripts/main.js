// 残りポイント表示
jQuery(function($){
  
  var single_point = 0;
  var triple_point = 0;
  var remaining_point = 100;
  $('.singleform').on('input',function(){
    single_point = $('.singleform').val();
    remaining_point = 100 - single_point - triple_point;
    if(remaining_point<0){
      remaining_point = 0;
    }
    $('.button1 span').text("残り"+remaining_point+"pt");
  })
  $('.tripleform').on('input',function(){
    triple_point = $('.tripleform').val();
    remaining_point = 100 - single_point - triple_point;
    if(remaining_point<0){
      remaining_point = 0;
    }
    $('.button1 span').text("残り"+remaining_point+"pt");
  })
  $('#form1').submit(function(){
    single_point = $('.singleform').val();
    triple_point = $('.tripleform').val();
    if(Number(single_point)+Number(triple_point)>100){
      alert('合計で100pt以下になるようにしてください！');
      return false;
    }
    if(Number(single_point)+Number(triple_point)==0){
      alert('ポイントを入力してください！')
    }
  });
  // タブ機能
    // タブの各要素を jQuery オブジェクト化
    var border = $("#border div");
    $('#work').tabs({
      hide:{duration:250},
      show:{duration:125},
    });
    $('.uitab').on('click',function(){
      $('.uitab').removeClass('active');
      $(this).addClass('active');
    });
    $("#work").bind('tabsactivate', function(event, ui) {
      // クリックされたタブのインデックス
      // インデックスは 0 から始まるので + 1
      var selected = ui.newTab.index() + 1;
      if(selected==1){
        (border).animate({left:'0%'},10,'linear');
      }else if(selected==2){
        (border).animate({left:'50%'},10,'linear');
      }else{
        console.log("error");
      }
    });

    //下スクロール中はボタンを消す機構
    var startPos = 0,winScrollTop = 0;
    $(window).on('scroll',function(){
      winScrollTop = $(this).scrollTop();
      if(winScrollTop>startPos){
        $('.button1').addClass('hide');
      } else {
        $('.button1').removeClass('hide');
      }
      startPos = winScrollTop;
    });
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

    //競技説明のページ内検索
    $('#search').on('input',function(){
      var kensaku = new RegExp($('#search').val(),"i");
      $('#result tbody tr').each(function(){
        var txt = $(this).find("td:eq(0)").html();
        if(txt.match(kensaku) != null){
          $(this).show();
        }else{
          $(this).hide();
        }
      })
    });

    //競技説明ページのアコーディオン
    $('.lists dt').each(function(){
      $(this).on('click',function () { 
        $('+.sub',this).slideToggle();
        $(this).toggleClass('on');
        return false;
       })
    });
  });

  // animsitionの実行
  $(document).ready(function() {
    $(".animsition").animsition();
    var str = window.location.href.split('/').pop();
    var nowpage = str.split('.').shift()+'s';
    $("."+nowpage+">a span").css("background","linear-gradient(transparent 75%, #7fbfff 75%)");
  });
