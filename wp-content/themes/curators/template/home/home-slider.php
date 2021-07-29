<?php if( have_rows('slider') ){ ?>
    <div class="owl-test">
        <div class="js-owl-test owl-carousel owl-theme"> 
            <?php  while( have_rows('slider') ){ 
                the_row();
                    if( have_rows('slide') ){
                        while( have_rows('slide') ){ 
                        the_row(); ?>
                            <?php if(!empty(get_sub_field('image'))){ ?>
                                <div class="item">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo esc_url($image['sizes']['post_1920x1280']); ?>" alt="<?php echo esc_attr(get_sub_field('image')['alt']); ?>">
                                </div>                                        
                            <?php } ?>
                        <?php }
                    } 
                }
            ?>
        </div>
    </div>
<?php }?>