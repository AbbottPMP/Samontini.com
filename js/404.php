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
        <h1 style="text-align:center;margin-top:40px;">Error 404 Page not Found</h1>
    <h2  style="text-align:center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <p class="center">
      <?php get_search_form(); ?>
    </p>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <!-- /.container -->
</div>
<?php get_footer(); ?>
