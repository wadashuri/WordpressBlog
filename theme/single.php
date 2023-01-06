<?php get_header(); ?>
<?php get_template_part('include/common', 'breadcrumb'); //　Breadcrumb NavXTを使わないときは削除
?>
<main class="container">
    <div class="row">
        <div class="col-lg-10">
            <div>
                <p><?php the_time('Y.n.d'); ?>更新</p>
            </div>
            <?php $url = $_SERVER['REQUEST_URI']; ?>
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
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>