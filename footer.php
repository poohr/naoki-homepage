<footer class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <?php dynamic_sidebar( 'footer_widget01' ); ?>
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
                <?php dynamic_sidebar( 'footer_widget02' ); ?>
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