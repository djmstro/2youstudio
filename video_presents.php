<?php 
	include('includes/header.php');
?>
<!-- Главное меню -->
		<nav class="navbar navbar-dark navbar-full hidden-md hidden-sm hidden-xs" id="nav-main">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php include('includes/nav/nav_kids.php'); ?>
			  </ul>
			</div>
        </nav>
        
	<!-- Подменю -->
		<nav class="navbar navbar-light navbar-full hidden-md hidden-sm hidden-xs" id="nav-second">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php 
						include('includes/submenu/submenu_kids.php');
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
					<h2>Фильм, где главные актёры - друзья именинника</h2>
						<h5>Мы разрабатываем вопросы, сценарий и монтируем, а друзья создают фильм</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/228067661?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Видеоподарок Алексею</p>
													</div>
													<div class="video_description">
														<p>Техническое задание: <br>У супруга Алексея День рождения, необходимо создать 
														видео <br>из поздравлений его друзей. <br>Увлечения: Космос, танцы.
														<br>Выполненная нами работа:
														<br>Создание вопросов, разработка сценария, тематический монтаж.</p>
													</div>
											</div>
									</div>

									<!--2-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/213354478?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Видеоподарок Владимиру</p>
													</div>
													<div class="video_description">
														<p>Техническое задание: <br>У супруга Владимира День рождения, необходимо создать 
														видео <br>из поздравлений его друзей. <br>Стилизация: старое кино.
														<br>Выполненная нами работа:
														<br>Создание вопросов, разработка сценария, тематический монтаж.</p>
													</div>
											</div>
									</div>
									
					</div>
	</section>

	<section class="visible-xs" id="portfolio">
					<div class="container">
						<h2>Лучший подарок <br>на День Рождения</h2>
						<h5>Мы разрабатываем вопросы и сценарий, <br>а друзья создают фильм</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/228067661?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>
									<!--2-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/213354478?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>
									
					</div>
	</section>
  </div>
 <?php 
	include('includes/footer.php');
?>
