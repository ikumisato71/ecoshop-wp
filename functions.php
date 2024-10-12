
<?php
function theme_setup(){
    // メニューを登録
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー', // メインメニューの設定
        )
    );
}

// after_setup_theme アクションにフックして、テーマセットアップを行う
add_action('after_setup_theme', 'theme_setup');
?>

