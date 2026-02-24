$(function(){
  // header logo switch
  var $headerLogo = $('.header-logo');
  var $fv = $('.fv');
  var fvOffsetBottom;
  var windowPositionY;
  if($fv.length) {
    $headerLogo.hide();
    var scrollHeaderLogo = function(){
      fvOffsetBottom = $fv.offset().top + $fv.outerHeight()
      windowPositionY = $(window).scrollTop();
      if(windowPositionY > fvOffsetBottom){
        $headerLogo.fadeIn();
      } else {
        $headerLogo.fadeOut();
      }
    }
    $(window).on('load resize scroll', scrollHeaderLogo);
  }

  // header activate
  var headerNavListItemLinkClass = 'header-nav__list-item-link';
  var headerNavListItemLinkActiveClass = headerNavListItemLinkClass + '--active';
  var $headerNavListItemLink = $('.' + headerNavListItemLinkClass);
  var directory1st = location.pathname.split('/')[1];

  $headerNavListItemLink.each(function(){
    var $this = $(this);
    if($this.text().toLowerCase() === directory1st){
      $this.addClass(headerNavListItemLinkActiveClass);
      return false;
    }
  });

  // sp header btn
  var $headerMenuBtn = $('.header-menu-btn');
  var $headerMenuCloseBtn = $('.header-menu-close-btn');
  var switchDisplayHeaderMenu = function() {
    var $this = $(this);
    var $headerMenu = $this.closest('.header').find('.header-menu');
    $headerMenu.fadeToggle();
  }
  $headerMenuBtn.click(switchDisplayHeaderMenu);
  $headerMenuCloseBtn.click(switchDisplayHeaderMenu);

  // stalker
  var
  follower = $(".follower"),
  fWidth = 40, //フォロワーの大きさ
  delay = 10, //数字を大きくするとフォロワーがより遅れて来る
  mouseX = 0, //マウスのX座標
  mouseY = 0, //マウスのY座標
  posX = 0, //フォロワーのX座標
  posY = 0; //フォロワーのX座標
  scrollValue = $(window).scrollTop();

  //カーソルの遅延アニメーション
  TweenMax.to({}, .001, {
    repeat: -1,
    onRepeat: function() {
      posX += (mouseX - posX) / delay;
      posY += (mouseY - posY) / delay;

      TweenMax.set(follower, {
        css: {
          left: posX - (fWidth / 2),
          top: posY - (fWidth / 2)
        }
      });
    }
  });

  //マウス座標を取得
  $(document).on("mousemove", function(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  $('a, button, input[type="button"], input[type="submit"]').on({
    "mouseenter": function() {
      follower.addClass("is-active");
    },
    "mouseleave": function() {
      follower.removeClass("is-active");
    }
  });

  $(".js-not-inversion, .works-list__thumb, .next-work-list__thumb, .detail__thumb-img, .detail-contents__content-inner img, .article-thumb, .article-contents img, .news-part__thumb").on({
    "mouseenter": function() {
      follower.addClass("is-not-inversion");
    },
    "mouseleave": function() {
      follower.removeClass("is-not-inversion");
    }
  });

  // ページトップボタン
  $(window).on('load scroll', function() {
    var b = $(document).scrollTop()
      , c = $('body').innerHeight() - $(window).innerHeight() - $('.footer').outerHeight()
      , d = Math.round((c - b) / (c / 145));
    $('.js-pagetop-circle').css({
      "stroke-dashoffset": d
    });
    if(0 >= d || 145 <= d) {
      if(!$('.page-top__btn').hasClass('page-top__btn--hide')) $('.page-top__btn').addClass('page-top__btn--hide');
    } else {
      if($('.page-top__btn').hasClass('page-top__btn--hide')) $('.page-top__btn').removeClass('page-top__btn--hide');
    }
  });

  // アンカースクロール
  var anchorLink = function(e){
    e.preventDefault();
    var $this = $(this);
    var speed = 500;
    var href= $this.attr("href");
    var target;
    var position;
    if(href.match("/#") && location.pathname === "/"){
      href = href.substring(href.indexOf('#'));
      target = $(href == "#" || href == "" ? 'html' : href);
      position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
    } else if(href.match("/#")) {
      location.href = href;
    } else {
      var $this = $(this);
      var $headerMenu = $this.closest('.header').find('.header-menu');
      $headerMenu.fadeToggle();
      target = $(href == "#" || href == "" ? 'html' : href);
      position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
    }
  }
  $('.page-top__btn, [href^="#"], [href^="/#"]').click(anchorLink);
});