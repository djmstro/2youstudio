<?php 
	include('includes/header.php');
?>
<!-- Главное меню -->
		<nav class="navbar navbar-dark navbar-full hidden-md hidden-sm hidden-xs" id="nav-main">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php include('includes/nav/nav_advert.php'); ?>
			  </ul>
			</div>
        </nav>
        
	<!-- Подменю -->
		<nav class="navbar navbar-light navbar-full hidden-md hidden-sm hidden-xs" id="nav-second">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php 
						include('includes/submenu/submenu_advert.php');
					?>

				</ul>
			</div>
        </nav>
<?php 
	include('includes/feedback.php');
?>
  <div id="main" class="clearfix">
  

  <section class="hidden-xs" id="portfolio">
					<div class="container">
						<h2>Видеообзор автосалона</h2>
						<h5>Дайте узнать о Вас Вашим клиентам!</h5>
									<!-- 1 -->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/235512379?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Сервис "Мерседес-Бенц РУС"</p>
													</div>
													<div class="video_description">
														<p>- Разработка сценария <br> - Режиссура <br> - Съёмка <br> - Монтаж <br> - Подбор ведущего <br> - Создание инфографики</p>
													</div>
											</div>
									</div>

									<!-- 2 -->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/172951786?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Официальный дилер Volkswagen "Автоцентр Сити-Каширка"</p>
													</div>
											</div>
									</div>

									<!-- 3 -->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/196778025?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Официальный дилер Volkswagen <br>"ТЦ Кунцево"</p>
													</div>
											</div>
									</div>
					</div>
	</section>

	<section class="visible-xs" id="portfolio">
					<div class="container">
						<h2>Видеообзор автосалона</h2>
						<h5>Дайте узнать о Вас Вашим клиентам!</h5>
									<div class="row mb30" >
									<!-- 1 -->
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/235512379?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>

									<!-- 2 -->
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/172951786?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>

									<!-- 3 -->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/196778025?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>

					</div>
	</section>
  
  <section id="dialer_portal">
  		<div class="mb30 pt40">
  		<h3>При поддержке проекта"дилерскийпортал.рф"</h3>
  		</div>
  		<div class="dealer_portal">
  			<a href="http://xn--80ahdlbgfgf2akifiv.xn--p1ai/" target="_blank"><img title="Дилерский портал" src="img/other/dealer_portal.png" alt="Дилерский портал"></a>
  		</div>
  </section>
  </div>
 <?php 
	include('includes/footer.php');
?>
