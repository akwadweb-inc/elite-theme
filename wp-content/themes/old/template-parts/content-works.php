 

 <div class="col-sm-6 col-md-3 col-lg-3 <?php foreach((get_the_category()) as $category) { echo $category->category_nicename . ' '; } ?> ">
 <div class="portfolio-item">
    <div class="hover-bg">
        <a href="#">
            <div class="hover-text">
                <h4><?php echo get_the_title();  ?></h4>
                <small><?php foreach((get_the_category()) as $category) { echo $category->name . ' '; } ?></small>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i>
            </div>
            <?php if( has_post_thumbnail()){ the_post_thumbnail( '', array('class'=> 'img-responsive') ); } ?>
        </a>
    </div>
</div>
</div>