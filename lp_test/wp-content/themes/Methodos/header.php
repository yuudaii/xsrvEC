<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php wp_title(); ?></title>
<meta charset="UTF-8">
<meta name="keywords" content="<?php the_field('metakeyword'); ?>">
<meta name="description" content="<?php the_field('metadescription'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('url');?>/wp-content/themes/Methodos/add.css" type="text/css" media="all">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<style  type="text/css">
<?php the_field('css_custum'); ?>
</style>
    
<?php the_field('googleanalytics'); ?>
<?php the_field('fbpixel'); ?>
<?php the_field('googleconversion'); ?>

</head>

<body id="home" class="col1">
<div id="container"> 
  
  <!----------本文部分ここから--------------------> 
  
  <!--main-->
  <div id="main" class="post-<?php the_ID(); ?>"> 
    <!--main-in-->
    <div id="main-in" class="post-<?php the_ID(); ?>"> 
      <!--main-contents-->
      <div id="main-contents"  class="post-<?php the_ID(); ?>"> 
          
          <div class="thumb">
        <?php the_post_thumbnail(); ?>
        </div>

        <!--contents--> 
        <div class="contents post-<?php the_ID(); ?>">
