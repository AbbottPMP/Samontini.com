<?php

/**

* @package wordpress

* @subpackage sam

*/

get_header();

?>

<div class="page_wrap_main"><div class="page_wrap home">
  <div class="container">
    <div class="row home_mid_blocks">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 slider_text">
		<img class="hidden-xs"  src="<?php echo get_template_directory_uri(); ?>/images/home_text.png">
        <img class="visible-xs"  src="<?php echo get_template_directory_uri(); ?>/images/home_text_small.png">
		<p>
<a class="btn view_now" href="http://www.samontini.com/about/">LEARN MORE</a>
</p>
		</div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="row">
		 
          <div class="col-xs-12 col-sm-12 single_block_home mid_bg1">
            <div class="col-xs-6 col-sm-6">
              <h4>Media</h4>
              <p>View a snapshot of my accomplishments, and check out some of the pictures I've taken in the Photo Gallery.</p>
              <p> <a class="btn view_now" href="http://www.samontini.com/media/">VIEW NOW</a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-12 single_block_home mid_bg2">
            <div class="col-xs-6 col-sm-6">
              <h4>Experience</h4>
              <p>Take a look at some of the positions I've held and see the roles that helped shape me into the person I am today.</p>
              <p> <a class="btn view_now" href="http://www.samontini.com/experience/">LEARN MORE</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row home_slider">
      <div class="flexslider carousel">
        <ul class="slides">
        
        
        <?php 

$rows = get_field('slider_images','option');
if($rows)
{


	foreach($rows as $row)
	{
	?>
    <li><img src="<?php echo $row['image_upload']; ?>"/></li>
    <?php
	}


}
     ?>
       
        </ul>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div></div>

<?php get_footer(); ?>

