<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>My Theme</title>
</head>

<body>

    <header>
        <div class="container">
            <h1 class="h1 py-3">My Theme</h1>
        </div>
    </header>
    <!--　グローバルナビ　-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Home</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="#">WordPress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">HTML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">CSS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">PHP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="bg-light">
        <div class="container">
            <!--  ピックアップ記事  -->
            <div class="row py-3">
                <div class="col-md-4 col-12">
                    <div class="bg-white py-3">
                        <!--サムネイル-->
                        <div class="pb-3">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                        </div>
                        <!--記事タイトル-->
                        <h2 class="h4 px-3 pb-3">
                            ピックアップコンテンツピックアップコンテンツピックアップコンテンツピックアップコンテンツ
                        </h2>
                        <!--ボタン-->
                        <div class="text-center">
                            <a href="">
                                <div class="d-inline-block border p-3 text-secondary">
                                    READ MORE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="bg-white py-3">
                        <!--サムネイル-->
                        <div class="pb-3">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                        </div>
                        <!--記事タイトル-->
                        <h2 class="h4 px-3 pb-3">
                            ピックアップコンテンツピックアップコンテンツピックアップコンテンツピックアップコンテンツ
                        </h2>
                        <!--ボタン-->
                        <div class="text-center">
                            <a href="">
                                <div class="d-inline-block border p-3 text-secondary">
                                    READ MORE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="bg-white py-3">
                        <!--サムネイル-->
                        <div class="pb-3">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                        </div>
                        <!--記事タイトル-->
                        <h2 class="h4 px-3 pb-3">
                            ピックアップコンテンツピックアップコンテンツピックアップコンテンツピックアップコンテンツ
                        </h2>
                        <!--ボタン-->
                        <div class="text-center">
                            <a href="">
                                <div class="d-inline-block border p-3 text-secondary">
                                    READ MORE
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row py-3">
                <!--      メインコンテンツ　-->
                <div class="col-md-8 col-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="bg-white py-3 mb-5 text-center">
                                <!--    日付      -->
                                <p><?php the_time(''); ?></p>
                                <!--記事タイトル-->
                                <h2 class="px-3 pb-3 font-weight-bold">
                                <?php the_title(); ?>
                                </h2>
                                <!--   カテゴリー      -->
                                <p>
                                <?php the_category( ' ' ); ?>
                                </p>
                                <!--サムネイル-->
                                <div class="pb-3">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                    <p>サムネイルがないです</p>
                                    <?php endif; ?>
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                                </div>
                                <!--   ディスクリプション      -->
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
                <!--   サイドバー   -->
                <div class="col-md-4 col-12">
                    <!--    プロフィール    -->
                    <div class="container bg-white mb-5 py-5">
                        <div class="mx-5">
                            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>https://picsum.photos/1000/1000" alt="">
                        </div>
                        <div class="text-center">
                            <h4 class="d-inline-block py-3 border-bottom border-info">ふるた　なおき</h4>
                        </div>
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>

                    <!--    検索窓    -->
                    <div class="container bg-white mb-5 py-5">
                        <form>
                            <input type="text" class="form-control" placeholder="Search for">
                        </form>
                    </div>

                    <!--    読んでほしい記事    -->
                    <div class="container bg-white mb-5 py-5">
                        <div class="text-center py-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">読んでほしい記事</h4>
                        </div>
                        <div class="pb-5">
                            <!--サムネイル-->
                            <div class="pb-3">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                            </div>
                            <!--記事タイトル-->
                            <h5 class="h5">
                                ピックアップコンテンツピックアップコンテンツピックアップコンテンツピックアップコンテンツ
                            </h5>
                        </div>
                        <div class="pb-5">
                            <!--サムネイル-->
                            <div class="pb-3">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                            </div>
                            <!--記事タイトル-->
                            <h5 class="h5">
                                ピックアップコンテンツピックアップコンテンツピックアップコンテンツピックアップコンテンツ
                            </h5>
                        </div>
                        <div class="pb-5">
                            <!--サムネイル-->
                            <div class="pb-3">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="">
                            </div>
                            <!--記事タイトル-->
                            <h5 class="h5">
                                ピックアップコンテンツピックアップコンテンツピックアップコンテンツピックアップコンテンツ
                            </h5>
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
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="pb-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">Protofolio</h4>
                        </div>
                        <div class="p-3 border-top border-bottom border-secondary">
                            <a class="text-secondary" href="">
                                ポートフォリオサイト
                            </a>
                        </div>
                        <div class="p-3 border-top border-bottom border-secondary">
                            <a class="text-secondary" href="">
                                ポートフォリオサイト
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="pb-5">
                            <h4 class="d-inline-block py-3 border-bottom border-info">Twitter</h4>
                        </div>
                        <a class="twitter-timeline" data-lang="ja" data-height="600" href="https://twitter.com/nao_nao_12_23?ref_src=twsrc%5Etfw">
                            Tweets by nao_nao_12_23
                        </a>
                        <script async src="<?php echo get_template_directory_uri(); ?>https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <div class="bg-dark text-white text-center p-3">
                <p>Copyright - furuta naoki, 2023 All Rights Reserved.</p>
            </div>
        </footer>
    </main>
    　

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo get_template_directory_uri(); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="<?php echo get_template_directory_uri(); ?>https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>