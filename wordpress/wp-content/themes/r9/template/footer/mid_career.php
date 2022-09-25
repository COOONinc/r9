<?php
get_template_part('template/cta/mid_career', null, $args);
?>
<footer>
  <div class="footer_top">
    <div class="w_main_out sp" style="border:none;">
      <div class="mid-footer-img"><img class="sp_logo sp" src="/wp-content/themes/r9/images/logo_mid_career.svg"></div>
    </div>
    <div class="w_main_out top-footer-bottom">
      <div class="footer_top_name pc">
        <p>中途採用2024</p>
      </div>
      <div class="footer_top_menubox newgrad-footer mid-footer">
        <?php wp_nav_menu(
					array(
						'theme_location' => 'mid_career_footer',
						'link_before' => '<p>',
						'link_after' => '</p>',
						'container' => false,
						'items_wrap' => '%3$s',
						'walker' => new Footer_Nav_Walker 
					)
				); ?>
        <div class="footer_top_menu" id="sp-mid-career-corp">
          <a href="https://r09.jp/" target="_blank">
            <p>コーポレートサイトはこちら</p>
            <img src="/wp-content/themes/r9/images/gaibulink2.svg" class="gaibulink2">
          </a>
        </div>
        <div class="footer_top_up pc">
          <a href="">
            <img src="/wp-content/themes/r9/images/up_icon.png">
          </a>
        </div>
      </div>
      <div class="footer_sns_icon sp">
        <a href="https://www.facebook.com/r09.jp/"><img src="/wp-content/themes/r9/images/facebook_icon.png"></a>
        <a href="https://www.wantedly.com/companies/company_9760412"><img src="/wp-content/themes/r9/images/Wantedly_icon.png" class="wantedly_icon"></a>
        <a href="https://twitter.com/ryonagai"><img src="/wp-content/themes/r9/images/twitter_icon.png"></a>
      </div>
    </div>
  </div>
  <div class="footer_bottom w_main_out top-footer-bottom">
    <img src=" /wp-content/themes/r9/images/R09ロゴ.png" class="pc">
    <a href="https://r09.jp/contact/" class="inquiry sp">お問い合わせ</a>
    <p class="copyright">Copyright ©株式会社アールナイン All right reserved.</p>
    <a href="https://r09.jp/contact/" class="inquiry pc">お問い合わせ</a>
    <div class="footer_sns_icon pc">
      <a href="https://www.facebook.com/r09.jp/"><img src="/wp-content/themes/r9/images/facebook_icon.png"></a>
      <a href="https://www.wantedly.com/companies/company_9760412"><img src="/wp-content/themes/r9/images/Wantedly_icon.png" class="wantedly_icon"></a>
      <a href="https://twitter.com/ryonagai"><img src="/wp-content/themes/r9/images/twitter_icon.png"></a>
    </div>
  </div>
</footer>