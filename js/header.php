<?php

/**

* @package wordpress

* @subpackage sam
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>

<?php wp_title('&laquo;', true, 'right'); ?>

<?php bloginfo('name'); ?>

</title>


<?php /*?><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" /><?php */?>

<?php /*?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>window.jQuery || document.write('js/jquery.js"><\/script>')</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script><?php */?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<?php /*?><link rel="icon" href="../../favicon.ico"><?php */?>
<title>Home</title>
<!-- Bootstrap core CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!-- Custom styles for this template -->
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/ie-emulation-modes-warning.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />

<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<!-- Modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script src="http://code.jquery.com/jquery-1.6.2.js" type="text/javascript"></script>
<script>

	 
	 
	   $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
	
	
</script>

<?php wp_head(); ?>



</head>



<body <?php body_class(); ?>>

<nav class="navbar navbar-inverse header">
  <div class="container">
    <div class="row">
      <div class="navbar-header col-xs-12 col-sm-4">
        <div class="row">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand logo" href="<?php echo home_url(); ?>"><img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"><img class="visible-xs" src="<?php echo get_template_directory_uri(); ?>/images/mobile_logo.jpg"></a> </div>
      </div>
      <div class="col-xs-12 col-sm-8 top_menus">
        <div class="row">
          <div class="col-xs-12 col-sm-12 social_top hidden-xs">
            <div class="row">
              <ul class="pull-right">
		<li><a href="https://www.linkedin.com/in/samontini" class="fb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/in.jpg"></a></li>

                <!--li><a href="https://www.facebook.com/SamAbbott27" class="fb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.jpg"></a></li>
                <li><a href="https://twitter.com/samontini" class="fb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/tw.jpg"></a></li>
                <li><a href="https://www.flickr.com/photos/samontini" class="fb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/dots.jpg"></a></li>
                <li><a href="https://instagram.com/samontini/" class="fb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.jpg"></a></li-->
              </ul>
            </div>
          </div>
          <div id="navbar" class="collapse navbar-collapse pull-right">
            <div class="row">
			
			
<?php wp_nav_menu( array( 'theme_location' => 'main-menu','items_wrap'  => '<ul  class="nav navbar-nav" id="jsddm">%3$s</ul>','walker' => new My_Walker_Nav_Menu() ) ); ?>



              <?php /*?><ul class="nav navbar-nav">
                <li class="active"><a href="#">About</a></li>
                <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Media <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Photo Gallery</a></li>
                    <li><a href="#">Video Gallery</a></li>
                  </ul>
                </li>
                <li><a href="#">Experience</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Contact</a></li>
              </ul><?php */?>
            </div>
            <!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
