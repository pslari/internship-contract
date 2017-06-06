<!DOCTYPE html>

	<?php $page = 2; ?>

<html lang="en">
	<head>
		<title> ข้อมูลโครงการ </title>
		<?php include 'config/header.php' ?>
	</head>
	<body>
		<?php include 'navbar.php' ?>
		<div class = 'container'>
			<div class = 'page-header'>
				<h1> ข้อมูลโครงการ </h1>
			</div>

			<!-- TABLE HERE -->
			<?php include 'dataTable.html' ?>

		</div>
		
	</body>

	<footer class='footer'>
		
	</footer>
	<?php include 'config/footer.php' ?>
</html>