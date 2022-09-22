<header id="header">

  <div class="header_content">
    <a href="/">
      <svg class="logo pc">
        <use xlink:href="/wp-content/themes/r9/images/R9logo.svg#logo"></use>
      </svg>
      <img class="sp_logo sp" src="/wp-content/themes/r9/images/logo_new_grad_colored.svg" />
    </a>
    <div class="header_menubox pc">
      <?php wp_nav_menu(
				array(
					'theme_location' => 'new_grad_header',
					'link_before' => '<p>',
					'link_after' => '</p>',
					'container' => false,
					'items_wrap' => '%3$s',
					'walker' => new Header_Nav_Walker 
				)
			); ?>
      <div class="header_menu header_textmenu header_textmenu_big">
        <a href="https://r09.jp/" class="icon_link" target="_blank">
          <p>コーポレートサイトはこちら</p>
          <svg class="gaibulink" alt="外部リンク">
            <use xlink:href="/wp-content/themes/r9/images/gaibulink.svg#gaibulink"></use>
          </svg>
        </a>
      </div>
    </div>
    <div class="header_boxmenu header_boxmenu_left right_menu_icon">
      <a href="/new_grad/entry">
        <p>ENTRY</p>
        <img class="pc hover-change" src="/wp-content/themes/r9/images/yajirushi_shiro.svg" alt="→">
        <img class="pc hover-change-hide" src="/wp-content/themes/r9/images/yajirushi_mizuiro.svg" alt="→">
      </a>
    </div>
    <div class="sp_menu_icon sp">
      <span></span>
      <span></span>
      <span><span>M</span><span>E</span><span>N</span><span>U</span></span>
    </div>
  </div>
  <nav class="sp_menu slide-_n">
    <div class="sp_menu_box">
      <div class="sp_menu_header">
        <img class="sp_logo" src="/wp-content/themes/r9/images/logo_new_grad.svg" />
      </div>
      <div class="menu_sp_menu_container w_main">
        <div class="button_wrapper">
          <a href="/new_grad/entry" class="slash_button">新卒ENTRY</a>
        </div>
        <div class="menu_wrapper">
          <?php wp_nav_menu(
						array(
							'theme_location' => 'new_grad_header',
							'link_before' => '<p>',
							'link_after' => '</p>',
							'container' => false,
							'items_wrap' => '%3$s',
							'walker' => new Header_Nav_Walker 
						)
					); ?>
        </div>
        <div class="footer_sns_icon">
          <a href="https://www.facebook.com/r09.jp/"><img src="/wp-content/themes/r9/images/facebook_icon.png"></a>
          <a href="https://www.wantedly.com/companies/company_9760412"><img src="/wp-content/themes/r9/images/Wantedly_icon.png" class="wantedly_icon"></a>
          <a href="https://twitter.com/ryonagai"><img src="/wp-content/themes/r9/images/twitter_icon.png"></a>
        </div>
      </div>
    </div>
  </nav>
</header>