<?php

/**

* @package wordpress

* @subpackage sam

*/

get_header();

?>

<div class="page_wrap">
  <div class="container inner_page">
    <div class="top_banner">
      <div class="row"> <?php the_post_thumbnail('banner_thmbnail'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
      <div class="row">
        <h1><?php the_title(); ?></h1>
         <? if(have_posts()): ?>
    <? while(have_posts()) : the_post();  ?>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <? endwhile; ?>
    <? endif; ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <!-- /.container -->
</div>
<?php get_footer(); ?>
