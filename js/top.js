$(function () {
  var isPc = function () {
    return $(window).innerWidth() > 767 ? true : false;
  }
  var $jsInview = $('.js-inview');
  $jsInview.addClass('not-inview');
  $(window).on('load', function(){
    $('.loading').fadeOut(1000);

    setTimeout(function(){
      var animationObserver = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          var _target = entry.target;
          var classOfInview = 'is-inview';
          if(entry.isIntersecting && !_target.classList.contains(classOfInview)){
            _target.classList.add(classOfInview);
          }
        });
      }, {
        root: null,
        threshold: 0.1
      });

      var inviewTargets = document.querySelectorAll('.js-inview');
      inviewTargets.forEach(inviewTarget => {
        animationObserver.observe(inviewTarget);
      });
    }, 1000);
  });

  var resettingFollower = function(){
    $('a, button, input[type="button"], input[type="submit"]').off("mouseenter");
    $('a, button, input[type="button"], input[type="submit"]').off("mouseleave");
    $('a, button, input[type="button"], input[type="submit"]').on({
      "mouseenter": function() {
        $(".follower").addClass("is-active");
      },
      "mouseleave": function() {
        $(".follower").removeClass("is-active");
      }
    });
    $('.works__capture, .member-profile').on({
      "mouseenter": function() {
        $(".follower").addClass("is-not-inversion");
      },
      "mouseleave": function() {
        $(".follower").removeClass("is-not-inversion");
      }
    });
  }

  var memberSliderSetting = function(){
    if(isPc()) {
      var $memberContents = $('.member__contents');
      var setting = setInterval(() => {
        if($memberContents.hasClass('is-inview')){
          $memberContents.not('.slick-initialized').slick({
            autoplay: true,
            autoplaySpeed: 0,
            draggable: false,
            pauseOnHover: false,
            slidesToShow: 2,
            initialSlide: $memberContents.children().length - 1,
            variableWidth: true,
            arrows: false,
            speed: 9000,
            cssEase: 'linear'
          });

          resettingFollower();
          clearInterval(setting);
        }
      }, 100);
    } else {
      $('.member__contents.slick-initialized').slick('unslick');
    }
  }

  $(window).on('load resize', memberSliderSetting);

  var worksSliderfunction = function(){
    var windowWidth = $(window).innerWidth();
    var $worksContents = $('.works__contents');
    var $worksCaptures = $worksContents.find('.works__captures');
    var $worksCapture = $worksCaptures.children();
    var defaultCaptureLen = $worksCapture.length;
    var $worksContent = $worksContents.find('.works__content');
    var $worksContentItem = $worksContent.find('.works__content-item');
    var $worksContentText = $worksContent.find('.works__content-text');
    var $worksCapturesNav = $worksContents.find('.works__captures-nav');
    var $worksCapturesNavItem;
    var $worksCapturesPagenumIndex = $worksContents.find('.works__captures-pagenum-index');
    var $worksCapturesPagenumMaxlen = $worksContents.find('.works__captures-pagenum-maxlen');
    var worksCaptureLen = $worksCapture.length;
    var worksCaptureWidth = {
      'pc': 0,
      'sp': 0
    };
    var worksCaptureMarginRight = {
      'pc': 0,
      'sp': 0
    };
    var worksCaptureMarginLeft = {
      'pc': 0,
      'sp': 0
    };
    var worksCaptureWidthTotal = 0;
    var intervalDuration = 5000;
    var setLoop;

    $worksCapturesPagenumIndex.text(1);
    $worksCapturesPagenumMaxlen.text(defaultCaptureLen);
    for(var i = 0; i < defaultCaptureLen; i++){
      $worksCapturesNav.prepend('<li class="works__captures-nav-item"></li>');
    }
    $worksCapturesNavItem = $worksCapturesNav.find('.works__captures-nav-item');

    // カルーセルの自動再生
    var loopSlider = function () {
      window.clearInterval(setLoop);
      setLoop = window.setInterval(function(){
        var nowActiveIndex = parseInt($worksContents.find('.works__captures-pagenum-index').text());
        var index = parseInt($worksCapturesPagenumMaxlen.text()) < nowActiveIndex + 1 ? 1 : nowActiveIndex + 1;
        activateSlider(index);
      }, intervalDuration);
    }
    // テキストが3行以上の時に3点リーダを付ける
    var textHeightAdjust = function(){
      var lineNum = 3;
      var limitHeight = parseInt($worksContentText.css('lineHeight').replace(/(\d+)px/, '$1')) * lineNum;
      $worksContentText.each(function(){
        var $this = $(this);

        $this.height('auto');
        if($this.height() > limitHeight) {
          while($this.height() > limitHeight){
            $this.text($this.text().slice(0, -1));
          }
          $this.text($this.text().slice(0, -1).replace(/$/, '…'));
        }
        $this.height(limitHeight + parseInt($worksContentText.css('paddingBottom').replace(/(\d+)px/, '$1')));
      });
    }
    var activateSlider = function (index) {
      var worksCaptureIndex = isPc() ? index : index - 1;
      var centeringValue = 0;
      var activeClassOfCapture = 'works__capture--active';
      var activeClassOfNavItem = 'works__captures-nav-item--active';

      windowWidth = $(window).innerWidth();
      if(isPc()){
        if((worksCaptureWidth['pc'] === 0) || (worksCaptureMarginRight['pc'] === 0) || (worksCaptureMarginLeft['pc'] === 0)){
          worksCaptureWidth['pc'] = $worksCapture.width();
          worksCaptureMarginRight['pc'] = parseFloat($worksCapture.css('marginRight').replace(/(\d+)(px|vw)/, '$1'));
          worksCaptureMarginLeft['pc'] = parseFloat($worksCapture.css('marginLeft').replace(/(\d+)(px|vw)/, '$1'));
        }
        worksCaptureWidthTotal = worksCaptureWidth['pc'] + worksCaptureMarginRight['pc'] + worksCaptureMarginLeft['pc'];
        wrapperWidth = worksCaptureWidth['pc'] * worksCaptureLen + worksCaptureMarginRight['pc'] * worksCaptureLen + worksCaptureMarginLeft['pc'] * worksCaptureLen;
      } else if(!isPc()){
        if((worksCaptureWidth['sp'] === 0) || (worksCaptureMarginRight['sp'] === 0) || (worksCaptureMarginLeft['sp'] === 0)){
          worksCaptureWidth['sp'] = $worksCapture.width();
          worksCaptureMarginRight['sp'] = parseFloat($worksCapture.css('marginRight').replace(/(\d+)(px|vw)/, '$1'));
          worksCaptureMarginLeft['sp'] = parseFloat($worksCapture.css('marginLeft').replace(/(\d+)(px|vw)/, '$1'));
        }
        worksCaptureWidthTotal = worksCaptureWidth['sp'] + worksCaptureMarginRight['sp'] + worksCaptureMarginLeft['sp'];
        wrapperWidth = worksCaptureWidth['sp'] * worksCaptureLen + worksCaptureMarginRight['pc'] * worksCaptureLen + worksCaptureMarginLeft['pc'] * worksCaptureLen;
      }
      centeringValue = worksCaptureWidthTotal * worksCaptureIndex - (windowWidth - worksCaptureWidthTotal) / 2;

      $worksCaptures.css('opacity', 0);
      $worksContent.css('height', $worksContent.outerHeight());
      $worksContentItem.fadeOut(300);
      $worksCapture.removeClass(activeClassOfCapture);
      $worksCapturesNavItem.removeClass(activeClassOfNavItem).eq(index - 1).addClass(activeClassOfNavItem);
      var $worksCapturesOpacity = $worksCaptures.css('opacity');
      $worksCaptures.on('transitionend', function(){
        if (isPc()) {
          $worksCaptures.css({
            'transform': 'translateX(-' + centeringValue + 'px)'
          });
        } else {
          $worksCaptures.css({
            'transform': 'translateX(0)'
          });
        }
        $worksCapture.eq(index - 1).addClass(activeClassOfCapture);
        $worksContentItem.eq(index - 1).fadeIn(300);
        $worksContent.css('height', 'auto');
        $worksCaptures.css('opacity', 1);
        $worksCaptures.off('transitionend');
      });
      setTimeout(function(){
        if ($worksCapturesOpacity == 0) {
          if (isPc()) {
            $worksCaptures.css({
              'transform': 'translateX(-' + centeringValue + 'px)'
            });
          } else {
            $worksCaptures.css({
              'transform': 'translateX(0)'
            });
          }
          $worksCapture.eq(index - 1).addClass(activeClassOfCapture);
          $worksContentItem.eq(index - 1).fadeIn(300);
          $worksContent.css('height', 'auto');
          $worksCaptures.css('opacity', 1);
        }
      },800);
      $worksCapturesPagenumIndex.text(index);
    }
    var clickNav = function() {
      var $this = $(this);
      var clickedNavItemIndex = $worksCapturesNavItem.index($this);

      window.clearInterval(setLoop);
      activateSlider(clickedNavItemIndex + 1);
    }
    var worksSliderInit = function () {
      var $worksCapture = $('.works__capture');
      var $firstChildren;
      var $lastChildren;
      var wrapperWidth = 0;
      var nowCaptureLen = $worksCaptures.children().length;
      var diffLen = nowCaptureLen - defaultCaptureLen;
      var index = parseInt($('.works__captures-pagenum-index').text());

      nowCaptureLen = $worksCaptures.children().length;
      if(diffLen > 0){
        $worksCaptures.children(':nth-child(-n+' + (diffLen / 2) + '), :nth-last-child(-n+' + (diffLen / 2) + ')').remove();
      }
      $firstChildren = $worksCaptures.children(':first-child').clone();
      $lastChildren = $worksCaptures.children(':last-child').clone();

      if (isPc()) {
        $worksCaptures.prepend($lastChildren);
        $worksCaptures.append($firstChildren);

        resettingFollower();

        $worksCaptures.width(9999999);
        worksCaptureLen = $worksCaptures.children().length;
        if(isPc()){
          if((worksCaptureWidth['pc'] === 0) || (worksCaptureMarginRight['pc'] === 0) || (worksCaptureMarginLeft['pc'] === 0)){
            worksCaptureWidth['pc'] = $worksCapture.width();
            worksCaptureMarginRight['pc'] = parseFloat($worksCapture.css('marginRight').replace(/(\d+)(px|vw)/, '$1'));
            worksCaptureMarginLeft['pc'] = parseFloat($worksCapture.css('marginLeft').replace(/(\d+)(px|vw)/, '$1'));
          }
          worksCaptureWidthTotal = worksCaptureWidth['pc'] + worksCaptureMarginRight['pc'] + worksCaptureMarginLeft['pc'];
          wrapperWidth = worksCaptureWidth['pc'] * worksCaptureLen + worksCaptureMarginRight['pc'] * worksCaptureLen + worksCaptureMarginLeft['pc'] * worksCaptureLen;
        }
        $worksCaptures.width(wrapperWidth);

        $worksCaptures.css({
          'width': wrapperWidth + 'px'
        });
        activateSlider(index);
      } else {
        $worksCaptures.css({
          'width': 85.33333333 + 'vw'
        });
        activateSlider(index);
      }
      $worksCapturesNavItem.click(clickNav);
      setTimeout(function(){
        loopSlider();
      }, intervalDuration);
    };

    $(window).on('load resize', textHeightAdjust);
    $(window).on('load resize', worksSliderInit);
  }
  worksSliderfunction();
});