<?php
	$site_url = "http://$_SERVER[HTTP_HOST]";
	$site_header = $_SERVER['DOCUMENT_ROOT']."/layout/header.php";
	$site_footer = $_SERVER['DOCUMENT_ROOT']."/layout/footer.php";
	function site_header(){
		global $site_header;
		include $site_header;
}
	function site_footer(){
		global $site_footer;
		include $site_footer;
	}
	function fp_componets(){
		global $site_url;
		echo 	"<link rel='shortcut icon' href='".$site_url."/favicon.ico' />
				 <link rel='stylesheet' href=".$site_url."/framepop/css/bootstrap.css />
				 <link rel='stylesheet' href=".$site_url."/framepop/css/bootstrap.min.css />
				 <link rel='stylesheet' href=".$site_url."/framepop/css/carousel.css />
				 <link rel='stylesheet' href=".$site_url."/framepop/css/blueimp-gallery.min.css />
				 <link rel='stylesheet' href=".$site_url."/style.css />
				 <link rel='stylesheet' href='style.css' />
				 <script src='".$site_url."/framepop/js/ie-emulation-modes-warning.js'></script>
				 <script src='".$site_url."/framepop/js/2.1.3/jquery.min.js'></script>
				 <script src='".$site_url."/framepop/js/bootstrap.min.js'></script>
				";
	}	
?>