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
  
  <!-- ПОЛОСА С ФОТО -->
  <section class="hidden-xs" id="sub_header_musical_clips">
		<div class="container">
				<div class="cover">
						<div class="title">
							Создай свой профессиональный клип!
						</div>
						<div class="subtitle">
						Стань популярным!
						</div>
				</div>  
		</div>  
  </section>

  <section class="hidden-xs" id="portfolio">
					<div class="container">
						<h2>Создание музыкальных клипов "под ключ"</h2>
						<h5>для показа на ТВ и YouTube</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe width="640" height="360" src="https://www.youtube.com/embed/PBrUio34y0A" frameborder="0" allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Неофициальный Гимн Всемирного Фестиваля Молодёжи и Студентов 2017</p>
													</div>
													<div class="video_description">
														<p>Видео набрало более 650.000 просмотров на YouTube</p>
													</div>
											</div>
									</div>

									
					</div>
	</section>

	<section class="visible-xs" id="portfolio">
					<div class="container">
						<h2>Создание музыкальных клипов</h2>
						<h5>для показа на ТВ и YouTube</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe width="500" height="334" src="https://www.youtube.com/embed/PBrUio34y0A" frameborder="0" allowfullscreen></iframe>
														</div>
											</div>
									</div>

									
					</div>
	</section>
  </div>
 <?php 
	include('includes/footer.php');
?>
