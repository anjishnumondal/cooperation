<!DOCTYPE html>
<html>
<head>
	<title>D.O.C | WB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
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
		include 'heading.php';
		include 'navbar.php';
	?>
	<img src="images/Index/banner.jpg" style="width:100%;">

	<div class="col-md-12 col-xs-12" style="padding-top:5%; ">
		<div class="col-md-3 col-xs-12">
			<?php
				include 'leftsidebar.php';
			?>
		</div>
		<div class="col-md-6 col-xs-12">
			<?php
				include 'index-content.php';
			?>
		</div>
		<div class="col-md-3 col-xs-12">
			<?php
				include 'bulletin.php';
			?>
		</div>
	</div>
	<div class="col-md-12 col-xs-12" style="margin: 0px">
		<?php
			include 'footer.php';
		?>
	</div>

</body>
</html>