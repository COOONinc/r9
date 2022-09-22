<header id="header">
  <div class="header_content">
    <a href="/">
      <svg class="logo pc">
        <use xlink:href="/wp-content/themes/r9/images/R9logo.svg#logo"></use>
      </svg>
      <img class="sp_logo sp" src="/wp-content/themes/r9/images/logo_mid_career.svg" />
    </a>
    <div class="header_menubox pc">
      <?php wp_nav_menu(
				array(
					'theme_location' => 'mid_career_header',
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
      <div class="header_menu header_boxmenu header_boxmenu_left">
        <a href="/mid_career/entry">
          <p>ENTRY</p>
          <img src="/wp-content/themes/r9/images/yajirushi_midori.svg" alt="→">
        </a>
      </div>
      <div class="sp_menu_icon sp">
        <span></span>
        <span></span>
        <span><span>M</span><span>E</span><span>N</span><span>U</span></span>
      </div>
    </div>
    <div class="header_menubox sp">
      <div class="header_menu header_boxmenu header_boxmenu_left right_menu_icon">
        <a href="/mid_career/entry">
          <p>ENTRY</p>
        </a>
      </div>
      <div class="sp_menu_icon">
        <span></span>
        <span></span>
        <span><span>M</span><span>E</span><span>N</span><span>U</span></span>
      </div>
    </div>
  </div>
  <nav class="sp_menu slide-_n">
    <div class="sp_menu_box">
      <div class="sp_menu_header">
        <a href="/mid_career">
          <img class="sp_logo" src="/wp-content/themes/r9/images/logo_mid_career.svg" />
        </a>
      </div>
      <div class="menu_sp_menu_container w_main">
        <div class="mid-career-button">
          <div class="qa_white_box_left">
            <a href="/mid_career/entry">
              <p>中途ENTRY</p>
            </a>
          </div>
          <div class="qa_blue_box_right">
            <a href="/mid_career/entry">
              <img src="/wp-content/themes/r9/images/sp-mid-career-button-arrow.svg">
            </a>
          </div>
        </div>

        <div class="menu_wrapper">
          <ul>
            <li><a href="/mid_career/requirements/"><span>Requirement</span><span>募集要項</span></a></li>
            <li><a href="/mid_career/about_us/"><span>About us</span><span>会社を知る</span></a></li>
            <li>
              <a href="/mid_career/our_job/">
                <span>Our job</span><span>仕事を知る</span>
                <ul>
                  <li><a href="/mid_career/our_job/#project_story"><span>PROJECT STORY</span><span>プロジェクトストーリー</span></a></li>
                </ul>
              </a>
            </li>
            <li><a href="/column/"><span>Column</span><span>コラム</span></a></li>

          </ul>
        </div>
        <div class="footer_sns_icon mt-0-sp">
          <a href="https://www.facebook.com/r09.jp/"><img src="/wp-content/themes/r9/images/facebook_icon.png"></a>
          <a href="https://www.wantedly.com/companies/company_9760412"><img src="/wp-content/themes/r9/images/Wantedly_icon.png" class="wantedly_icon"></a>
          <a href="https://twitter.com/ryonagai"><img src="/wp-content/themes/r9/images/twitter_icon.png"></a>
        </div>
        <div class="sub_menu_wrapper">
          <ul>
            <li><a href="/mid_career/faq/" class="white">よくある質問</a></li>
            <li><a href="https://r09.jp/contact/" class="white">お問い合わせ</a></li>
            <li>
              <a href="https://r09.jp/" target="_blank" class="white">
                コーポレートサイトはこちら
                <svg class="gaibulink" alt="外部リンク">
                  <use xlink:href="/wp-content/themes/r9/images/gaibulink.svg#gaibulink"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div style="margin:10px 0; text-align:center;">
          <p style="color: #FFFFFF; line-height: 1.5;">Copyright ©株式会社アールナイン All right reserved.</p>
        </div>
      </div>
    </div>
  </nav>
</header>