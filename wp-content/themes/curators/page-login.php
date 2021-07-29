<?php get_header(); ?>
    <section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
            <div class="loginform">
                <h2 class="logintitle">Авторизація</h2>
    			<?php
    			$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
                    if ( $login === "failed" ) {  
                        echo '<p class="login-msg"><strong>Помилка:</strong> Не правильний логін чи пароль</p>';  
                    } elseif ( $login === "empty" ) {  
                        echo '<p class="login-msg"><strong>Помилка:</strong> Пароль або логін порожні</p>';  
                    } elseif ( $login === "false" ) {  
                        echo '<a href="/"></a>';  
                    }
    			wp_login_form(); 
    				
    			?>

                <h3 class="sing_in_star"><a href="/"> <i class="fa fa-home"></i> На головну</a></h3>         
            </div>
		</div> <a href=""></a>
	</section>
<?php get_footer(); ?>