<?php get_header(); ?>

<main class="bg-light">
    <div class="container">

        <div class="row py-3">
            <!--メインコンテンツ-->
            <div class="col-md-8 col-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="bg-white py-3 mb-5 text-center">
                    <!--日付-->
                    <p><?php the_time('Y/n/j'); ?></p>
                    <!--記事タイトル-->
                    <h1 class="h2 px-3 pb-3 font-weight-bolder">
                        <?php the_title(); ?>
                    </h1>
                    <!--カテゴリー-->
                    <p>
                        <?php the_category( ' ' ); ?>
                    </p>
                    <!--サムネイル-->
                    <div class="pb-3">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                        <?php else : ?>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img4.png" alt="">
                        <?php endif; ?>
                    </div>
                    <!--本文-->
                    <div class="text-left px-2">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; else : ?>
                <p>記事がありません。</p>
                <?php endif; ?>
            </div>

            <!--サイドバー-->
            <?php get_sidebar() ?>
        </div>
    </div>
    <? get_footer(); ?>