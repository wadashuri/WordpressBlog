<?php get_header(); ?>
<main class="container">
	<div id="top_mv">
	<?php echo do_shortcode('[metaslider id="166"]'); ?>
	</div>
	<div class="top_about">
		<!-- 検索結果表示 -->
		<div>
			<h2>商品一覧</h2>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					並べ替え
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="<?php echo esc_url(add_query_arg(array('meta_key' => 'price', 'orderby' => 'meta_value_num', 'order' => 'DESC'),)); ?>">価格高い順</a>
					<a class="dropdown-item" href="<?php echo esc_url(add_query_arg(array('meta_key' => 'price', 'orderby' => 'meta_value_num', 'order' => 'ASC'))); ?>">価格安い順</a>
					<a class="dropdown-item" href="<?php echo add_query_arg(array('order' => 'DESC')); ?>">新着商品順</a>
				</div>
			</div>
			<?php if (have_posts()) : ?>
				<?php
				if (isset($_GET['s']) && empty($_GET['s'])) {
					echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
				} else {
					echo '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件'; // 検索キーワードと該当件数を表示
				}
				?>
				<div class="products row row-cols-1 row-cols-md-3 g-4">
					<?php while (have_posts()) : the_post(); ?>
						<div class="card" style="width: 15rem; padding: 15px;">
							<?php the_post_thumbnail('full'); ?>
							<div class="card-body">
								<p class="card-title"><?php the_field('item_name'); ?></p>
								<p class="card-text"><?php the_field('price'); ?>円</p>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">詳細ページへ</a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					検索されたキーワードにマッチする記事はありませんでした
				<?php endif; ?>
				</div>
		</div>
</main>
<?php get_footer(); ?>