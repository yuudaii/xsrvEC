<?php
  
//ウィジェット追加
if ( function_exists('register_sidebar') )
    register_sidebar();
  
add_theme_support( 'post-thumbnails' );// 機能の宣言
  
//トップページアイキャッチサイズ
add_image_size('top-page', 280, 210, true);


  
//アーカイブアイキャッチサイズ
add_image_size('archive-page', 150, 150, true);
  
//ヘッダー節約
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
  
//excerpt
function new_excerpt_mblength($length) {
     return 80;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
  
//画像キャプション取得
$image_excerpt = get_post( get_post_thumbnail_id() )->post_excerpt;
echo $image_excerpt;
  
//svg
  
function my_ext2type($ext2types) {
    array_push($ext2types, array('image' => array('svg', 'svgz')));
    return $ext2types;
}
add_filter('ext2type', 'my_ext2type');
   
function my_mime_types($mimes){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'my_mime_types');
   
function my_mime_to_ext($mime_to_ext) {
    $mime_to_ext['image/svg+xml'] = 'svg';
    return $mime_to_ext;
}
add_filter('getimagesize_mimes_to_exts', 'my_mime_to_ext');
 
//カテゴリー説明文でHTMLタグを使う
remove_filter( 'pre_term_description', 'wp_filter_kses' );


/**
 * アイキャッチ画像に対応する
 */
function my_after_setup_theme(){
 // アイキャッチ画像を有効にする
 add_theme_support( 'post-thumbnails' ); 
 set_post_thumbnail_size(false); 
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );

 // サイズ指定を削除する
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

function generate_options_css() {
    $ss_dir = get_stylesheet_directory();
    ob_start();
    require($ss_dir . '/add.php');
    $css = ob_get_clean();
    file_put_contents($ss_dir . '/add.css', $css, LOCK_EX);
}
add_action( 'acf/save_post', 'generate_options_css', 20 );


/*
 * 番号なし箇条書きショートコード
 */
 
function my_code_link4( $args, $content ) {
  $content1 = str_replace("\n", "</li>\n<li>",$content);
      $str = "<ul><li>".$content1."</li></ul>\n";
    $str = str_replace("<li><br /></li>", "",$str);
    $str = str_replace("<li></li>", "",$str);
        return $str;
}
add_shortcode( 'ul', 'my_code_link4' );

