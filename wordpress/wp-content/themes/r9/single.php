<?php get_header(); ?>
<div class="top_column_title">
  <div>
    <h2>
      Column
    </h2>
    <span>採用コラム</span>
  </div>
</div>
<div id="top_area"></div>
<div id="article_list_wrapper">
  <main class="">
    <div class="article_single">
      <?php
			if(have_posts()) :
			  while (have_posts()) :
				the_post();
			?>
      <article class="article">
        <div class="meta_wrapper">
          <?php 
						$category = get_the_category(); 
						if ( $category[0] ) {
							echo '<a href="' . get_category_link( $category[0]->term_id ) . '" class="category">' . $category[0]->cat_name . '</a>';
						}
					?>
        </div>
        <div class="tag_wrapper">
          <span class="sharp_label"><span>タグ</span></span>
          <span class="sharp_label"><span>タグ</span></span>
        </div>
        <div class="heading_wrapper">
          <h1><?php the_title(); ?></h1>
          <span class="date"><?php echo get_the_date(); ?></span>
        </div>
        <div class="img_wrapper">
          <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
          <img src="https://〇〇❍❍.com/wp-content/uploads/noimage.png" alt="" class="img-fluid">
          <?php endif; ?>
        </div>
        <div><?php the_content(); ?></div>
      </article>

      <?php
			  endwhile;
			else:
			?>
      <p>記事がまだありません</p>
      <?php
			endif;
			?>
    </div>
  </main>
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>
<div class="prev_next_link_wrapper w_main">
  <span><?php previous_post_link( '%link', '<img src="/wp-content/themes/r9/images/arrow_left_black.svg" /> %title' ); ?></span>
  <span><?php next_post_link( '%link', '%title <img src="/wp-content/themes/r9/images/arrow_right_black.svg" />' ); ?></span>
</div>
<?php
 	$category = get_the_category();
 	$cat = $category[0];
	if (
		$cat->slug == 'new_grad'
	   || $cat->slug == 'mid_career'
	) {
		echo '
		<div class="article_entry_button_wrapper">
			<div class="accent_button">
				<a href="/'.$cat->slug.'/entry">
					  <p>エントリーはこちら</p>
					   
					   <img src="/wp-content/themes/r9/images/entry_yajirushi.png" class="hover-change">
					   <img src="/wp-content/themes/r9/images/yajirushi_icon_white.svg" class="hover-change-hide">
				</a>
			</div>
		</div>
		';
	}
?>
<div class="related_posts_wrapper">
  <div class="w_main">
    <div class="related_list">
      <h3>関連記事</h3>
      <?php yarpp_related();?>
    </div>
    <div class="recent_list">
      <h3>最新コンテンツ</h3>
      <?php yarpp_related(array('recent' => '1 month'));?>
    </div>
  </div>
</div>
<?php get_footer(); ?>