<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>D.O.C | WB</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<script>try{Typekit.load();}catch(e){}</script>
		<script src="js/jquery.min.js"></script>
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
		<title></title>
	</head>
	<body>
		<?php
			include 'modules/heading.php';
			include 'modules/navbar.php';
		?>
		<div class="title" align="center">
			<h1>Photo Gallery</h1>
		</div>

		<div class="col-md-12 col-xs-12">
			<div class="col-md-3 col-xs-12"  style="padding-top:5%;">
				<?php
					include 'modules/leftsidebar.php';
				?>
			</div>
			<div class="col-md-8 col-xs-12" style="border-left: 10px double #077FFF; margin:1%;" align="center">
				<?php
					include 'modules/gallery-list.php';
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