<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php if (wp_title('', false)) : ?><?php bloginfo('name'); ?>の<?php echo trim(wp_title('', false)); ?>のページです。<?php endif; ?><?php bloginfo('description'); ?>">
    <code class="code-multiline">
        <!-- BootstrapのCSS読み込み -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </code>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">

    <code class="code-multiline">
        <!-- jQuery読み込み -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <!-- Propper.js読み込み -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <!-- BootstrapのJavascript読み込み -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </code>
    <?php wp_head(); ?>
</head>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'container' => false,
                    'menu_class' => 'navbar-nav',
                    'add_li_class' => 'nav-item', // liタグへclass追加
                    'add_a_class' => 'nav-link' // aタグへclass追加
                )); ?>
                <div>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        絞り込み検索
                    </button> -->
                    <!-- モーダルの設定 -->
                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">タイトル</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="get" action="http://localhost:8080/">
                                        <h3>商品カテゴリー</h3>
                                        <ul class="terms">
                                            <li><input type="radio" name="item_category" value="accessory">アクセサリー</li>
                                            <li><input type="radio" name="item_category" value="shoes">シューズ</li>
                                            <li><input type="radio" name="item_category" value="mans_wear">メンズウェア</li>
                                        </ul>

                                        <h3>商品カテゴリー詳細</h3>
                                        <ul class="terms">
                                            <li><input type="radio" name="item_category__show" value="tshirts_cutandsew">Tシャツ・カットソー</li>
                                            <li><input type="radio" name="item_category__show" value="sneakers">スニーカー</li>
                                            <li><input type="radio" name="item_category__show" value="hoodie_sweatshirts">パーカー・スウェット</li>
                                        </ul>

                                        <h3>性別</h3>
                                        <ul class="terms">
                                            <li><input type="radio" name="gender" value="man">man</li>
                                            <li><input type="radio" name="gender" value="woman">woman</li>
                                        </ul>

                                        <h3>サイズ</h3>
                                        <ul class="terms">
                                            <li><input type="radio" name="size" value="s">S</li>
                                            <li><input type="radio" name="size" value="m">M</li>
                                            <li><input type="radio" name="size" value="l">L</li>
                                            <li><input type="radio" name="size" value="xl">XL</li>
                                        </ul>

                                        <h3>カラー</h3>
                                        <ul class="terms">
                                            <li><input type="radio" name="color" value="black">Black</li>
                                            <li><input type="radio" name="color" value="white">White</li>
                                            <li><input type="radio" name="color" value="blue">Blue</li>
                                            <li><input type="radio" name="color" value="pink">Pink</li>
                                            <li><input type="radio" name="color" value="red">Red</li>
                                            <li><input type="radio" name="color" value="green">Green</li>
                                        </ul>

                                        <h3>在庫</h3>
                                        <ul class="terms">
                                            <li><input type="radio" name="stock" value="instock">在庫あり</li>
                                            <li><input type="radio" name="stock" value="outofstock">在庫なし</li>
                                        </ul>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                            <input type="submit" class="btn btn-primary" value="検索">
                                        </div>/.modal-footer -->
                                    <!-- </form>
                                </div> -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
            <!-- 検索窓 -->
            <?php get_search_form(); ?>
        </div>
    </nav>
</header>