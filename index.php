<!DOCTYPE html>
<html lang="ru">
<?php 
	include('includes/header.php');
?>
 <!-- Главное меню -->
		<nav class="navbar navbar-dark navbar-full hidden-md hidden-sm hidden-xs" id="nav-main">
			<div class="container">
				<ul class="nav navbar-nav">
					<?php include('includes/nav/nav_index.php'); ?>
			  </ul>
			</div>
        </nav>       
<?php 
	include('includes/feedback.php');
?>
	
  <div id="main" class="clearfix">
 	<?php 
	include('includes/index_info.php');
?>
  </div>
 <?php 
	include('includes/footer.php');
?>
  </body>
</html>