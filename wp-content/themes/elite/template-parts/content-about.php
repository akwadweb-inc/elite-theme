 <!-- [ABOUT US]
 ============================================================================================================================-->
 <section class="aboutus white-background black" id="about">
     <div class="container">
         <div class="row eq-height">
             <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="300">
               <div class="aboutText">
                        <div class="sectionTitle">
                            <h4>    <?php echo get_the_title(); ?></h4>
                            <h2><?php echo get_post_meta(get_the_ID(), 'first_section', true); ?> <strong><?php echo get_post_meta(get_the_ID(), 'second_section', true); ?></strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro"><?php echo get_post_meta(get_the_ID(), 'message_box', true); ?></p>

                    </div>



             </div>
             <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1s" data-wow-offset="300">
                 <?php
                 if( has_post_thumbnail()){
                    the_post_thumbnail();
                 }
                  ?>
             </div>
         </div>
     </div>
 </section>

 <!-- [/ABOUTUS]
 ============================================================================================================================-->
