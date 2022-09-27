<?php
function project_story_list($atts) {
	$type = $atts['type'];
    $html = '<div class="w_main" id="project_story">
		<div class="project_story_box_wrapper">
			<div class="heading-wrapper mb_6"><h3>プロジェクトストーリー</h3></div>
			<div class="simple_project_story_box">
				<div class="project_story_item story_01">
					<a href="/'.$type.'/our_job/project_story/agent_control_project/">
						<img src="/wp-content/uploads/GR_2618.jpg" />
						<h4>
							<span>エージェントコントロールプロジェクト</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
				<div class="project_story_item story_02">
					<a href="/'.$type.'/our_job/project_story/adoption_consulting_project/">
						<img src="/wp-content/uploads/マスクグループ-217.jpg" />
						<h4>
							<span>採用コンサルティングプロジェクト</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
				<div class="project_story_item story_03">
					<a href="/'.$type.'/our_job/project_story/training_and_development/">
						<img src="/wp-content/uploads/マスクグループ-218.jpg" />
						<h4>
							<span>教育研修</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
				<div class="project_story_item story_04">
					<a href="/'.$type.'/our_job/project_story/setting_up_a_scout_team/">
						<img src="/wp-content/uploads/AdobeStock_332953213.jpg" />
						<h4>
							<span>スカウトチームの立ち上げ</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
				<div class="project_story_item story_05">
					<a href="/'.$type.'/our_job/project_story/what_pr_can_do/">
						<img src="/wp-content/uploads/マスクグループ-262.jpg" />
						<h4>
							<span>広報としての志</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
				<div class="project_story_item story_06">
					<a href="/'.$type.'/our_job/project_story/about_hiring_new_graduates/">
						<img src="/wp-content/uploads/自社の新卒採用について.jpg" />
						<h4>
							<span>自社の新卒採用について</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
				<div class="project_story_item story_07">
					<a href="/'.$type.'/our_job/project_story/about_onboarding/">
						<img src="/wp-content/uploads/オンボーディングについて.jpg" />
						<h4>
							<span>オンボーディングについて</span>
							<img src="/wp-content/themes/r9/images/arrow_right.svg" class="new_grad_item" />
							<img src="/wp-content/themes/r9/images/arrow_right_white.svg" class="mid_career_item" />
						</h4>
					</a>
				</div>
			</div>
		</div>
	</div>';
    return $html;
}
add_shortcode('project_story_list', 'project_story_list');

function links_of_company_job($atts) {
	$type = $atts['type'];
    $html = '<div class="bg_gray links_of_company_job_box_wrapper">
		<div class="w_main">
			<div class="links_of_company_job_box">
				<a href="/'.$type.'/about_us/" style="background-image: url(\'/wp-content/uploads/aboutus@2x.jpg\')">
					<div>
						<div>
							<span>About us</span>
							<h4>会社を知る</h4>
						</div>
						<img src="/wp-content/themes/r9/images/sharp_right_arrow.svg" />
					</div>
				</a>
				<a href="/'.$type.'/our_job/" style="background-image: url(\'/wp-content/uploads/ourjob@2x.jpg\')">
					<div>
						<div>
							<span>Our job</span>
							<h4>仕事を知る</h4>
						</div>
						<img src="/wp-content/themes/r9/images/sharp_right_arrow.svg" />
					</div>
				</a>
			</dvi>
		</div>
	</div>';
    return $html;
}
add_shortcode('links_of_company_job', 'links_of_company_job');

function links_of_our_job($atts) {
	$type = $atts['type'];
    $html = '<div class="bg_gray links_of_company_job_box_wrapper">
		<div class="w_main">
			<div class="links_of_company_job_box">
				<a href="/'.$type.'/about_us/" style="background-image: url(\'/wp-content/uploads/aboutus@2x.jpg\')">
					<div>
						<div>
							<span>About us</span>
							<h4>会社を知る</h4>
						</div>
						<img src="/wp-content/themes/r9/images/sharp_right_arrow.svg" />
					</div>
				</a>
				<a href="/'.$type.'/people/" style="background-image: url(\'/wp-content/uploads/people@2x.jpg\')">
					<div>
						<div>
							<span>People</span>
							<h4>仲間を知る</h4>
						</div>
						<img src="/wp-content/themes/r9/images/sharp_right_arrow.svg" />
					</div>
				</a>
			</dvi>
		</div>
	</div>';
    return $html;
}
add_shortcode('links_of_our_job', 'links_of_our_job');

function links_of_aboutus_job($atts) {
	$type = $atts['type'];
    $html = '<div class="bg_gray links_of_company_job_box_wrapper">
		<div class="w_main">
			<div class="links_of_company_job_box">
				<a href="/'.$type.'/our_job/" style="background-image: url(\'/wp-content/uploads/ourjob@2x.jpg\')">
					<div>
						<div>
							<span>Our job</span>
							<h4>仕事を知る</h4>
						</div>
						<img src="/wp-content/themes/r9/images/sharp_right_arrow.svg" />
					</div>
				</a>
				<a href="/'.$type.'/people/" style="background-image: url(\'/wp-content/uploads/people@2x.jpg\')">
					<div>
						<div>
							<span>People</span>
							<h4>仲間を知る</h4>
						</div>
						<img src="/wp-content/themes/r9/images/sharp_right_arrow.svg" />
					</div>
				</a>
			</div>
		</div>
	</div>';
    return $html;
}
add_shortcode('links_of_aboutus_job', 'links_of_aboutus_job');

function other_work_style($atts){
	$id = $atts['id'];
	$list = [
		'mika_yanagida' => [
			'join' => '2021年　入社',
			'department' => 'カスタマーサクセス部',
			'name' => '柳田　実花',
			'href' => '/new_grad/people/employees_day/mika_yanagida/',
			'src' => '/wp-content/uploads/マスクグループ-69.jpg'
		],
		'ken_fukumori' => [
			'join' => '2021年　入社',
			'department' => 'システム事業部',
			'name' => '福森　賢',
			'href' => '/new_grad/people/employees_day/ken_fukumori/',
			'src' => '/wp-content/uploads/work_style2.png'
		],
		'miku_kozuka' => [
			'join' => '2022年　入社',
			'department' => 'フィールドセールス部',
			'name' => '小塚　未来',
			'href' => '/new_grad/people/employees_day/miku_kozuka/',
			'src' => '/wp-content/uploads/マスクグループ-241.jpg'
		],
		'ryoga_yamashita' => [
			'join' => '2018年　入社',
			'department' => 'マーケット開発部',
			'name' => '山下　涼雅',
			'href' => '/new_grad/people/employees_day/ryoga_yamashita/',
			'src' => '/wp-content/uploads/マスクグループ-242.jpg'
		],
		
	];
	$html_content = '';
	foreach ($list as $key => $member){
		if ($id == $key) {
			continue;
		}
		$html_content = $html_content.'<a href="'.$member['href'].'">
            <div class="img_wrapper">
                <img src="'.$member['src'].'" />
            </div>
            <div class="description_wrapper">
                <span class="sharp_label"><span>'.$member['join'].'</span></span>
                <div>
                    <div>
                        <span>'.$member['department'].'</span>
                        <div>
                            <h3>'.$member['name'].'<h3><img src="/wp-content/themes/r9/images/arrow_right.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </a>';
	}

	$html =  '
	<div class="other_work_style">
		<div class="heading_wrapper"><h2 class="simple_heading">他の先輩の 1 日を見る</h2></div>
		<div class="other_work_style_list w_main_out">
			'.$html_content.'
		</div>
	</div>';
	
	return $html;

}

add_shortcode('other_work_style','other_work_style');