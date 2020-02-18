<!DOCTYPE html>
<html lang="en">
<head>
<title>*BRAND BANK*</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="homebanking banca movil banco"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

</head>
<body>
	<!-- encabezado -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">BRAND BANK</a>
						</h1>
					</div>
					<div class="agileinfo-phone">
						<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +549 11 50019009</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Enlaces de navegación, formularios y otro contenido -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="../index.html">Home</a></li>
									<li><a href="../about.html">Cuenta Unica</a></li>
									<li><a class="active" href="../blog.html">Pago de Servicios</a></li>
									<li><a href="../investments.html">Inversiones</a></li>
									<li><a href="../contact.html">Contacto</a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>                
    </div>

<?php
    if (!empty($_POST["nombre"])){ 
        echo "<br>"; 
        echo "Ud. pagó a: " . $_POST["nombre"];
        echo "<br>"; 
        echo "El vencimiento de su factura es: " . $_POST["fecha"];
        echo "<br>"; 
        echo "Ud. pagó el monto de: $" . $_POST["numero"];
        echo "<br>"; 
        echo "El reciente pago se acreditará durante las próximas 48/72Hs hábiles."; 
        echo "<br>"; 
    } else  {
    echo "Hay un problema con la selección que realizó!";
            }
?>
<!--PUEDE INGRESARSE EN EL "$_POST"  -->
</div>

<script>
alert("¡¡LA OPERACION HA SIDO EXITOSA!!");
</script>

		<!-- footer -->
		<div class="footer">
			<div class="container">
				<h3><a href="../index.html">Home Banking</a></h3>
				<p>© 2019 Hernan Fidalgo. All rights reserved | Design by <a href="https://behance.net/hernanFidalgo">PORTFOLIO</a></p>
				<div class="social-icons">
					<ul>
						<li><a href="https://www.facebook.com/brandbank" class="fa fa-facebook icon icon-border facebook"> </a></li>
						<li><a href="https://twitter.com/brandbank" class="fa fa-twitter icon icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
						<li><a href="https://dribbble.com/" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
						<li><a href="#" class="fa fa-rss icon icon-border rss"> </a></li>
					</ul>
					<p>GRACIAS POR ELEGIRNOS | VUELVE PRONTO</p>
				</div>
			</div>
		</div>
		<!-- //footer -->	
	<script src="../js/responsiveslides.min.js"></script>
	<script src="../js/jarallax.js"></script>
	<script src="../js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
	
		$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
</body>	
</html>