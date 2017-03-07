<div class="item wow slideInDown" data-wow-duration="2s" data-wow-offset="300">
 <div class="thumbnail">
    <div class="img-circle team-img">
    <?php
    	if (has_post_thumbnail()){the_post_thumbnail('thumbnail', array('class' => 'img-circle team-img') );}
     ?>
    </div>
    <div class="caption">
        <h3><?php echo get_the_title(); ?></h3>
        <p><?php echo get_post_meta(get_the_ID(), 'team_id', true); ?></p>
        <p><?php the_content(); ?></p>
    </div>
</div>
</div>
