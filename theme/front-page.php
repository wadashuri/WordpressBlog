<?php get_header(); ?>
<main class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <h5>このサイトについて</h5>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h5>Laravelとは</h5>
                    </div>
                    <div class="card-text">
                        <p>
                            一言でいうならばフルスタックフレームワーク
                            です。<br><br>
                            このサイトは基本的になんでも出来るフレームワーク「Laravel」を愛するweb系エンジニアが<br>
                            業務などで書いたコードをアウトプットし理解をさらに深めるとともに、覚えた技術を忘れないための場所にしようと思ってます。<br><br>
                            みんなでララベル頑張りましょう！
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-top: 20px; margin-bottom: 20px">
                <div class="card-header">
                    <h4>新着記事</h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <?php
                        $args = array(
                            'posts_per_page' => 10,
                            'post_type' => 'code',
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
            <div class="front_item">
            </div>
            <div class="card" style="margin-top: 20px; margin-bottom: 20px">
                <div class="card-header">
                    <h4>お知らせ</h4>
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
            <div>
                <?php
                $args = array(
                    'post_type' => 'service',  //カスタム投稿タイプ名
                    'posts_per_page' => 3, // 表示件数
                );
                ?>
            </div>
            <h3>Laravelを用いて個人開発したWEBサイト</h3>
            <div class="products row row-cols-1 row-cols-md-2 g-4" style="margin-top: 20px; margin-bottom: 20px">
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
        <div class="col-sm-2">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>