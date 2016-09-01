<!DOCTYPE html>
<html>
<head>
	<title>D.O.C | About Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<style type="text/css">
		@font-face {
			font-family: TrajanProRegular;
			src:url(fonts/TrajanPro-Regular.otf);
		}

		@font-face {
			font-family: TrajanProBold;
			src:url(fonts/TrajanPro-Bold.otf);
		}

		@font-face {
			font-family: Shonar;
			src:url(fonts/Shonar.ttf);
		}
		.title {
			background:url('images/header_banner.jpg'); 
			font-family:TrajanProBold; 
			padding: 3.75%;
			color: #B7B5B5;
		}
	</style>
</head>
<body>
	<?php
		include 'modules/heading.php';
		include 'modules/navbar.php';
	?>
	<div class="title" align="center">
		<h1>About Us</h1>
	</div>

	<div class="col-md-12 col-xs-12">
		<div class="col-md-3 col-xs-12"  style="padding-top:5%;">
			<?php
				include 'modules/leftsidebar.php';
			?>
		</div>
		<div class="col-md-8 col-xs-12" style="border-left: 10px double #077FFF; padding-top:5%; margin:1%;">
			<?php
			include 'modules/aboutus-content.php';
			?>
		</div>
	</div>
	<div class="col-md-12 col-xs-12" style="margin: 0px">
		<?php
			include 'modules/footer.php';
		?>
	</div>
</body>
</html>