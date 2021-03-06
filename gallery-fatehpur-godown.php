<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>D.O.C | WB</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link href="css/gallery.css" rel="stylesheet" type="text/css" />
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
		<title></title>
	</head>
	<body>
		<?php
			include 'modules/heading.php';
			include 'modules/navbar.php';
		?>
		<div class="title" align="center">
			<h1>Fatehpur Godown RIDF</h1>
		</div>

		<div class="col-md-12 col-xs-12">
			<div class="col-md-3 col-xs-12"  style="padding-top:5%;">
				<?php
					include 'modules/leftsidebar.php';
				?>
			</div>
			<div class="col-md-8 col-xs-12" style="border-left: 10px double #077FFF; padding-top:5%; margin:1%;">
				<div class="container" id="container">    
			        <div class="gallery">
			            <a tabindex="1"><img src="images/fatehpur/1.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/2.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/3.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/4.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/5.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/6.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/7.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/8.jpg"></a>
			            <a tabindex="1"><img src="images/fatehpur/9.jpg"></a>
						            <span class="close"></span>
			        </div>
			    </div>
			    <br>
			    <h3 style="font-family: Times New Roman"><strong><a href="gallery.php">Go Back to Gallery</a></strong></h3>
			</div>
		</div>
		<div class="col-md-12 col-xs-12" style="margin: 0px">
			<?php
				include 'modules/footer.php';
			?>
		</div>
		<script src="js/jquery.min.js"></script> 
	</body>
</html>