<?php /* Template Name:  Template Home*/ ?>

<?php get_header(); ?>
	<div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="top-menu">
                        <p class="welcome-msg"><a href="/">Ми раді вас бачити</a> </p>
                    </div>
                    
	                    <div class="top-link">
	                        <ul class="link">
	                            <li><a href="/"> <i class="fa fa-home"></i> На головну</a></li>
	                            <?php 
					                if ( is_user_logged_in() ) {?>
					                	<li><a href="<?php echo wp_logout_url(); ?>" title="Вихід"><i class="fa fa-share"></i>Вихід</a></li>
					            <?php }?>
	                        </ul>
	                    </div>
                    
                </div>
            </div>
        </div>
    </div>
	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start">Перелік кураторів</div>
			<h1><?php the_title(); ?></h1>
			<h5 class="start">Прикарпатський національний університет імені Василя Стефаника</h5>
		</div>
        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>
	</section>
	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Викладацький склад</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
						</div>
					</div>
				</div>
			</div><!-- .row -->
			<?php $args = array(
    			    'post_type'         => 'curators',
    			    'publish'           => true,
    			    'posts_per_page'    => 12,
    			    'order'             => 'DESC',  
    			    'paged' => get_query_var('paged') ?: 1
    			);
    			$the_query = new WP_Query( $args );
    			if ( $the_query->have_posts() ) { ?>           
		            <div class="row">
		            	<?php while( $the_query->have_posts() ){
							$the_query->the_post(); ?>
			            	<a href="<?php echo get_permalink(); ?>">
			            		<div class="col-xs-12 col-sm-4 col-md-4">
				                    <div class="grid wow zoomIn curlists">
				                        <figure class="effect-bubba">
				                        	<?php echo get_the_post_thumbnail(get_the_ID(), 'post_170x240',array('class' => '',)); ?>
				                            <figcaption>
				                                <h2><?php echo get_the_title(); ?></h2>
				                                <p>завідувач кафедри, кандидат тех.наук, доцент </p>
				                            </figcaption>			
				                        </figure>
				                    </div>
				                </div>
			            	</a>
		            	<?php } wp_reset_postdata(); ?>
		            </div>
            <?php  } else{} ?> 

		</div>
	</section>


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Написати декілька слів на кафедру</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Ніхто не запалює лампу, щоб заховати її за дверима: мета світла - створити більше світла, відкрити людям очі, виявити дива навколо.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Ваше ім'я</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Ваше ім'я">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Message"></textarea>
							</div>

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Ваші питання</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->
<?php get_footer(); ?>