<?php 
	include('includes/header.php');
?>
<!-- Главное меню -->
		<nav class="navbar navbar-dark navbar-full hidden-md hidden-sm hidden-xs" id="nav-main">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php include('includes/nav/nav_reviews.php'); ?>
			  </ul>
			</div>
        </nav>
        
	<!-- Подменю -->
		<nav class="navbar navbar-light navbar-full hidden-md hidden-sm hidden-xs" id="nav-second">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php 
						include('includes/submenu/submenu_reviews.php');
					?>

				</ul>
			</div>
        </nav>
<?php 
	include('includes/feedback.php');
?>
  <div id="main" class="clearfix">
  <!-- ПОЛОСА С ФОТО -->
					  <section class="hidden-xs" id="sub_header_venchanie">
							<div class="container">
									<div class="cover">
											<div class="title">
												Таинство венчания - 
											</div>
											<div class="subtitle">
												память на всю жизнь
											</div>
									</div>  
							</div>  
					  </section>
  
   <section class="hidden-xs" id="portfolio">
					<div class="container">
					<h2>Фильмы для тех,</h2>
						<h5>кто ценит воспоминания</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9 col-sm-12">
														<div>
															<iframe src="https://player.vimeo.com/video/190742394?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
											<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
													<div class="video_title">
														<p>Венчание</p>
													</div>
											</div>
									</div>
									
					</div>
	</section>

	<section class="visible-xs" id="portfolio">
					<div class="container">
						<h2>Таинство Венчания</h2>
						<h5>Фильмы для тех, <br>кто ценит воспоминания</h5>
									<!--1-->
									<div class="row mb30" >
											<div class="col-lg-8 col-md-9">
														<div>
															<iframe src="https://player.vimeo.com/video/190742394?title=0&byline=0&portrait=0" width="500" height="334" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														</div>
											</div>
									</div>
								
					</div>
	</section>
  </div>
 <?php 
	include('includes/footer.php');
?>
