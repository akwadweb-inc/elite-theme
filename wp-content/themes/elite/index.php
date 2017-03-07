<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elite
 */

get_header(); ?>


<!-- [/MAIN-HEADING]
 ============================================================================================================================-->

    <section class="main-heading text-center" id="home" style="background-image:url(<?php header_image(); ?>)">
        <div class="overlay">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h1 class="site-description wow fadeIn" data-wow-duration="2s" data-wow-offset="300"><?php bloginfo('description'); ?></h1>
                        <p class="lead site-title wow fadeIn" data-wow-duration="2s" data-wow-offset="300"><?php echo get_theme_mod( 'elite_header_text' ); ?></p>
                        <a class="btn btn-primary wow fadeIn" data-wow-duration="2s" data-wow-offset="300" id="downloadbt" href="<?php echo get_theme_mod('elite_header_button_link'); ?>" target="_blank"><?php echo get_theme_mod('elite_header_button_text'); ?></a>
                    </div>
                     <a href="#about" class="fa fa-angle-down page-scroll"></a>
                </div>
            </div>
        </div>
    </section>
 <!-- [/MAIN-HEADING]
 ============================================================================================================================-->
<!-- About Section -->
<?php
	$args = array(
		'post_type'			=> 'About',
		'post_staus'		=> 'publish',
		'posts_per_page'	=> 1
		);
	$about_query	= new WP_Query($args);

	if ( $about_query->have_posts() ) : while ( $about_query->have_posts() ) : $about_query->the_post(); ?>
	<!-- post -->
	<?php get_template_part('template-parts/content', 'about'); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<p class="lead text-center">Please go to About section in your Dashboard and add data</p>
	<?php endif;
	wp_reset_postdata();



 ?>
<!-- About Section -->
<!-- services Section -->
 <section class="our-services theme_background_color white text-center" style="background-color:<?php echo get_theme_mod('elite_custom_services_background_color'); ?>" id="service">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
            <div class="sectionTitle text-center white">
                <h2><?php echo get_theme_mod('elite_custom_services_title'); ?></h2>
                <div class="line white-background">
                 </div>
                <div class="clearfix"></div>
                <p class="intro"><?php echo get_theme_mod('elite_custom_services_body'); ?></p>
            </div>
         </div>
     </div>

     <div class="gap"></div>


<?php
	$args = array(
		'post_type'			=> 'service',
		'post_staus'		=> 'publish',
		'posts_per_page'	=> 4
		);
	$service_query	= new WP_Query($args);

	if ( $service_query->have_posts() ) : while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
	<!-- post -->
	<?php get_template_part('template-parts/content', 'service'); ?>
	<?php endwhile; ?>

 </div>
 </section>

	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<p class="lead text-center">Please go to Service section in your Dashboard and add data</p>
	<?php endif;
	wp_reset_postdata();


 ?>
<!-- services Section -->

<!-- [OUR TEAM]
 ============================================================================================================================-->
 <section class="our-team text-center" style="background:url(<?php echo get_theme_mod('elite_custom_Team_background'); ?>); background-size: cover; background-position: center;background-attachment: fixed;background-repeat: no-repeat;" id="teams">
    <div class="overlay">
            <div class="container">
                <div class="sectionTitle center">
                    <h2><?php echo get_theme_mod('elite_custom_Team_title'); ?></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">


                      <?php
                      $args = array(
							'post_type'			=> 'Team Member',
							'post_staus'		=> 'publish',
							'posts_per_page'	=> 8
							);
						$team_query	= new WP_Query($args);
                      	if ( $team_query->have_posts() ) : while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
                      	<!-- post -->
                      	<?php get_template_part('template-parts/content', 'team'); ?>
                      	<?php endwhile; ?>
                      	<!-- post navigation -->
                      	<?php else: ?>
                      	<!-- no posts found -->
                        </div>
                      	<p class="lead text-center">Please go to Team section in your Dashboard and add data</p>
                      	<?php endif; ?>
                      	<?php 	wp_reset_postdata(); ?>


            </div>
        </div>

 </section>
 <!-- [/OUR TEAM]
 ============================================================================================================================-->




  <!-- [PORTFOLIO]
 ============================================================================================================================-->
 <section class="portfolio white-background black" id="portfolio">
 <div class="container">
 <div class="row">
      <div class="sectionTitle text-center  col-md-12">
                <h2><?php
                if(!empty(get_theme_mod('elite_custom_work_title'))){
                 echo get_theme_mod('elite_custom_work_title');
               }else{
               	echo 'please insert your Title from customizer Works Section';
               }  ?></h2>

                <div class="line grey_background_color">

                </div>
                <div class="clearfix"></div>
                <p class="intro"><?php
                if(!empty(get_theme_mod('elite_custom_works_body'))){
                   	echo get_theme_mod('elite_custom_works_body');
                   }else{
                   	echo 'please insert your Paragraph from customizer Works Section';
                   }
                ?></p>
            </div>
     <div class="gap"></div>
           <?php $args = array(
								        'hide_empty'          => 1,
								        'hide_title_if_empty' => false,
								        'hierarchical'        => true,
								        'order'               => 'ASC',
								        'orderby'             => 'name',
								        'separator'           => ' | ',
								        'show_count'          => 0,
								        'show_option_all'     => 'All ',
								        'show_option_none'    => __( 'No categories' ),
								        'style'               => 'separator',
								        'taxonomy'            => 'category',
								        'use_desc_for_title'  => 1,);

					$categories = get_categories($args);
						if( ! empty($categories)){
					 ?>


     <div class="categories">

                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">


              <ol class="type">

					<?php $catid = array();
					echo  '<li><a href="#" data-filter="*" class="active">All</a></li>';

					foreach($categories as $category)  {?>

						   <li class=""><a href="" data-filter=".<?php echo strtolower(str_replace( ' ', '-', $category->name)); ?>"><?php echo $category->name; ?></a> </li>

					<?php }
					?>
					</ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <?php } ?>

     <div id="lightbox">



                <?php
                      $args = array(
							'post_type'			=> 'work',
							'post_staus'		=> 'publish',
							'posts_per_page'	=> 8
							);
						$work_query	= new WP_Query($args);
                      	if ( $work_query->have_posts() ) : while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
                      	<!-- post -->
                      	<?php get_template_part('template-parts/content', 'works'); ?>
                      	<?php endwhile; ?>
                      	<!-- post navigation -->
                      	<?php else: ?>
                      	<!-- no posts found -->
                      	<p class="lead text-center  alert alert-info" style="color:black">Please go to Works section in your Dashboard and add data</p>

                      	<?php endif; ?>
                      	<?php 	wp_reset_postdata(); ?>


            </div>



  </div>
  </div>
 </section>
 <!-- [PORTFOLIO]
 ============================================================================================================================-->

  <!-- [OUR CLIENT]
 ============================================================================================================================-->

 <section class="our-client" id="client">
     <div class="overlay">
            <div class="container">

                <div class="sectionTitle text-center">
                    <h2>Some of <strong>our Clients</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div id="clients" class="owl-carousel owl-theme">
                <?php
                      $args = array(
							'post_type'			=> 'Client',
							'post_staus'		=> 'publish',

							);
						$client_query	= new WP_Query($args);
                      	if ( $client_query->have_posts() ) : while ( $client_query->have_posts() ) : $client_query->the_post(); ?>

                      	<div class="item wow slideInLeft" data-wow-duration="1s" data-wow-offset="300">
                      		 <?php the_post_thumbnail(); ?>
                    	</div>

                      	<?php endwhile; ?>

                      	<!-- post navigation -->
                      	<?php else: ?>
                      		 </div>
                      	<!-- no posts found -->
                      	<p class="lead text-center">Please go to Clients section in your Dashboard and add data</p>
                      	<?php endif; ?>
						<?php 	wp_reset_postdata(); ?>



            </div>
        </div>
 </section>


 <!-- [/OUR CLIENT]
 ============================================================================================================================-->


 <!-- [TESTIMONIAL]
 ============================================================================================================================-->
 <section class="client-testimonial text-center black-background grey" style="background-color:<?php echo get_theme_mod('elite_custom_testimonials_background_color'); ?>" id="testimonial-s">

            <div class="container">
                <div class="row">
                <div class="sectionTitle text-center col-md-12">
                    <h2><strong>Our clients’</strong> testimonials</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                    <div class="col-md-8 col-md-offset-2 grey">

                        <div id="testimonial" class="owl-carousel owl-theme">
                         <?php
                      $args = array(
							'post_type'			=> 'testimonial',
							'post_staus'		=> 'publish',
							'posts_per_page'	=>5
							);
						$client_query	= new WP_Query($args);
                      	if ( $client_query->have_posts() ) : while ( $client_query->have_posts() ) : $client_query->the_post(); ?>

                      		 <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><?php echo get_post_meta(get_the_ID(), 'testimonials_id', true); ?></p>
                            </div>

                      	<?php endwhile; ?>

                      	<!-- post navigation -->
                      	<?php else: ?>
                      		 </div>
                      	<!-- no posts found -->
                      	<p class="lead text-center">Please go to Testimonials section in your Dashboard and add data</p>
                      	<?php endif; ?>
                      	<?php 	wp_reset_postdata(); ?>


                    </div>
                </div>
            </div>



 </section>
 <!-- [/TESTIMONIAL]
 ============================================================================================================================-->

 <!-- [CONTACT]
 ============================================================================================================================-->


                      	<?php echo do_shortcode( '[contact_form]' ); ?>

 <!-- [/CONTACT]
 ============================================================================================================================-->




<?php
// get_sidebar();
get_footer();
