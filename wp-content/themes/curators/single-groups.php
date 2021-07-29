<?php get_header();
the_post(); ?>
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
			<div class="start">Кандидат фіз.-мат. наук, доцент кафедри інформаційних технологій  </div>
			<h1><?php the_title(); ?></h1>
			<h5 class="start">Куратор групи ІПЗ-41</h5>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->
    <section class="pfblock pfblock-gray" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">Навчальні дисципліни </h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    Навчальні дисципліни які викладаючться для групи
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
					
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">Алгоритми та структури даних</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Об`єктно-орієнтоване програмування </h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">85</span>
                        </span>
						<h3 class="text-center">Програмування на С/С++</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">Еволюційні алгоритми</h3>
					</div>
				</div><!--End row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->

	<!-- CallToAction start -->

	<section  id="methoddoc" class="methoddoc">
		<div class="container">
			<h2 class="pfblock-header wow slideInRight methoddoch" data-wow-delay=".1s">Методичне забезпечення</h2>
			<div class="row">
				
				<div id="cbp-qtrotator" class="cbp-qtrotator">
	                <div class="cbp-qtcontent">
	                    <blockquote>
	                      <p>методичне забезпечення1</p>
	                    </blockquote>
	                </div>
	                <div class="cbp-qtcontent">
	                    <blockquote>
	                      <p>методичне забезпечення2</p>
	                    </blockquote>
	                </div>
	            </div>		
            </div><!-- .row -->
		</div><!-- .container -->
	</section>
	<section id="testimonials" class="pfblock pfblock-gray">
		<div class="container">
            <div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Закритий блок тільки для викладача "Список групи"</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">група з студентами (їх ПІБ, дані проживання, пошта, звіт оцінювання) </div>						
					</div>
				</div>
			</div><!-- .row -->
				<?php echo do_shortcode('[member] 
						<div class="tabstud" >
							<div class="scroll-table">
								<table border="2" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" >
							        <thead>
							          <tr class="row0">
							            <td class="column0 style0 s">Підрозділ</td>
							            <td class="column1 style0 s">Освітній рівень</td>
							            <td class="column2 style0 s">Форма навчання</td>
							            <td class="column3 style0 s">Спеціальність</td>
							            <td class="column4 style0 s">Курс</td>
							            <td class="column5 style0 s">Прізвище, ім’я, по батьковіб дата народження</td>
							            <td class="column6 style0 s">Рік вступу</td>
							            <td class="column7 style0 s">Електронна адреса</td>
							          </tr>
							        </thead>
							    </table>
							    <div class="scroll-table-body">
							    	<table border="2" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
							        <tbody>
							          <tr class="row1">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Боднарчук Анна Василівна 12.11.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">anna.bodnarchuk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row2">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Винник Володимир Ігорович 27.07.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">volodymyr.vynnyk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row3">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Вінтоняк Богдан Романович 30.12.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">bohdan.vintoniak.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row4">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Возняк Марія Віталіївна 29.08.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">mariia.vozniak.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row5">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Гой Владислав Тарасович 04.05.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">vladyslav.hoi.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row6">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Голошівський Андрій Володимирович 23.11.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">andrii.holoshivskyi.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row7">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Дорош Роман Володимирович 01.09.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">roman.dorosh.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row8">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Дубей Руслан Васильович 14.07.1998</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">ruslan.dubei.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row9">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Івасюк Михайло Мирославович 15.11.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">mykhailo.ivasiuk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row10">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Каруцяк Анна Вадимівна 20.12.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">anna.karutsiak.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row11">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Котів Сергій Вікторович 15.06.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">serhii.kotiv.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row12">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Кулик Олександр Геннадійович 07.03.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">oleksandr.kulyk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row13">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Мединський Ігор Зіновійович 30.06.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">ihor.medynskyi.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row14">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Мицканюк Василь Миколайович 10.12.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">vasyl.mytskaniuk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row15">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Мудрий Ярослав Романович 21.05.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">yaroslav.mudryi.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row16">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Музика Андрій Ігорович 02.08.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">andrii.muzyka.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row17">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Падалка Іван Васильович 20.06.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">ivan.padalka.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row18">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Петрів Оксана Василівна 10.06.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">oksana.petriv.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row19">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Полатайко Ігор Богданович 02.04.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">ihor.polataiko.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row20">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Слободян Марія Михайлівна 14.03.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">mariia.slobodian.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row21">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Сокіл Віталій Святославович 05.06.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">vitalii.sokil.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row22">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Ставичний Олександр Володимирович 08.12.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">oleksandr.stavychnyi.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row23">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Тарас Василь Дмитрович 27.10.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">vasyl.taras.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row24">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Тимків Артур Романович 04.05.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">artur.tymkiv.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row25">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Фенюк Максим Андрійович 26.04.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">maksym.feniuk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row26">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Чихарівський Володимир Іванович 18.11.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">volodymyr.chykharivskyi.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row27">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Шекеряк Микола Дмитрович 09.12.1999</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">mykola.shekeriak.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row28">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Шкіндюк Святослав Іванович 02.01.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">sviatoslav.shkindiuk.17@pnu.edu.ua</td>
							          </tr>
							          <tr class="row29">
							            <td class="column0 style1 s">Факультет математики та інформатики</td>
							            <td class="column1 style1 s">Бакалавр</td>
							            <td class="column2 style1 s">Денна</td>
							            <td class="column3 style1 s">121 Інженерія програмного забезпечення </td>
							            <td class="column4 style1 n">4</td>
							            <td class="column5 style1 s">Щербій Назар Богданович 23.06.2000</td>
							            <td class="column6 style1 n">2017</td>
							            <td class="column7 style1 s">nazar.shcherbii.17@pnu.edu.ua</td>
							          </tr>
							        </tbody>
							    </table>
							</div>
							</div>
						</div>
						<h2 class="pfblock-title">Оцінювання</h2>
						<div class="scroll-table">
							<table border="1" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
					            <thead>   
									<tr class="row0">
										<td class="column0 style0 s">Прізвище, ім’я, по батькові</td>
										<td class="column1 style0 s">Савка І.Я. Безпека програм та даних</td>
										<td class="column2 style0 s">Борик В.В. БЖД та цивільний захист</td>
										<td class="column3 style2 s">Козич О.В.Скриптові технології розробки вебзастосунків. Аngular</td>
										<td class="column4 style2 s">Козич О.В.  Яновський Ю.М.Програмування для iOS</td>
										<td class="column5 style0 s">Козленко М.І. Штучний інтелект</td>
										<td class="column6 style0 s">Терешкун О.Ф. Філософія</td>
										<td class="column7 style0 s">Кузь М.В. Аналіз вимог до програмного забезпечення</td>
										<td class="column8">&nbsp;</td>
									</tr>
					          </thead>
					      </table>
			            	<div class="scroll-table-body">
					          	<table border="1" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
									<tbody>
										<tr class="row1">
											<td class="column0 style1 s">Боднарчук Анна Василівна</td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row2">
											<td class="column0 style1 s">Винник Володимир Ігорович </td>
											<td class="column1 style1 null"></td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row3">
											<td class="column0 style1 s">Вінтоняк Богдан Романович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row4">
											<td class="column0 style1 s">Возняк Марія Віталіївна </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row5">
											<td class="column0 style1 s">Гой Владислав Тарасович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row6">
											<td class="column0 style1 s">Голошівський Андрій Володимирович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row7">
											<td class="column0 style1 s">Дорош Роман Володимирович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row8">
											<td class="column0 style1 s">Дубей Руслан Васильович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row9">
											<td class="column0 style1 s">Івасюк Михайло Мирославович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row10">
											<td class="column0 style1 s">Каруцяк Анна Вадимівна </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row11">
											<td class="column0 style1 s">Котів Сергій Вікторович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row12">
											<td class="column0 style1 s">Кулик Олександр Геннадійович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row13">
											<td class="column0 style1 s">Мединський Ігор Зіновійович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row14">
											<td class="column0 style1 s">Мицканюк Василь Миколайович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row15">
											<td class="column0 style1 s">Мудрий Ярослав Романович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row16">
											<td class="column0 style1 s">Музика Андрій Ігорович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row17">
											<td class="column0 style1 s">Падалка Іван Васильович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row18">
											<td class="column0 style1 s">Петрів Оксана Василівна </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row19">
											<td class="column0 style1 s">Полатайко Ігор Богданович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row20">
											<td class="column0 style1 s">Слободян Марія Михайлівна </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row21">
											<td class="column0 style1 s">Сокіл Віталій Святославович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row22">
											<td class="column0 style1 s">Ставичний Олександр Володимирович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row23">
											<td class="column0 style1 s">Тарас Василь Дмитрович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row24">
											<td class="column0 style1 s">Тимків Артур Романович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row25">
											<td class="column0 style1 s">Фенюк Максим Андрійович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row26">
											<td class="column0 style1 s">Чихарівський Володимир Іванович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row27">
											<td class="column0 style1 s">Шекеряк Микола Дмитрович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row28">
											<td class="column0 style1 s">Шкіндюк Святослав Іванович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
										<tr class="row29">
											<td class="column0 style1 s">Щербій Назар Богданович </td>
											<td class="column1">&nbsp;</td>
											<td class="column2">&nbsp;</td>
											<td class="column3">&nbsp;</td>
											<td class="column4">&nbsp;</td>
											<td class="column5">&nbsp;</td>
											<td class="column6">&nbsp;</td>
											<td class="column7">&nbsp;</td>
											<td class="column8">&nbsp;</td>
										</tr>
								    </tbody>
							    </table>
							</div>
						</div>
			   		
				[/member]'); ?>
		</div>
	</section>
	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Написати повідомлення старості групи</h2>
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
<?php get_footer(); ?>