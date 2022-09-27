<?php get_header(); ?>
<main>
  <div class="pc">
    <div class="top_page_area">
      <div class="top_page bg-slash">
        <div class="top_title w_main_out">
          <p>自身のキャリアに、スタートダッシュを。</p>
          <h1><img src="<?php echo get_template_directory_uri(); ?>/images/fv_text.svg" /></h1>
          <div class="new_grad_toptext fade-in">
            <img src="<?php echo get_template_directory_uri(); ?>/images/newtop_text.png">
          </div>
        </div>
        <div class="swiper new_grad_swiper">
          <div class="swiper-wrapper new_grad_swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo home_url(); ?>/wp-content/uploads/slideitem1.jpg">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo home_url(); ?>/wp-content/uploads/slideitem2.jpg">
            </div>
          </div>
        </div>
        <div class="scroll_text">
          <p>scroll</p>
        </div>
      </div>

      <div class="toppage_bottom">
        <div class="topbottom_left">
          <p>株式会社アールナイン新卒採用サイト</p>
          <h2>RECRUIT<span>2024</span></h2>
        </div>
        <div class="topbottom_right">
          <div class="top_colum_padding">
            <div class="top_columbox">
              <p>最新投稿</p>
            </div>
            <div class="top_colum_textbox">
              <?php echo do_shortcode('[short_news cat="" num="1"]'); ?>
            </div>
          </div>
          <div class="top_colum_choicebox">
            <div class="top_colum_all">
              <a href="<?php echo home_url(); ?>/column/">
                <p>NEWS ALL</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sp">
    <div class="top_page_area">
      <div class="top_page">
        <div class="top_title w_main_out">
          <p>変化をおそれず、開花せよ。</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/new_top_title.svg">
          <div class="new_grad_toptext">
            <img src="<?php echo get_template_directory_uri(); ?>/images/newtop_text.png">
          </div>
        </div>
        <div class="swiper new_grad_swiper">
          <div class="swiper-wrapper new_grad_swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo home_url(); ?>/wp-content/uploads/image8.jpg">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo home_url(); ?>/wp-content/uploads/image7.jpg">
            </div>
          </div>
        </div>
        <div class="scroll_text">
          <p>scroll</p>
        </div>
      </div>
      <div class="toppage_bottom">
        <div class="topbottom_left">
          <p>株式会社アールナイン新卒採用サイト</p>
          <h2>RECRUIT<span>2024</span></h2>
        </div>
        <div class="topbottom_right">
          <div class="top_colum_padding">
            <div class="top_columbox">
              <p>最新投稿</p>
            </div>
            <div class="top_colum_textbox">
              <?php echo do_shortcode('[short_news cat="" num="1"]'); ?>
            </div>
          </div>
          <div class="top_colum_choicebox">
            <div class="top_colum_all">
              <a href="<?php echo home_url(); ?>/column/">
                <p>NEWS ALL</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="entry_button">
    <a href="<?php echo home_url(); ?>/new_grad/entry/">
      <p>エントリーはこちら</p>
      <img src="<?php echo get_template_directory_uri(); ?>/images/entry_yajirushi.png" class="hover-change">
      <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_icon_white.svg" class="hover-change-hide">

    </a>
  </div>
  <div id="top_area"></div>
  <div class="social_cont">
    <div class="social_cont_textbox">
      <img src="<?php echo get_template_directory_uri(); ?>/images/message.svg" class="fade-left">
      <div class="pl_main fade-in">
        <h3><span>人材領域で</span>、社会に貢献する</h3>
        <p>
          一人ひとりが活き生きと働ける世界。それを実現するために、アールナインは企業が抱える人材の悩みに寄り添い、課題解決に向けた質の高いサービスを提供しています。<br><br>私たちの理念に共感し、ともに伴走してくれる仲間をお待ちしています。
        </p>
      </div>
    </div>
    <div class="social_cont_pic fade-in">
      <img src="<?php echo home_url(); ?>/wp-content/uploads/p5_2　Message.jpg">

    </div>
  </div>

  <div class="about_us" id="about_us">
    <div class="about_us_pic fade-in">
      <img src="<?php echo home_url(); ?>/wp-content/uploads/p15_14-会社を知る-2.jpg">

    </div>
    <div class="about_us_right">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about_us.png" class="about_us_textpic fade-right">
      <div class="about_us_textbox pr_main fade-in">
        <h2>会社を知る</h2>
        <p class="sp_text_center">「アールナインの代表ってどんな人？」「どんな未来像を描いている会社なの？」「他社との違いや強みって何？」など、アールナインについて詳しく知りたい方はコチラ！</p>
        <div class="about_us_table">
          <div class="about_us_line">
            <a href="<?php echo home_url(); ?>/new_grad/about_us/#ceo_message">
              <p>代表メッセージ</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/maruyajirushi_midori.svg">
            </a>
          </div>
          <div class="about_us_line">
            <a href="<?php echo home_url(); ?>/new_grad/about_us/#mission_vision_value">
              <p>ミッション・ビジョン・バリュー</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/maruyajirushi_midori.svg">
            </a>
          </div>
          <div class="about_us_line">
            <a href="<?php echo home_url(); ?>/new_grad/about_us/#R09_data_area">
              <p>数字で見るアールナイン</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/maruyajirushi_midori.svg">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="our_job" id="our_job">
    <h2 class="fade-in">Our job</h2>
    <h3 class="fade-in">仕事を知る</h3>
    <p class="fade-in">「アールナインではどんな先輩たちが活躍しているの？」「アールナインではどんな仕事ができるの？」など、<br>
      アールナインで働く仲間たちや具体的なプロジェクト内容を知りたいという方はコチラ！</p>
    <div class="our_job_figurebox">
      <div class="our_job_figure our_business fade-left">
        <h3>OUR<br>BUSINESS</h3>
        <p>事業部紹介</p>
        <a href="<?php echo home_url(); ?>/new_grad/our_job/#business_introduction">
          <p>Read more</p>
        </a>
      </div>
      <div class="our_job_figure chart fade-left">
        <h3>BUSINESS<br>MODEL</h3>
        <p>ビジネスモデル</p>
        <a href="<?php echo home_url(); ?>/new_grad/our_job/#win-win-model">
          <p>Read more</p>
        </a>
      </div>
      <div class="our_job_figure story fade-right">
        <div class="our_job_figure_left">
          <h3>PROJECT<br>STORY</h3>
          <p>プロジェクトストーリー</p>
        </div>
        <div class="our_job_figure_right">
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/agent_control_project/">
            <p>エージェントコントロールプロジェクト</p>
          </a>
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/adoption_consulting_project/">
            <p>採用コンサルティングプロジェクト</p>
          </a>
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/training_and_development/">
            <p>教育研修</p>
          </a>
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/setting_up_a_scout_team/">
            <p>スカウトチームの立ち上げ</p>
          </a>
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/what_pr_can_do/">
            <p>広報としての志</p>
          </a>
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/about_hiring_new_graduates/">
            <p>自社の新卒採用について</p>
          </a>
          <a href="<?php echo home_url(); ?>/new_grad/our_job/project_story/about_onboarding/">
            <p>オンボーディングについて</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="people_area" id="people">
    <div class="people_text">
      <p>RECRUIT<br>2024</p>
    </div>
    <div class="people_part">
      <img src="/wp-content/uploads/test.png" class="people_part-img pc">
      <div class="corner_triangle people_part_front">
        <h2>People</h2>
        <h3>仲間を知る</h3>
        <div class="people_boxes w_main_out">
          <div class="people_box fade-left">
            <div class="people_box_pic">
              <div class="people_box_top">
                <p>2020年 新卒入社</p>
              </div>
              <img src="<?php echo home_url(); ?>/wp-content/uploads/people1.png">
            </div>
            <div class="people_box_text">
              <a href="<?php echo home_url(); ?>/new_grad/people/interview/kazuya_ohashi/">
                <p class="busyo">採用育成部　パートナーサポート部</p>
                <div class="people_box_text_bottom">
                  <p class="name">大橋　和弥</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                </div>
              </a>
            </div>
          </div>
          <div class="people_box fade-up">
            <div class="people_box_pic">
              <div class="people_box_top">
                <p>2022年 新卒入社</p>
              </div>
              <img src="<?php echo home_url(); ?>/wp-content/uploads/people2.png">
            </div>
            <div class="people_box_text">
              <a href="<?php echo home_url(); ?>/new_grad/people/interview/suzuka_oda/">
                <p class="busyo">マーケット開発部　オーガナイザーチーム</p>
                <div class="people_box_text_bottom">
                  <p class="name">小田　鈴夏</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                </div>
              </a>
            </div>
          </div>
          <div class="people_box fade-right">
            <div class="people_box_pic">
              <div class="people_box_top">
                <p>2022年 新卒入社</p>
              </div>
              <img src="<?php echo home_url(); ?>/wp-content/uploads/people3.png">
            </div>
            <div class="people_box_text">
              <a href="<?php echo home_url(); ?>/new_grad/people/interview/airi_nohara/">
                <p class="busyo">マーケット開発部　プロジェクトマネージャー</p>
                <div class="people_box_text_bottom">
                  <p class="name">野原　愛莉</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="work_style">
    <div class="work_style_title fade-left">
      <h2>Work style</h2>
    </div>
    <div class="w_main_out">
      <div class="work_style_toptext">
        <h3>社員の1日</h3>
        <p class="sp_text_center">フレックスタイム制やテレワークなども活用しながら、各々が自らのミッション達成に向けて“活き生き”と働いているアールナイン。<br class="sp">コチラでは、アールナインの社員たちが普段どのような一日を過ごしているのか、具体的なスケジュールと共にわかりやすくご紹介します！</p>
      </div>
      <div class="work_style_figure">
        <div class="work_style_figure_boxes">
          <div class="work_style_figure_box work_style_figure_left fade-up">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/work_style1.png" class="work_style_pic">
            <div class="work_style_figure_textbox">
              <div class="work_style_box_text_bk">
                <p>2018年　入社</p>
              </div>
              <div class="work_style_box_text">
                <a href="<?php echo home_url(); ?>/new_grad/people/employees_day/ryoga_yamashita/">
                  <p class="busyo">マーケット開発部 ゼネラルマネージャー</p>
                  <div class="work_style_box_text_bottom">
                    <p class="name">山下　涼雅</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="work_style_figure_box work_style_figure_right fade-up">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/work_style2.png" class="work_style_pic">
            <div class="work_style_figure_textbox">
              <div class="work_style_box_text_bk">
                <p>2021年　新卒入社</p>
              </div>
              <div class="work_style_box_text">
                <a href="<?php echo home_url(); ?>/new_grad/people/employees_day/ken_fukumori/">
                  <p class="busyo">システム事業部</p>
                  <div class="work_style_box_text_bottom">
                    <p class="name">福森　賢</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="work_style_figure_boxes">
          <div class="work_style_figure_box work_style_figure_left fade-up">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/work_style4.png" class="work_style_pic">
            <div class="work_style_figure_textbox">
              <div class="work_style_box_text_bk">
                <p>2021年　中途入社</p>
              </div>
              <div class="work_style_box_text">
                <a href="<?php echo home_url(); ?>/new_grad/people/employees_day/mika_yanagida/">
                  <p class="busyo">事業推進部 カスタマーサクセス</p>
                  <div class="work_style_box_text_bottom">
                    <p class="name">柳田　実花</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="work_style_figure_box work_style_figure_right fade-up">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/work_style3.png" class="work_style_pic">
            <div class="work_style_figure_textbox">
              <div class="work_style_box_text_bk">
                <p>2022年　新卒入社</p>
              </div>
              <div class="work_style_box_text">
                <a href="<?php echo home_url(); ?>/new_grad/people/employees_day/miku_kozuka/">
                  <p class="busyo">事業推進部 フィールドセールス</p>
                  <div class="work_style_box_text_bottom">
                    <p class="name">小塚　未来</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_midori.svg">
                  </div>
                </a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="require_area" id="require">
    <div class="require_left fade-left">
      <img src="<?php echo home_url(); ?>/wp-content/uploads/Requirements.png">
    </div>
    <div class="require_right">
      <div class="require_title">
        <h2 class="fade-right">Requirements</h2>
      </div>
      <div class="require_textbox w_main_out fade-in">
        <h3>募集要項</h3>
        <p>具体的な「募集職種」「応募資格」「選考の流れ」などを知りたい方はコチラからどうぞ！<br>
          会社の成長と自身の成長を楽しみながら、ワクワクできる未来を一緒に創っていく──。<br>
          そんな新しい仲間と出会えることを、一同楽しみにしています。</p>
        <div class="require_more">
          <a href="<?php echo home_url(); ?>/new_grad/requirements/">
            <p>Read More</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/maruyajirushi_midori.svg">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="column_area" id="column">
    <div class="column_title fade-left">
      <h2>Column</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/column_title.png">
    </div>
    <div class="w_main_out common_part">
      <div class="column_subtitle fade-in">
        <h3>採用コラム</h3>
        <div class="column_all pc">
          <a href="/column/">
            <p>VIEW ALL</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/yajirushi_icon_green.svg">
          </a>
        </div>
      </div>
      <?php echo do_shortcode('[news cat="" num="3"]'); ?>
    </div>
  </div>

</main>
<?php get_footer(); ?>