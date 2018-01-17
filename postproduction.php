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
  
  <!-- ПОЛОСА С ФОТО -->
  <section class="hidden-xs" id="sub_header_postproduction">
		<div class="container">
				<div class="cover">
						<div class="title">
							Серьёзная работа над вашим видео
						</div>
						<div class="subtitle">
						  не только до, но и после съёмок
						</div>
				</div>  
		</div>  
  </section>

  <section class="hidden-xs" id="portfolio">
					<div class="container">
					<h2>Обработка видео,</h2>
						<h5>не упуская ни одной мелочи</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/123977857?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Showreel PostProduction 2014</p>
													</div>
											</div>
									</div>
									
					</div>
	</section>

	<section class="visible-xs" id="portfolio">
					<div class="container">
					<h2>Обработка видео,</h2>
						<h5>не упуская ни одной мелочи</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/123977857?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>
									
									
					</div>
	</section>
  </div>
 <?php 
	include('includes/footer.php');
?>
