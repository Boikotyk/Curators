<?php if( have_rows('models') ){ 
    while( have_rows('models') ){ 
        the_row();?>
        <div class="new-collection v3 bg_white">
            <div class="container">
                <?php if(!empty(get_sub_field('title'))){ ?>
                    <h3 class="vow-title v3"><?php echo get_sub_field('title'); ?></h3>
                <?php } ?>
                <?php $args = array(
    			    'post_type'         => 'models',
    			    'publish'           => true,
    			    'posts_per_page'    => 4,
    			    'order'             => 'DESC',  
    			    'paged' => get_query_var('paged') ?: 1
    			);
    			$the_query = new WP_Query( $args );
    			if ( $the_query->have_posts() ) { ?>
                    <div class="row">
                    	<?php while( $the_query->have_posts() ){
                            $the_query->the_post(); ?>
                            <div class="col-xs-6 col-sm-3 col-md-3 c-item">
                                <a href="<?php echo get_permalink(); ?>" class="hover-images">
                                    <?php echo get_the_post_thumbnail( get_the_ID(), 'post_540x810', array( 'class' => 'img-reponsive', )); ?>
                                </a>
                                <h3 class="h-colect-title v4"><?php echo get_the_title(); ?></h3>
                            </div>
                        <?php } 
                        wp_reset_postdata(); 
                        ?>
                    </div>
                <?php  } else{} ?> 
            </div>
        </div>
    <?php } 
} ?>