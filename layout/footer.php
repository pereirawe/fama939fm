	
	<div id="footer" class="container-fluid bars">
			
			<div class="container">
				<div class="col-md-9">
					<span id="copyright">Todos los Derechos Reservados por <strong><a href="http://fama939fm.com/"> Fama 93.9 FM</a></strong><br>
					Desarrollo web <strong><a href="http://www.ledcreativo.com.ve" target="blank">LEDCreativo</a></strong></span>
				</div>

				<div class="col-md-3">
				<div class="pull-right">
					<a href="https://www.instagram.com/fama939fm/" target="_blank"><span class="btn-social btn-instagram img-circle center pull-right"></span></a>
					<a href="https://twitter.com/fama939fm" target="_blank"><span class="btn-social btn-twitter img-circle center pull-right"></span></a>
					<a href="http://tunein.com/radio/Fama-939-s143767/" target="_blank"><span class="btn-social btn-tunein img-circle center pull-right"></span></a>
				</div>
			</div>
			</div>
		</div>


<script>
    var dispositivo = navigator.userAgent.toLowerCase();
	if( dispositivo.search(/iphone|ipod|ipad|android/) > -1 ){
		if (confirm("Escuchar desde tu Iphone, Blackberry o Android!") == true) {
        	window.location = "https://dassono.com/loadstr.php?clip=famafm.stream";
    	};		
    };
</script>

<script>
		var dispositivo = navigator.userAgent.toLowerCase();
		if( dispositivo.search(/windows|mac|linux/) > -1 ){
		document.getElementById("player").innerHTML = "<iframe src='http://streaming.dassono.com/video_handler/live_transmision_nodb.php?clip=famafm.stream&video=0&color=000000' width='370' height='150' scrolling='auto'  frameborder='0' ><p>Tu browser no acepta frames.. trata con FireFox, Opera o IE.</p></iframe>";
		};
	</script>

	   

</body>
<html>