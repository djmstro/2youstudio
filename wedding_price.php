<?php 
	include('includes/header.php');
?>
<!-- Главное меню -->
		<nav class="navbar navbar-dark navbar-full hidden-md hidden-sm hidden-xs" id="nav-main">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php include('includes/nav/nav_weddings.php'); ?>
			  </ul>
			</div>
        </nav>
        
	<!-- Подменю -->
		<nav class="navbar navbar-light navbar-full hidden-md hidden-sm hidden-xs" id="nav-second">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php 
						include('includes/submenu/submenu_weddings.php');
					?>

				</ul>
			</div>
        </nav>
<?php 
	include('includes/feedback.php');
?>
  <div id="main" class="clearfix">
  
  <section>
					<div class="container">
					<h2 class="hidden-sm hidden-xs">ВЫБЕРИТЕ ТО, ЧТО ПОДХОДИТ ИМЕННО ВАМ!</h2>
						<h5 class="hidden-sm hidden-xs">Свадебные пакеты услуг 2You-Studio 2018</h5>
						<h2 class="visible-sm visible-xs mb30">Свадебные <br>пакеты услуг 2018</h2>
									<div class="row mb30" >
											<div class="col-lg-4 col-md-4 col-sm-12 mb30">
														<div class="price_block" id="price_block_active">
															<h5> Базовый </h5>
															<h1> 80.000 </h1>
															<h2> рублей </h2>
															<p>- Продолжительность съёмки - 12 часов;</p>
															<p>- Видеосъёмка 2 операторами в 2 камеры;</p>
															<p>- Организация интервью с гостями;</p>
															<p>- Передвижение на собственном авто;</p>
															<p>- Наличие дополнительного оборудования;</p>
															<p>- Монтаж Свадебного фильма, продолжительностью до 40 мин;</p>
															<p>- Профессиональная запись звука на интервью/регистрации и на банкете с микшерного пульта;</p>
															<p>- Цветокоррекция Свадебного фильма.</p>
														</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 mb30">
													<div class="price_block">
															<h5> Оптимальный </h5>
															<h1> 90.000 </h1>
															<h2> рублей </h2>
															<p style="font-weight: 700;">Все услуги пакета "Базовый" +</p>
															<p>- Разработка концепции фильма</p>
															<p>- Короткая версия свадебного фильма, продолжительностью от 3 минут. </p>
													</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
													<div class="price_block">
															<h5> Максимальный </h5>
															<h1> 105.000 </h1>
															<h2> рублей </h2>
															<p style="font-weight: 700;">Все услуги пакета "Оптимальный" +</p>
															<p>- Разработка концепции Love Story, съёмка и монтаж Love Story;</p>
															<p>- Хранение исходных материалов и файлов проекта на нашем сервере - <br>до 2 месяцев.</p>
													</div>
											</div>
									</div>
									
					</div>
	</section>
  </div>
 <?php 
	include('includes/footer.php');
?>
