<?php

/**

Template Name:Contact Us

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
	
	  <div class="col-xs-12 col-sm-7">
	  <div class="row">
	  <h1><?php the_title(); ?></h1>
 <? if(have_posts()): ?>
    <? while(have_posts()) : the_post();  ?>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <? endwhile; ?>
    <? endif; ?>
	  </div></div>
	  
	  <div class="col-xs-12 col-sm-4 sidebar_main col-lg-offset-1"> 
		<div class="row">
	  <div class="widget-1 widget-first sidebar contact_sidebar" id="text-2">			
<div class="textwidget">
<div class="contact_top"> 
<img src=" http://www.samontini.com/wp-content/uploads/2015/08/contact_sidebar.jpg">

</div>
	
 <div class="contact_info">
<span>LinkedIn: <a href="https://www.linkedin.com/in/abbottpmp/" target="_blank">Sam Abbott</a></span>

<!--span>Phone: 706.615.8664</span>
<span>E-mail: <mail to="sam@samontini.com">sam@samontini.com</mail></span>

<span>Facebook: <a href="https://www.facebook.com/SamAbbott27" target="_blank">Sam Abbott</a></span>

<span>Twitter:<a href="https://twitter.com/samontini" target="_blank"> @samontini</a></span>

<span>Flickr: <a href="https://www.flickr.com/photos/samontini" target="_blank">@samontini</a></span>

<span>Instagram: <a href="https://instagram.com/samontini" target="_blank">@samontini</a></span-->
 </div>

</div>
		</div>	  



	  </div>
    
	 
	
	
  </div>
  <!-- /.container -->
</div>
<?php get_footer(); ?>
