<?php

/**

Template Name:Experience

*/

get_header();

?>

<div class="page_wrap">
  <div class="container inner_page">
    <div class="top_banner">
	 <div class="row">
	 
	<?php the_post_thumbnail('banner_thmbnail'); ?>
	 
	 </div>
	
	</div>
	
	  <div class="col-xs-12 col-sm-8">
      
      <div class="row">
<h1><?php the_title(); ?></h1>
       <?php 
	   
	   
	   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;



query_posts(array(

	'post_type'      => 'experience_post', // You can add a custom post type if you like

	'paged'          => $paged,


	'posts_per_page' => 14

));



if (have_posts()) : ?>
       <?php while (have_posts()) : the_post(); ?>
      <div class="col-xs-12 col-sm-12 col-md-12 ">
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-2">
<div class="row">
<span class="education_date">
    
<?php
$date = new DateTime(get_field('date_from'));
echo $date->format('Y');
?>
 <span style="font-weight:bold; font-size:14px;">-</span><br />  
    

<?php $present= get_field('present');

if( $present=='Yes') {


echo "Present";

}
else {

 ?>


<?php
$date = new DateTime(get_field('date_to'));
echo $date->format('Y');

}
?>    

 <?php //the_field('date_from'); ?>
<?php //the_field('date_to'); ?>

 </span>

</div></div>
<div class="col-xs-12 col-sm-9 col-md-10">
<h3 class="edu_title"><?php the_title(); ?></h3>
<span class="education_cat"><?php the_field('category_input'); ?></span>

<div class="edu_des">
<?php the_content(); ?>

</div></div></div> </div>
      
        <?php endwhile; ?>

    <!--div class="navigation">

      <div class="alignleft">

        <?php next_posts_link('&laquo; Older Entries') ?>

      </div>

      <div class="alignright">

        <?php previous_posts_link('Newer Entries &raquo;') ?>

      </div>

    </div-->

    <?php else : ?>

    <h2 class="center">Not Found</h2>

    <p class="center">Sorry, but you are looking for something that isn't here.</p>

    <?php get_search_form(); ?>

    <?php endif; ?>
      
      <?php wp_reset_query(); ?>
      
      
      
       </div>
	  </div>
	  
	<div class="resume_download">
	  <a href="http://www.samontini.com/wp-content/uploads/Sam_Abbott_Resume.pdf" target="_blank"><img src="http://www.samontini.com/wp-content/themes/sam/images/download.jpg" border="0"></a>
	</div>
    <?php get_sidebar(); ?>
	 
	
	
  </div>
  <!-- /.container -->
</div>
<?php get_footer(); ?>
