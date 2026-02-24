<footer class="footer">
    <div class="footer-inner">
      <div class="footer-main">
        <p class="footer-main__company-name eng--b">Worklog</p>
        <p class="footer-main__link"><a href="/privacy-policy/">プライバシーポリシー</a></p>
        <ul class="footer-main__sns footer-sns">
          <li class="footer-main__sns-item footer-main__sns-item--tw"><a href="https://twitter.com/jumpei_worklog" class="footer-main__sns-item-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter_logo_white.svg" alt=""></a></li>
          <li class="footer-main__sns-item footer-main__sns-item--fb"><a href="https://m.facebook.com/worklog2018/" class="footer-main__sns-item-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook_logo_white.svg" alt=""></a></li>
        </ul>
      </div>
      <p class="footer__copyright">©︎Worklog,Inc. All right reserved</p>
    </div>
  </footer>
  <!-- <div class="cursor"></div> -->
  <div class="follower-wrapper">
    <div class="follower"></div> 
	</div> 
  <div class="page-top">
    <div class="page-top__inner">
      <a href="" class="page-top__btn">
        <i class="page-top__btn-circle"></i>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
          <circle class="js-pagetop-circle" cx="25" cy="25" r="24" fill="none"></circle>
        </svg>
      </a>
    </div>
  </div>

  <!-- ▼JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <?php if ( is_front_page() ): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>
  <?php elseif ( is_page( array('document-system' , 'document-workshop' )) ): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/document/script.js"></script>
  <?php elseif ( is_page( 'works' ) ): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/works/script.js"></script>
  <?php elseif ( is_page( 'news' ) ): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/news/script.js"></script>
  <?php elseif ( is_page( 'municipality_lp' ) ): ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/municipality_lp/scrollreveal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/municipality_lp/open.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/municipality_lp/imagechange.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/municipality_lp/slick.js"></script>
  <?php endif; ?>
  <?php if ( in_category('works')): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/works/script.js"></script>
  <?php endif; ?>
  <?php wp_footer(); ?>
</body>
</html>