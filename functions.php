<?php

// 各種ファイルの読み込み
function enqueue_scripts() {
    // CSSファイル
    wp_enqueue_style('main', get_stylesheet_uri());
    //bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');
    //google-fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap');
    //Javascript
    wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), '3.6.4', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/////////////////////////////////////////////////////////////

/*function theme_setup() {
    // <title>タグを表示させる
    add_theme_support('title-tag');

    //カスタム投稿タイプ
    register_post_type('news', [
        'labels' => [
            'name' => 'news',
            'singular_name' => 'news',
            'menu_name' => 'news',
            'all_items' => 'news一覧',
        ] ,
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-comments', //ダッシュボードのアイコン
        'show_in_rest' => true,
    ]);

    //カテゴリーの追加
    register_taxonomy('news_category', 'news', [
        'labels' => [
            'name' => 'newsカテゴリー',
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);

    //アイキャッチ画像を登録
    add_theme_support('post-thumbnails');
    //アイキャッチ画像のサイズ
    //add_image_size('post-eyecatch', 1000, 400, true);
}
add_action('after_setup_theme', 'theme_setup');*/

//ナビゲーションメニュー
function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション',
        'responsive_header_nav' => 'レスポンシブヘッダーに表示されるナビゲーション',
        'footer_nav' => 'フッターに表示されるナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');


function add_custom_meta_boxes() {
    add_meta_box(
        'my_meta_box', // id
        'カスタム画像', // title
        'display_my_meta_box', // callback
        'post' // page
    );
}
add_action( 'add_meta_boxes', 'add_custom_meta_boxes' );

function display_my_meta_box( $post ) {
    $image_id = get_post_meta( $post->ID, 'image_id', true );
    echo '<input id="image_id" type="hidden" name="image_id" value="'.esc_attr($image_id).'">';
    echo '<input id="upload_image_button" type="button" class="button" value="画像を選択" />';
    echo '<div id="preview_image" style="margin-top: 15px; position: relative;">';
    if($image_id) {
        echo wp_get_attachment_image( $image_id, 'full' );
        echo '<button id="remove_image_button" style="position: absolute; right: 0; top: 0;">×</button>';
    }
    echo '</div>';

    echo '
        <script>
            jQuery(document).ready(function($){
                $("#upload_image_button").click(function(e) {
                    e.preventDefault();
                    var image = wp.media({ 
                        title: "画像をアップロード",
                        multiple: false
                    }).open().on("select", function(e){
                        var uploaded_image = image.state().get("selection").first();
                        var image_url = uploaded_image.toJSON().url;
                        var image_id = uploaded_image.toJSON().id;
                        $("#preview_image").empty();
                        $("#preview_image").append("<img src="+image_url+" style=\"max-width:100%;\"/><button id=\"remove_image_button\" style=\"position: absolute; right: 0; top: 0;\">×</button>");
                        $("#image_id").val(image_id);
                    });
                });
                $("#preview_image").on("click", "#remove_image_button", function(e) {
                    e.preventDefault();
                    $("#image_id").val("");
                    $("#preview_image").empty();
                });
            });
        </script>
    ';
}

function save_my_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    if( isset( $_POST['image_id'] ) ) {
        update_post_meta( $post_id, 'image_id', $_POST['image_id'] );
    }
}
add_action( 'save_post', 'save_my_meta_box' );

/////////////////////////////////////////////////////////////
