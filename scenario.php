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
  
  <section id="services">
					<div class="container">
					<h2 class="mb30">Наши сценарии</h2>
									<div class="row mb30" >

											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb15">
														<div class="scenario_block">
															<h3> &#xf1c1; </h3>
															<h5><a href="docs/Stsenariy_Polo_kuntsevo.pdf" alt="Сервис ТЦ Кунцево" title="Сервис ТЦ Кунцево">Сервис <br>"ТЦ Кунцево"</a></h5>
														</div>
											</div>

											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb15">
														<div class="scenario_block">
															<h3> &#xf1c1; </h3>
															<h5><a href="docs/GonkaGeroev.pdf" alt="Гонка Героев 2017" title="Гонка Героев 2017">Гонка Героев 2017</a></h5>
														</div>
											</div>
											
									</div>
									

									
					</div>
	</section>
  </div>
 <?php 
	include('includes/footer.php');
?>
