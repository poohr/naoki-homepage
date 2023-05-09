<?php
/* サムネイル */
add_theme_support('post-thumbnails');

/*　メニュー機能　*/
register_nav_menus(
 array(
 'gloval-navigation' => 'グローバル', 
 'footer-navigation' => 'フッター',
 )
);