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
  
  <!-- ПОЛОСА С ФОТО -->
  <section id="sub_header_reviews">
		<div class="container">
				<div class="cover">
						<div class="title">
								Видеообзоры любых мероприятий
						</div>
						<div class="subtitle">
						Мощно! Бодро! Сочно!
						</div>
				</div>  
		</div>  
  </section>
  
  <section id="technic">
 		 <div class="container">
				<h2>Большой опыт</h2>
				<h5>и всё необходимое оборудование для репортажной съёмки мероприятий любого типа</h5>
				<div class="row mb30" >
						<div class="col-md-4 col-sm-6  col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/voice.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
						</div>
						
						<div class="col-md-4 col-sm-6  col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/all2.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
						</div>

						<div class="col-md-4 col-sm-6  col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/flash.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
						</div>
					
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/aero.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/stedic2.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/complect.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
							</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/complect2.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/kran.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="technic">
									<div style="background:url(img/technic/monitor.jpg) no-repeat; background-size: cover; min-height: 300px;"></div>
								</div>
						</div>

				</div>
 		 </div>
  </section>
 <?php 
	include('includes/footer.php');
?>