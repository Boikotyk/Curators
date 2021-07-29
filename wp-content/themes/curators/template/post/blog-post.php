<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 blog-item">
    <div class="post-img">
        <a class="hover-images" href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'post_740x494', array( 'class' => 'img-reponsive', )); ?>
        </a>
    </div>
    <div class="post-info v2">
        <h3 class="post-title v3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="post-element">
            <div class="post-date"><?php echo get_the_date('F j, Y'); ?></div>
            <div class="post-date post-author"><?php echo get_field('author_title'); ?> : <?php echo get_field('author_value'); ?></div>
        </div>
    </div>
</div>
