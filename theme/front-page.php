<?php get_header(); ?>
<main class="container">
    <div id="top_mv">
        <?php echo do_shortcode('[metaslider id="166"]'); ?>
    </div>
    <div class="front_item">
        <div>
            <?php
            $args = array(
                'post_type' => 'service',  //カスタム投稿タイプ名
                'posts_per_page' => 3, // 表示件数
            );
            ?>
        </div>
        <div class="products row row-cols-1 row-cols-md-3 g-4">
            <?php $myposts = new WP_Query($args);
            if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post();
            ?>
                    <div class="card" style="width: 15rem; padding: 15px;">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="card-body">
                            <p class="card-text"><?php the_title(); ?></p>
                            <p class="card-title"><?php the_content(); ?></p>
                            <a href="/service/onlibraryの使い方/" class="btn btn-primary">もっとみる</a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <h5>OnLibraryについて</h5>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h5>OnLibraryとは</h5>
            </div>
            <div class="card-text">
                <p>
                    一言でいうならばOnline上のLibraryです。<br><br>
                    本の内容を、漫画やスライドで分かりやすく要約し動画にした「本要約動画」を皆さんも一度は見たことがあると思います。<br>
                    このような動画をYouTubeにあげる人たちを海外では「BookTuber」と呼ぶそうです。<br><br>
                    このwebアプリは「BookTuber」の方が作った「本要約動画」をOnline上で簡単に管理することができるサービスです。
                </p>
            </div>
        </div>
    </div>
    <div class="card" style="margin-top: 20px; margin-bottom: 20px">
        <div class="card-header">
            <h4>News</h4>
        </div>
        <div class="card-body">
            <div class="card-text">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'post', //postは通常の投稿機能
                    'post_status' => 'publish'
                );
                $my_posts = get_posts($args);
                ?>
                <dl>
                    <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                        <dt>
                            <span class="date"><?php the_time('Y/n/j'); ?></span>
                        </dt>
                        <dd>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </dd>
                    <?php endforeach; ?>
                </dl>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>