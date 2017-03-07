<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); wp_title('|'); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_directory' ); ?>/images/icon.png">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- [ LOADERs ]
================================================================================================================================->
    <div class="preloader">
    <div class="loader theme_background_color">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
 [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
  <!-- [NAV]
 ============================================================================================================================-->
   <!-- Navigation
    ==========================================-->
  	<?php    /**
  		* Displays a navigation menu
  		* @param array $args Arguments
  		*/
  		?>

        <nav  class=" ramsh-menu navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php if (has_custom_logo()): ?>
                    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php the_custom_logo(); ?></a>
                <?php else: ?>
                     <a class="site-title navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo('name' ); ?></a>
                </div>
            <?php endif; ?>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="page-scroll">Home</a></li>
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="#service" class="page-scroll">Services</a></li>
                <li><a href="#teams" class="page-scroll">Team</a></li>
                <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                <li><a href="#testimonial-s" class="page-scroll">Testimonials</a></li>
                <li><a href="#contact" class="page-scroll">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    <!-- <nav  class=" ramsh-menu navbar navbar-default navbar-fixed-top">
      <div class="container">

      <div class="navbar-header">


       <?php $args = array(
  			'theme_location' => 'top',
  			'menu' => 'primary',
  			'container' => 'div',
  			'container_class' => 'collapse navbar-collapse',
  			'container_id'	=>'bs-example-navbar-collapse-1',
  			'menu_class' => 'nav navbar-nav navbar-right',
        'walker'    => new Elite_Walker_Nav_Primary()
  		);

  		wp_nav_menu( $args ); ?>
      </div><!-- /.container-fluid -->
    </nav>



   <!-- [/NAV]
 ============================================================================================================================-->



<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<div class="slider-slick" style="width:100%;overflow:hidden">
    <div class="col-sm-4">
        <a href="#"><img style="width:100%; height:291px; margin:auto" src="http://takseet.net/images/cms/1485369581.a5291" alt="Adds"></a>
    </div>
    <div class="col-sm-4">
        <a href="#"><img style="width:100%; height:291px; margin:auto" src="http://takseet.net/images/cms/1485369581.a5291" alt="Adds"></a>
    </div>
    <div class="col-sm-4">
        <a href="#"><img style="width:100%; height:291px; margin:auto" src="http://takseet.net/images/cms/1485369581.a5291" alt="Adds"></a>
    </div>
    <div class="col-sm-4">
        <a href="#"><img style="width:100%; height:291px; margin:auto" src="http://takseet.net/images/cms/1485369581.a5291" alt="Adds"></a>
    </div>
    <div class="col-sm-4">
        <a href="#"><img style="width:100%; height:291px; margin:auto" src="http://takseet.net/images/cms/1485369581.a5291" alt="Adds"></a>
    </div>
    <div class="col-sm-4">
        <a href="#"><img style="width:100%; height:291px; margin:auto" src="http://takseet.net/images/cms/1485369581.a5291" alt="Adds"></a>
    </div>
</div>
<script type="text/javascript">
    $(".slider-slick").slick({
      // normal options...
      infinite: true,
      slidesToShow:3,
      slidesToScroll:1;
      dots:false,
      arrows:false
    });
</script>
