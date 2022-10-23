<?php get_header(); ?>
<div class="container">
    <?php get_template_part('include/common', 'breadcrumb'); //　Breadcrumb NavXTを使わないときは削除
    ?>
    <div class="has_sidebar" id="news_page">
        <main>
            <div id="eyecatch">
                <h1>投稿一覧</h1>
            </div>
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
            <div class="products row row-cols-1 row-cols-md-3 g-4">
                <?php if (have_posts()) : ?>
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
                <?php else : // サムネイルを持っていない
                ?><p>検索条件に一致する項目はありません</p>
                <?php endif; ?>
            </div>
            <div class="pagination"><?php wp_pagination(); //ページネーション
                                    ?></div>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>