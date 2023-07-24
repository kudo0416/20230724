<!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- <html lang="ja">を出力 -->
<head>
<meta charset="<?php bloginfo('charset'); ?>"><!-- <meta charset="utf-8">を出力 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?><!-- 必ずこの場所に書く。<head>内のメタタグを出力するためのアクションフック -->
</head>
<body <?php body_class(); ?>><!-- ページごとにクラスを追加する（クラス名は例えばフロントページなら「home page」など決まっている） -->
    <header>
        <div class="header-inner">
            <!-- ヘッダーのロゴ -->
            <div class="header-logo">
                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logonew.png" alt="酒列磯前神社"></a>
            </div>

            <div class="hamburger-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- デスクトップのヘッダーのナビゲーションメニュー -->
            <nav class="main-nav">
                <?php
                $args =array(
                    'theme_location' => 'header_nav',
                    'fallback_cb' => false,
                );
                wp_nav_menu($args);
                ?>
            </nav>

            <nav class="res-main-nav">
                <?php
                $args =array(
                    'theme_location' => 'responsive_header_nav',
                    'fallback_cb' => false,
                );
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>