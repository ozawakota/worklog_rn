<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- <meta name="description" content=""> -->
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:image" content="https://www.worklog-inc.com/wp-content/uploads/2023/11/worklog_eye.png" />

  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/android-chrome-256x256.png">
  <link rel="canonical" href="">
  <!-- ▼CSS -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <?php if ( is_front_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
  <?php endif; ?>
  <?php if( in_category('news') ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/news/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php elseif( in_category('works') ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/works/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php elseif( in_category('member') ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/member/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
  <?php if ( is_page( 'news' ) || is_page( 'privacy-policy' ) ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/news/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
  <?php if ( is_page( 'works' ) ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/works/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
  <?php if ( is_page( array('document-system' , 'document-workshop' )) ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/document/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
  <?php if ( is_page( 'yamamoto' ) || is_page( 'fujita' ) || is_page( 'imamura' ) || is_page( 'reina' )  || is_page( 'udagawa' ) ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/member/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
  <?php if ( is_page( 'lp' ) ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/lp/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
  <?php if ( is_page( 'municipality_lp' ) ): ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/municipality_lp/style.css" rel="stylesheet" type="text/css" media="all" />
  <?php endif; ?>
<script>
    (function(d) {
      var config = {
        kitId: 'bvj2thx',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141785893-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-141785893-1');
		</script>
  <?php wp_head(); ?>
</head>
<body>
  <?php if ( is_front_page() ): ?>
  <style>
    .loading {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100vw;
      height: 100vh;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: #E7E7DE 0% 0% no-repeat padding-box;
      z-index: 9999999;
    }
    .loading__text {
      color: #091331;
      font: normal normal bold 14px/14px Lato;
      letter-spacing: 0.5px;
    }
    .loader {
      width: 60px;
      height: 60px;
      position: absolute;
      bottom: 60px;
      right: 0;
      left: 0;
      margin: auto;
    }
    .loading__base {
      width: 64px;
      height: 64px;
      position: absolute;
      top: 0;
      left: 0;
      stroke: #1e4068;
      animation: rotate 1.6s cubic-bezier(.61,.1,.24,1) infinite forwards
    }
    @media screen and (max-width: 767px) {
      .loader {
        bottom: 135px;
      }
    }
    @-webkit-keyframes rotate {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(720deg)
      }
    }
    @keyframes rotate {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(720deg)
      }
    }
  </style>
  <div class="loading">
    <div class="loading__text">PERSONAL DRIVEN INNOVATION</div>
    <div class="loader">
      <img src="<?php echo get_template_directory_uri(); ?>/images/loading.svg" alt="" class="loading__base">
    </div>
  </div>
  <?php endif; ?>
  <header class="header eng--b">
    <p class="header-logo"><a href="/" class="header-logo__link">Worklog</a></p>
    <div class="header-menu-btn"></div>
    <div class="header-menu">
      <div class="header-menu-logo"><a href="/" class="header-menu-logo__link">Worklog</a></div>
      <div class="header-menu-close-btn"></div>
      <nav class="header-nav">
        <ul class="header-nav__list">
          <?php if ( is_front_page() ): ?>
            <li class="header-nav__list-item"><a href="#our-service" class="header-nav__list-item-link">SERVICE</a></li>
          <?php else: ?>
            <li class="header-nav__list-item"><a href="/#our-service" class="header-nav__list-item-link">SERVICE</a></li>
          <?php endif; ?>
          <?php if ( is_front_page() ): ?>
            <li class="header-nav__list-item"><a href="#member" class="header-nav__list-item-link">MEMBER</a></li>
          <?php else: ?>
            <li class="header-nav__list-item"><a href="/#member" class="header-nav__list-item-link">MEMBER</a></li>
          <?php endif; ?>
          <li class="header-nav__list-item"><a href="/works/" class="header-nav__list-item-link">WORKS</a></li>
          <?php if ( is_front_page() ): ?>
            <li class="header-nav__list-item"><a href="#document-sample" class="header-nav__list-item-link">DOCUMENT</a></li>
          <?php else: ?>
            <li class="header-nav__list-item"><a href="/#document-sample" class="header-nav__list-item-link">DOCUMENT</a></li>
          <?php endif; ?>
          <?php if ( is_front_page() ): ?>
            <li class="header-nav__list-item"><a href="#contact" class="header-nav__list-item-link">CONTACT</a></li>
          <?php else: ?>
            <li class="header-nav__list-item"><a href="/#contact" class="header-nav__list-item-link">CONTACT</a></li>
          <?php endif; ?>
          <li class="header-nav__list-item"><a href="/recruit/" class="header-nav__list-item-link">RECRUIT</a></li>
          <li class="header-nav__list-item"><a href="/news/" class="header-nav__list-item-link">NEWS</a></li>
          <?php if ( is_front_page() ): ?>
            <li class="header-nav__list-item"><a href="#company" class="header-nav__list-item-link">COMPANY</a></li>
          <?php else: ?>
            <li class="header-nav__list-item"><a href="/#company" class="header-nav__list-item-link">COMPANY</a></li>
          <?php endif; ?>
        </ul>
      </nav>
      <div class="header-menu-sns-links">
        <a class="header-menu-sns-links__item header-menu-sns-links__item--tw"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter_logo_white.svg" alt="twitter icon"></a>
        <a class="header-menu-sns-links__item header-menu-sns-links__item--fb"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook_logo_white.svg" alt="facebook icon"></a>
      </div>
    </div>
  </header>