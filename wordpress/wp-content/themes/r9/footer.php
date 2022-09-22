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
		<?php wp_footer(); ?>

    </body>
</html>