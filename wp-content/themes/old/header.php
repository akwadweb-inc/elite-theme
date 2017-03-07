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
      <div class="container">

      <div class="navbar-header">
      <?php if (has_custom_logo()): ?>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php the_custom_logo(); ?></a>
        <?php else: ?>
        	   <a class="site-title navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo('name' ); ?></a>
        </div>
    <?php endif; ?>

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

