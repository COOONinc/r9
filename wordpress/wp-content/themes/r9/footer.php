<?php
	$ancestors=get_post_ancestors($post->ID);
	$root=count($ancestors)-1;
	$parent = $ancestors[$root];
	$root_slug = $post->post_parent ? get_post($parent)->post_name : '';
	$parent_slug = $post->post_parent ? get_post($post->post_parent)->post_name : '';
	$current_slug = $post->post_parent ? $post->post_name : $post->post_name.'_top';
if (
	$root_slug == 'new_grad'
	|| $current_slug == 'new_grad_top'
) {
	get_template_part('template/footer/new_grad');
} else if (
	$root_slug == 'mid_career'
	|| $current_slug == 'mid_career_top'
) {
	get_template_part('template/footer/mid_career');
} else {
	get_template_part('template/footer/top');
}
?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
	const swiper = new Swiper(".swiper", {
		loop: true,
		autoplay: {
			delay: 3000,
			disableOnInteraction: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>

<script>
	jQuery(function ($) {
    if (jQuery('#mw_wp_form_mw-wp-form-1273').hasClass('mw_wp_form mw_wp_form_confirm mw_wp_form_preview')) {
      jQuery('#form_step1').addClass('step-disable');
      jQuery('#form_step2').addClass('step-active');
      jQuery('#form_step3').addClass('step-disable');
    } else if(jQuery('#mw_wp_form_mw-wp-form-1273').hasClass('mw_wp_form mw_wp_form_complete')) {
      jQuery('#form_step1').addClass('step-disable');
      jQuery('#form_step2').addClass('step-disable');
      jQuery('#form_step3').addClass('step-active');
    }
})

jQuery(function ($) {
    if (jQuery('#mw_wp_form_mw-wp-form-1271').hasClass('mw_wp_form mw_wp_form_confirm mw_wp_form_preview')) {
      jQuery('#form_step1').addClass('step-disable');
      jQuery('#form_step2').addClass('step-active');
      jQuery('#form_step3').addClass('step-disable');
    } else if(jQuery('#mw_wp_form_mw-wp-form-1271').hasClass('mw_wp_form mw_wp_form_complete')) {
      jQuery('#form_step1').addClass('step-disable');
      jQuery('#form_step2').addClass('step-disable');
      jQuery('#form_step3').addClass('step-active');
    }
})
</script>

		<?php wp_footer(); ?>

    </body>
</html>
