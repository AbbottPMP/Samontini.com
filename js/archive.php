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
       <h1>
      <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */ if (is_category()) { ?>

    <h1>

      <?php single_cat_title(); ?>

      Category</h1>

    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

    <h1>Posts Tagged &#8216;

      <?php single_tag_title(); ?>

      &#8217;</h1>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

    <h1>Archive for

      <?php the_time('F jS, Y'); ?>

    </h1>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

    <h1>Archive for

      <?php the_time('F, Y'); ?>

    </h1>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

    <h1>Archive for

      <?php the_time('Y'); ?>

    </h1>

    <?php /* If this is an author archive */ } elseif (is_author()) { ?>

    <h1>Author Archive</h1>

    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

      <h1>Blog</h1>

      <?php } ?>

      <?php while (have_posts()) : the_post(); ?>

    <div class="post">

 <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

        <?php the_title(); ?>

        </a></h1>

      <div class="metainfo">Posted by <span class="author-name">

        <?php the_author_posts_link(); ?>

        </span> on

        <?php the_time('l, F jS, Y') ?>

        in

        <?php the_category(', ') ?>

      </div>

      <?php the_excerpt(); ?>

      <a class="readmore" href="<?php the_permalink() ?>" style=" float:right">Read More </a> </div>

    <?php endwhile; ?>

    <div class="navigation">

      <div class="alignleft">

        <?php next_posts_link('&laquo; Older Entries') ?>

      </div>

      <div class="alignright">

        <?php previous_posts_link('Newer Entries &raquo;') ?>

      </div>

    </div>

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
