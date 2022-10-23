<?php get_header(); ?>
<?php get_template_part('include/common', 'breadcrumb'); //　Breadcrumb NavXTを使わないときは削除
?>
<main class="container">
    <div>
        <p><?php the_time('Y.n.d'); ?>更新</p>
    </div>
    <?php
    $url = $_SERVER['REQUEST_URI'];
    // strstr(検索対象,検索する文字列)
    if (strstr($url, 'item')) : ?>
        <div class="products row row-cols-1 row-cols-md-3 g-4">
            <div class="card" style="width: 15rem; padding: 15px; margin:10px">
                <?php the_post_thumbnail('full'); ?>
                <div class="card-body">
                    <p class="card-title"><?php the_field('item_name'); ?></p>
                    <p class="card-text"><?php the_field('price'); ?>円</p>
                    <button type="button" class="btn btn-outline-primary">カートに追加する</button>
                </div>
            </div>
        </div>
        <a href="/service">ホームへ戻る</a>
    <?php else : ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card">
                    <div class="card-header">
                        <?php the_title(); ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
                <h2>他の投稿</h2>
                <p> <?php if (get_next_post()) : ?>
                        <?php next_post_link('%link', '%title', false); ?><br>
                    <?php endif; ?>
                    <a href="/service">ホームへ戻る</a><br>
                    <?php if (get_previous_post()) : ?>
                        <?php previous_post_link('%link', '%title', false); ?>
                    <?php endif; ?>
                </p>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>