/*
Theme Name: Methodos
Author:Kataoka Design Marketing
*/

<?php
  header('Content-Type: text/css; charset=utf-8');
?>

/*------------------------------------------------------------------------------------------------*/
/*背景色*/
/*------------------------------------------------------------------------------------------------*/


/*背景色*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_color') ) { ?>
#main.post-<?php the_ID(); ?>{background-color:<?php the_field('bg_color'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*背景画像*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_image') ) { ?>
#main.post-<?php the_ID(); ?>{background-image: url("<?php the_field('bg_image'); ?>");}
<?php } ?>
<?php endwhile; endif; ?>

/*背景画像の繰り返し*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_repeat') ) { ?>
#main.post-<?php the_ID(); ?>{background-repeat: <?php the_field('bg_repeat'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>


/*背景画像の固定*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_fixed') ) { ?>
#main.post-<?php the_ID(); ?>{background-attachment:<?php the_field('bg_fixed'); ?>; }
<?php } ?>
<?php endwhile; endif; ?>


/*背景の大きさ*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('background-size') ) { ?>
#main.post-<?php the_ID(); ?>{background-size:<?php the_field('background-size'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*------------------------------------------------------------------------------------------------*/
/*記事背景設定*/
/*------------------------------------------------------------------------------------------------*/

/*背景色*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_main_in_color') ) { ?>
#main-in.post-<?php the_ID(); ?>{background-color:<?php the_field('bg_main_in_color'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*背景画像*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_main_in_image') ) { ?>
#main-in.post-<?php the_ID(); ?>{background-image: url("<?php the_field('bg_main_in_image'); ?>");}
<?php } ?>
<?php endwhile; endif; ?>



/*------------------------------------------------------------------------------------------------*/
/*デザイン設定*/
/*------------------------------------------------------------------------------------------------*/

/*文字色*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('font-color') ) { ?>
#main.post-<?php the_ID(); ?>{color:<?php the_field('font-color'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*文字サイズ(PC)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('font-size-pc') ) { ?>
#main-contents.post-<?php the_ID(); ?>{font-size:<?php the_field('font-size-pc'); ?>em;}
<?php } ?>
<?php endwhile; endif; ?>

/*文字サイズ(スマホ)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('font-size-sp') ) { ?>
@media
only screen and (max-width : 768px){
#main-contents.post-<?php the_ID(); ?>{font-size:<?php the_field('font-size-sp'); ?>em;}
}
<?php } ?>
<?php endwhile; endif; ?>

/*行間(PC)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('line-height-pc') ) { ?>
#main-contents.post-<?php the_ID(); ?> p{line-height:<?php the_field('line-height-pc'); ?>em;}
<?php } ?>
<?php endwhile; endif; ?>


/*行間(スマホ)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('line-height-sp') ) { ?>
@media
only screen and (max-width : 768px){
#main-contents.post-<?php the_ID(); ?> p{line-height:<?php the_field('line-height-sp'); ?>em;}
}
<?php } ?>
<?php endwhile; endif; ?>


/*------------------------------------------------------------------------------------------------*/
/*見出し設定(h2) スマホ共通*/
/*------------------------------------------------------------------------------------------------*/

/*背景色(h2)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('h2_bgcolor') ) { ?>
#main-contents.post-<?php the_ID(); ?> h2{background-color:<?php the_field('h2_bgcolor'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*文字色(h2)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('h2_color') ) { ?>
#main-contents.post-<?php the_ID(); ?> h2{color:<?php the_field('h2_color'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*サブヘッド横幅(h2)*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('h2_margin') ) { ?>
#main-contents.post-<?php the_ID(); ?> h2{margin-left:<?php the_field('h2_margin'); ?>em;margin-right:<?php the_field('h2_margin'); ?>em;}
<?php } ?>
<?php endwhile; endif; ?>

/*------------------------------------------------------------------------------------------------*/
/*フッター設定*/
/*------------------------------------------------------------------------------------------------*/

/*フッターの背景色*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('bg_footer') ) { ?>
#footer.post-<?php the_ID(); ?> {background:<?php the_field('bg_footer'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>

/*フッターの文字色*/
<?php query_posts('post_type=page'); ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php if( get_field('color_footer') ) { ?>
#footer.post-<?php the_ID(); ?> {color:<?php the_field('color_footer'); ?>;}
#footer.post-<?php the_ID(); ?> a{color:<?php the_field('color_footer'); ?>;}
<?php } ?>
<?php endwhile; endif; ?>






