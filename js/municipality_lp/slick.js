$(function() {
  $('.slider').slick({
    autoplay: true,//自動でスライドさせる
    autoplaySpeed: 0,//次の画像に切り替えるまでの時間 今回の場合は0
    speed: 18000,//画像が切り替わるまでの時間 今回の場合は難病で1枚分動くか
    cssEase: 'linear',//動きの種類は等速に
    arrows:false,//左右に出る矢印を非表示
    swipe: false,//スワイプ禁止
    pauseOnFocus: false,//フォーカスが合っても止めない
    pauseOnHover: false,//hoverしても止めない
    centerMode: true,//一枚目を中心に表示させる
    initialSlide: 0,//最初に表示させる要素の番号を指定
    variableWidth: true,//スライドの要素の幅をcssで設定できるようにする 
  });

});

$(function () {
  $('.introduction_area').each(function (index, element) {
    var $slider = $(element);
    // スライダーの親要素（.introduction_slick）を取得
    var $parentSlideWrap = $slider.closest('.introduction_slick');

    // ナビゲーション（数値とプログレスバー）のHTMLを生成・追加
    if ($parentSlideWrap.find('.slick-nav').length === 0) {
      var $slickNav = $(
        '<div class="slick-nav">' +
          '<div class="progress-container">' +
            '<div class="progress-bar-inner"></div>' +
          '</div>' +
        '</div>'
      );
      $parentSlideWrap.append($slickNav);
    }

    var $slickNav = $parentSlideWrap.find('.slick-nav');
    var $slickNum = $slickNav.find('.slick-num');
    var $progressBar = $slickNav.find('.progress-bar-inner');

    // スライダーの初期化
    $slider.on("init", function (event, slick) {
      // カウントの初期化
      $slickNum.find(".now-count").text(slick.currentSlide + 1);
      $slickNum.find(".all-count").text(slick.slideCount);
      // バーの初期化
      updateProgressBar(slick.currentSlide, slick.slideCount, $progressBar);
    }).slick({
      autoplay: false,
      speed: 1000,
      variableWidth: true,
      infinite: false,
      prevArrow: '<button class="slick__prev"></button>',
      nextArrow: '<button class="slick__next"></button>',
      dots: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            dots: true,
            dotsClass: 'dots-wrap',
          }
        }
      ]
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      // スライド切り替え前にカウントとバーを更新
      $slickNum.find(".now-count").text(nextSlide + 1);
      updateProgressBar(nextSlide, slick.slideCount, $progressBar);
    });

    // プログレスバー更新用関数
    function updateProgressBar(currentSlide, totalSlides, $barElement) {
      var percentage = ((currentSlide + 1) / totalSlides) * 100;
      $barElement.css('width', percentage + '%');
    }
  });
});

