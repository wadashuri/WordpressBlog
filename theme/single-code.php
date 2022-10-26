<?php get_header(); ?>
<?php $slug_name = $post->post_name; ?>
<div id="eyecatch">
    <?php if (has_post_thumbnail()) : // サムネイルを持っているとき
    ?>
        <?php the_post_thumbnail(); ?>
    <?php else : // サムネイルを持っていない
    ?>
    <?php endif; ?>
</div>
<main class="container" id="<?php echo $slug_name; ?>_page">

    <div class="card border-dark mb-3" style="max-width: 90rem;">
        <h3 class="card-header"><?php the_title(); ?></h3>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card-body text-dark">
                <?php the_field('editor'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>