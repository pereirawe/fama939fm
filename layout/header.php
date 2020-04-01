<!DOCTYPE html>
<!--[if lt IE 7]>      	<html class="no-js html-loading wf-active ie old-browser lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="es-ES"> <![endif]-->
<!--[if IE 7]>         	<html class="no-js html-loading wf-active ie old-browser ie7 lt-ie10 lt-ie9 lt-ie8" lang="es-ES"> <![endif]-->
<!--[if IE 8]>         	<html class="no-js html-loading wf-active ie old-browser ie8 lt-ie10 lt-ie9" lang="es-ES"> <![endif]-->
<!--[if IE 9]>			<html class="no-js html-loading wf-active ie modern-browser ie9 lt-ie10" lang="es-ES"> <![endif]-->
<!--[if gt IE 9]>		<html class="no-js html-loading wf-active modern-browser" lang="es-ES"> <!--<![endif]-->

<html lang="es-ve">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php global $site_title; echo $site_title; ?></title>
				
		<?php fp_componets() ?>
		
		<!--Google Analytics-->
        
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-75456229-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		
		
		<!--PAW-->
		<link rel="stylesheet" href="https://github.com/shaunmorrison/PaW-Carousel/blob/master/public/css/pawcarousel.css">
		<!--You can use jQuery 2.x as well if you don't want to support older browsers -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://github.com/shaunmorrison/PaW-Carousel/blob/master/public/js/pawcarousel.jquery.min.js"></script>
		<script>
		$(function(){
			$('.paw-carousel').pawCarousel();
			// If you want to add another carousel on the same page
			$('.paw-carousel-2').pawCarousel();
		});
		</script>
		
		
	</head>
	<body>
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=326087810870308";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

		<header>
			<div class="container-fluid bars">
				<div class="container">
					 <a href="tel:(+58)414-6176970"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;<span>(+58)414-6176970</span></a>
					 &nbsp;&nbsp;
	                 <a href="tel:(+58)261-8149314"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;<span>(+58)261-8149314</span></a>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-8" id="logo">
						<a href="http://fama939fm.com/"><img src="./img/logo.png" alt="Fama 93.9 FM"></a>
					</div>
					<div class="col-md-4" id="player"></div>
				</div>
			</div>
		</header>





