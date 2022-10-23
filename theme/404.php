<?php get_header(); ?>
<div class="container">
    <div id="eyecatch">
        <h1>404 NOT FOUND</h1>
    </div>
    <?php get_template_part('include/common', 'breadcrumb'); //　Breadcrumb NavXTを使わないときは削除
    ?>
    <main id="notfound_page">
        <h2>
            お探しのページは見つかりませんでした
        </h2>
        <p>
            アクセスしようとしたページが見つかりませんでした。<br>
            ページが移動または削除されたか、URLの入力間違いの可能性があります。
        </p>
        <p>
            <a href="<?php echo home_url(); ?>">≫トップページへ</a>
        </p>
    </main>
</div>
<?php get_footer(); ?>