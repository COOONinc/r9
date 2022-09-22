<?php
	$ancestors=get_post_ancestors($post->ID);
	$root=count($ancestors)-1;
	$parent = $ancestors[$root];
	$root_slug = $post->post_parent ? get_post($parent)->post_name : '';
	$parent_slug = $post->post_parent ? get_post($post->post_parent)->post_name : '';
	$current_slug = $post->post_parent ? $post->post_name : $post->post_name.'_top';
?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-KK2WPSR');
  </script>
  <!-- End Google Tag Manager -->
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="UTF-8">
  <meta name="" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="noindex">
  <link rel="icon" href="/wp-content/uploads/r9-favicon.png" sizes="32x32">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/64478b38b0.js" crossorigin="anonymous"></script>
  <script>
  (function(d) {
    var config = {
        kitId: 'uwa3mph',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
  </script>
  <? wp_head(); ?>
</head>

<body class="<?php echo  $root_slug; ?> <?php echo $parent_slug; ?> <?php  echo $current_slug; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK2WPSR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php
if (
	$root_slug == 'new_grad'
	|| $current_slug == 'new_grad_top'
) {
	get_template_part('template/header/new_grad');	
} else if (
	$root_slug == 'mid_career'
	|| $current_slug == 'mid_career_top'
) {
	get_template_part('template/header/mid_career');	
} else {
	get_template_part('template/header/top');	
}
?>

  <?php
$top_title_type = get_field('top_titlle_type');

if ($top_title_type) {
	if (
		$top_title_type == 'simple_new_grad'
		|| $top_title_type == 'strong_new_grad'
		|| $top_title_type == 'simple_mid_career'
		|| $top_title_type == 'strong_mid_career'
		|| $top_title_type == 'interview'
		|| $top_title_type == 'column'
	) {
		$args = get_fields();
		get_template_part('template/top_title/'.$top_title_type, null, $args);	
		if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs();
	}
}
		
if (
	$parent_slug == 'entry'
	|| $current_slug == 'entry'
) {
	echo '
	<div class="form_step_wrapper">
	  <span id="form_step1" class="form_step"></span>
	  <span id="form_step2" class="form_step"></span>
	  <span id="form_step3" class="form_step"></span>
	</div>';
}