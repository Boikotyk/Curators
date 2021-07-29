<?php if( have_rows('text_box_down') ){ 
    while( have_rows('text_box_down') ){ 
        the_row();?>
		<div class="feature text-center bg_white">
		  <div class="container">
		      <div class="row">
		          <div class="col-12 feature-inner">
		          	<?php if(!empty(get_sub_field('title'))){ ?>
		          		<h3 class="vow-title v3"><?php echo get_sub_field('title'); ?></h3>
			        <?php } ?>
		            <?php if(!empty(get_sub_field('description'))){ ?>
		          		<?php echo get_sub_field('description'); ?>
			        <?php } ?>
		          </div>
		      </div>
		  </div>
		</div>
    <?php } 
} ?>