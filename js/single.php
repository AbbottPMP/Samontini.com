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
      <div class="row"> <img src="images/about_banner.jpg"> </div>
    </div>
    <div class="col-xs-12 col-sm-8">
      <div class="row">
        <h1><?php the_title(); ?></h1>
         <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

 

    <div class="metainfo">Posted by <span class="author-name">

    <?php the_author_posts_link(); ?>

    </span> on

    <?php the_time('l, F jS, Y') ?>

    in

    <?php the_category(', ') ?>

  </div>

  

 <?php the_content('Read the rest of this entry &raquo;'); ?>

    <?php endwhile; ?>

      <?php comments_template(); ?>

    <?php else : ?>

    <h2 class="center">Not Found</h2>

    <p class="center">Sorry, but you are looking for something that isn't here.</p>

    <?php get_search_form(); ?>

    <?php endif; ?> 

      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <!-- /.container -->
</div>
<?php get_footer(); ?>
