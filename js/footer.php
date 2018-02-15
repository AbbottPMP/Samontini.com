<?php

/**

* @package wordpress

* @subpackage sam

*/

?>

<div class=" foooter_top">
  <div class="container"> <i>Let us not grow weary in doing good, for at the proper time we will reap a harvest if we do not give up. - Galatians 6:9</i> </div>
</div>
<div class="foooter_bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-5 col-sm-1 hidden-xs">
        <div class="row"> <img src="<?php echo get_template_directory_uri(); ?>/images/footer_log.png"> </div>
      </div>
      <div class="col-xs-5 col-sm-8 footer_menu ">
        <div class="row">
          <div class="col-xs-5 col-sm-12 hidden-xs">
            <div class="row">
             <?php wp_nav_menu( array( 'theme_location' => 'footer-menu','items_wrap'  => '<ul id="jsddm">%3$s</ul>' ) ); ?>

            </div>
          </div>
          <div class="col-xs-12 col-sm-12">
            <div class="row">
              <p>Copyright © 2015 Samontini.com. All Rights Reserved. Site produced by <a href="http://www.rickhoeye.com" target="_blank" class="footer_menu">Rick Hoeye</a>.</p>
            </div>
          </div>
        </div>
      </div>
	  
	  <div class="col-xs-12 col-sm-3 footer_social ">
        <div class="row">
		
		<ul >
		<li><a class="fb" href="https://www.linkedin.com/in/samontini" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/foo_in.jpg"></a></li>

<!--li><a class="fb" href="https://www.facebook.com/SamAbbott27" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/foo_fb.jpg"></a></li>
		<li><a class="fb" href="https://twitter.com/samontini" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/foo_tw.jpg"></a></li>
		<li><a class="fb" href="https://www.flickr.com/photos/samontini" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/foo_dots.jpg"></a></li>
		<li><a class="fb" href="https://instagram.com/samontini" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/foo_insta.jpg"></a></li-->
		</ul>
		
		
		 </div>
      </div>
	  
	  
	  
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
   
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 320, controlNav: false,pause:false,
        itemMargin: 5,
        pausePlay: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
<?php wp_footer(); ?>
</body>
</html>
