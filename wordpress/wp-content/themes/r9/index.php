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
<div class="aioseo-breadcrumbs artcle-width"><span class="aioseo-breadcrumb">
    <a href="https://r9.emposy-server.com" title="採用サイトTOP">採用サイトTOP</a>
  </span><span class="aioseo-breadcrumb-separator">&gt;</span><span class="aioseo-breadcrumb">
    <a href="https://r9.emposy-server.com/column/" title="採用コラム">採用コラム</a>
  </span></div>
<div id="article_list_wrapper" class=" r_main_out">

  <main class="">
    <p class="article-count"><?php
$count_posts = wp_count_posts();
$num = $count_posts->publish;
echo '全'.$num.'件中'.$num.'件表示';
			?></p>
    <div class="article_list">
      <?php
			if(have_posts()) :
			  while (have_posts()) :
				the_post();
			?>
      <article class="article" onclick="location.href='<? the_permalink(); ?>';">
        <div class="img_wrapper">
          <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
          <img src="https://〇〇❍❍.com/wp-content/uploads/noimage.png" alt="" class="img-fluid">
          <?php endif; ?>
        </div>
        <div class="description">
          <div class="meta_wrapper">
            <?php 
							$category = get_the_category(); 
							if ( $category[0] ) {
								echo '<a href="' . get_category_link( $category[0]->term_id ) . '" class="category">' . $category[0]->cat_name . '</a>';
							}
						?>
            <span class="date"><?php echo get_the_date(); ?></span>
          </div>
          <div class="tag_wrapper">
            <?php the_tags( '<span class="sharp_label"><span>', '</span></span><span class="sharp_label"><span>', '</span></span>' ); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
        </div>
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
    <?php the_posts_pagination(
			array(
				'mid_size'      => 1,
				'prev_next'     => true,
				'prev_text'     => __( '<img src="/wp-content/themes/r9/images/arrow_left_black.svg" />'),
				'next_text'     => __( '<img src="/wp-content/themes/r9/images/arrow_right_black.svg" />'),
				'type'          => 'list',
			)
		); ?>
  </main>
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>
<div class="related_posts_wrapper">
  <div class="w_main">
    <div class="related_list">
      <h3>関連コンテンツ</h3>
      <?php yarpp_related();?>
    </div>
    <div class="recent_list">
      <h3>最新コンテンツ</h3>
      <?php yarpp_related(array('recent' => '1 month'));?>
    </div>
  </div>
</div>
<?php get_footer(); ?>