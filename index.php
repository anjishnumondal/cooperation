<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>D.O.C | WB</title>
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
	</style>
</head>
<body>
	<?php
		include 'modules/heading.php';
		include 'modules/navbar.php';
	?>
	<img src="images/Index/index.jpg" style="width:100%;">

	<div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:5%; padding-bottom: 2% ">
		<div class="col-md-3 col-xs-12">
			<?php
				include 'modules/leftsidebar.php';
			?>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<?php
				include 'modules/index-content.php';
			?>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php
				include 'modules/bulletin.php';
			?>
		</div>
	</div>
	<div class="col-md-12 col-xs-12">
		<?php
			include 'modules/index-depts.php'
		?>
	</div>
	<div class="col-md-12 col-xs-12" style="margin: 0px">
		<?php
			include 'modules/footer.php';
		?>
	</div>

</body>
</html>