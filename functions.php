<?php
function custom_excerpt_length( $length ) {
    return 100; 
}       
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more($more) {
    return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'post-thumbnails' );

//メールフォームの textarea にひらがなが無ければ送信できない（contact form7）
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);
 
function wpcf7_validation_textarea_hiragana($result, $tag)
{
    $name = $tag['name'];
    $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';
 
    if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
        $result['valid'] = false;
        $result['reason'] = array($name => 'エラー / この内容は送信できません。');
    }
 
    return $result;
}

function set_noindex(){ 
    if ( is_category() || is_tag() ) {
        echo '<meta name="robots" content="noindex,follow" />';
    }
}
add_action('wp_head', 'set_noindex');

function load_custom_styles() {
    if ( is_page('recruit') ) {
        // テーマの top.css を読み込む
        wp_enqueue_style( 'top-page-style', get_stylesheet_directory_uri() . '/css/top.css' );

        // Contact Form 7 のデフォルトの CSS スタイルシートを読み込む
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        } else {
            // プラグインのディレクトリから直接 CSS を読み込む
            wp_enqueue_style( 'contact-form-7-style', plugins_url( 'contact-form-7/includes/css/styles.css' ) );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_custom_styles' );




?>