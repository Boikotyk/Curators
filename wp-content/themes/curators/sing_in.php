<?php /* Template Name:  Template Sing In*/ ?>
<?php get_header(); ?>
    <section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
            <div class="sing_in_page">
                <div class="iconscurat">
                    <a href="/home/"><i class="fa fa-user"></i>Студент</a>
                </div>
                <?php 
                if ( is_user_logged_in() ) {?>
                <div class="iconscurat">
                    <a  href="/home/"><i class="fa fa-graduation-cap"></i>Викладач</a>
                </div>
                <?php }
                else{?>
                    <div class="iconscurat">
                    <a  href="/login/"><i class="fa fa-graduation-cap"></i>Викладач</a>
                </div>
                <?php }?>
                
            </div>
		</div> 

	</section>
<?php get_footer(); ?>