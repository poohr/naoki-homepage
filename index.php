<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>My Theme</title>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="h1 py-3">My Theme</h1>
        </div>
    </header>

    <!--グローバルナビ-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Home</a>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                  $defaults = array(
                    'menu_class'      => 'navbar-nav',
                    'container'       => false,
                    'link_before'     => '<span class="nav-item text-white mr-4">',
                    'link_after'      => '<span>',
                    'theme_location'  => 'gloval-navigation',
                  );
                  wp_nav_menu( $defaults );
                  ?>
            </div>
        </div>
    </nav>

    <main class="bg-light">
        <div class="container">
            <!--ピックアップ記事-->
            <div class="row py-3">
                <?php $top_query = new WP_Query( 'tag=toppickup' ); ?>
                <?php if ( $top_query->have_posts() ) : ?>
                <?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
                <div class="col-md-4 col-12">
                    <div class="bg-white py-3">
                        <!--サムネイル-->
                        <div class="pb-3">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                            <?php else : ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img4.png"
                                alt="">
                            <?php endif; ?>
                        </div>
                        <!--記事タイトル-->
                        <h2 class="h4 px-3 pb-3">
                            <?php the_title(); ?>
                        </h2>
                        <!--ボタン-->
                        <div class="text-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="d-inline-block border p-3 text-secondary">
                                    READ MORE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>


            <div class="row py-3">
                <!--メインコンテンツ-->
                <div class="col-md-8 col-12">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="bg-white py-3 mb-5 text-center">
                        <!--日付-->
                        <p><?php the_time('Y/n/j'); ?></p>
                        <!--記事タイトル-->
                        <h2 class="px-3 pb-3 font-weight-bolder">
                            <?php the_title(); ?>
                        </h2>
                        <!--カテゴリー-->
                        <p>
                            <?php the_category( ' ' ); ?>
                        </p>
                        <!--サムネイル-->
                        <div class="pb-3">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                            <?php else : ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img4.png"
                                alt="">
                            <?php endif; ?>
                        </div>
                        <!--ディスクリプション-->
                        <p class="text-secondary">
                            <?php the_excerpt(); ?>
                        </p>
                        <!--ボタン-->
                        <div class="text-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="d-inline-block border p-3 text-secondary">
                                    READ MORE
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; else : ?>
                    <p>記事がありません。</p>
                    <?php endif; ?>
                </div>

                <!--サイドバー-->
                <div class="col-md-4 col-12">
                    <!--プロフィール-->
                    <div class="container bg-white mb-5 py-5">
                        <div class="mx-5">
                            <img class="img-fluid rounded-circle"
                                src="<?php echo get_template_directory_uri(); ?>/img/img6.png" alt="">
                        </div>
                        <div class="text-center">
                            <h4 class="d-inline-block py-3 border-bottom border-info">しもむらともき</h4>
                        </div>
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                    <!--検索窓-->
                    <div class="container bg-white mb-5 py-5">
                        <form>
                            <input type="text" class="form-control" placeholder="Search for">
                        </form>
                    </div>
                    <!--読んで欲しい記事-->
                    <div class="container bg-white mb-5 py-5">
                        <div class="text-center pb-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">読んで欲しい記事</h4>
                        </div>

                        <?php $side_query = new WP_Query( 'tag=sidepickup' ); ?>
                        <?php if ( $side_query->have_posts() ) : ?>
                        <?php while ( $side_query->have_posts() ) : $side_query->the_post(); ?>

                        <div class="pb-5">
                            <!--サムネイル-->
                            <div class="pb-3">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                                <?php else : ?>
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img4.png"
                                    alt="">
                                <?php endif; ?>
                            </div>
                            <!--記事タイトル-->
                            <h5 class="h5">
                                <a class="text-secondary" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h5>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <footer class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="pb-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">About</h4>
                        </div>
                        <p>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="pb-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
                        </div>
                        <?php
                        $defaults = array(
                          'menu_class'      => 'list-unstyle',
                          'container'       => false,
                          'link_before'     => '<div class="p-3 border-top border-bottom border-secondary">',
                          'link_after'      => '</div>',
                          'theme_location'  => 'footer-navigation',
                        );
                    wp_nav_menu( $defaults );
                    ?>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="pb-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">Twitter</h4>
                        </div>
                        <a class="twitter-timeline" data-lang="ja" data-height="600"
                            href="https://twitter.com/shimo_tmk?ref_src=twsrc%5Etfw">Tweets by shimo_tmk</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <div class="bg-dark text-white text-center p-3">
                Copyright - tomoki shimomura, 2019 All Rights Reserved.
            </div>
        </footer>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>