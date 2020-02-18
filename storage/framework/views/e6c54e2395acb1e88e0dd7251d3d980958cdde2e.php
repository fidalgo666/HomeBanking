<!DOCTYPE html>
<html lang="en">
<head>
<title>*PungaBANK*</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="homebanking banca movil banco"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
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

	<!-- Encabezado -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">PungaBANK</a>
						</h1>
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
									<li><a class="active" href="index.html">Home</a></li>
									<li><a href="about.html">Cuenta Unica</a></li>
									<li><a href="blog.html">Pago de Servicios</a></li>
									<li><a href="investments.html">Inversiones</a></li>
									<li><a href="contact.html">Contacto</a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
            <div class="banner-info">
                <div class="w3-banner-info">
                <div class="video-container">
                    <video autoplay loop muted>
                        <source src="/public/videos/PungaBank.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                    </video>
					<div class="overlay-desc">
                    <div class="slider">
                            <div class="callbacks_container">
                                <ul class="rslides callbacks callbacks1" id="slider4">
                                    <li>
                                        <div class="w3layouts-banner-info">
                                            <h3>Finanzas <br> Personales</h3>
                                            <p>Somos la Banca que te banca.</p>
                                            <div class="w3ls-button">
                                                <a href="about.html">INGRESAR</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="w3layouts-banner-info">
                                            <h3>BANCA DE <BR> PROFESIONALES</h3>
                                            <p>el lugar donde planificas. Desarrollate con nosotros.</p>
                                            <div class="w3ls-button">
                                                <a href="about.html">INGRESAR</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div     class="clearfix"> </div>
                                        <script>
                                            $(function () {
                                            // Slideshow 4
                                            $("#slider4").responsiveSlides({
                                                auto: true,
                                                pager:true,
                                                nav:false,
                                                speed: 400,
                                                namespace: "callbacks",
                                                before: function () {
                                                $('.events').append("<li>before event fired.</li>");
                                                },
                                                after: function () {
                                                $('.events').append("<li>after event fired.</li>");
                                                }
                                            });

                                            });
                                        </script>
                                        <!--comienzo de banner Slider -->

									</div>
									</div>
								</div>
							</div>
							</div>
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="https://www.facebook.com/pungabank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/pungabank"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
	</div>

	<!-- //encabezado -->
	<!-- Home -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h2>PRODUCTOS</h2>
			</div>
			<div class="w3lcome-grids">
				<div class="welcome-agile-row">
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left">
							<h4>COBRO DE SERVICIOS</h4>
							<p>Nuestro Sistema de Pagos (SP) está conformado por instrumentos y procedimientos de transferencias con el fin
							   de garantizarte la circulación de dinero.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right agileinfo-welcm-grid">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left agileinfo-welcm-grid2">
							<h4>FOREX - DIVISAS</h4>
							<p>Ponemos a tu disposicion el mercado de divisas, te ayudamos a conquistar el mercado mundial
							   y descentralizado en el que se negocian las mejores rentabilidades.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="welcome-agile-row2">
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left">
							<h4>asesoramiento</h4>
							<p>Conoce las mejores recomendaciones para maximizar tus decisiones, somos TESTER autorizados y reconocidos mundialmente.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right agileinfo-welcm-grid">
							<img src="images/5.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left agileinfo-welcm-grid2">
							<h4>solicitud de productos</h4>
							<p>Estamos pendientes de tus pedidos las 24Hs del dia. Confia tus necesidades, somos expertos desarrolladores.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Home -->
	<!-- servicios -->
	<div class="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Servicios</h3>
			</div>
			<div class="agileinfo-services-grids">
				<div class="services-top-grids">
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-money" aria-hidden="true"></i>
						<h4>CAMBIO</h4>
						<p>Spread. Conoce el precio de compra y el de venta de cualquier activo financiero​.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4>TIENDA</h4>
						<p>¿Queres potenciar tu tienda online? Seamos socios, te podemos ayudar</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-cc-paypal" aria-hidden="true"></i>
						<h4>PAYPAL</h4>
						<p>Asocia tus tarjetas de crédito a PayPal. No pierdas oportunidad de cobrar y/o pagar.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-cc-stripe" aria-hidden="true"></i>
						<h4>STRIPE</h4>
						<p>Recibi pagos de tus clientes sin necesidad de rellenar complicados formularios.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-bottom-grids">
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h4>FORO</h4>
						<p>¿Tenés dudas? Ingresa al foro e interactua con otros clientes.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						<h4>SOCIAL</h4>
						<p>Somos transparentes. Conocé qué hablan nuestros clientes.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-asterisk" aria-hidden="true"></i>
						<h4>LETRA CHICA</h4>
						<p>Conocé toda la letra chica de nuestros contratos.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<h4>CONTACTO</h4>
						<p>Conocé y contacta a nuestros responsables.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //servicios -->
	<!-- testimonios -->
	<div class="jarallax testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-heading testimonial-heading">
					<h3>UX - Testimonios</h3>
				</div>
				<div class="w3-agile-testimonial">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/14.jpg" alt="" />
										</div>
									</div>
									<div class="testimonial-img-info">
										<p>Gracias a *PungaBANK* pude ordenar mis finanzas personales.<br> Adquiri experiencia como inversora y conoci nuevos proveedores.</p>
										<h5>Marcos Guptill</h5>
										<h6>Comerciante</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/15.jpg" alt="" />
										</div>
									</div>
									<div class="testimonial-img-info">
										<p>Logre aplicar para lineas de credito mas amplias.<br> Conoci colegas en rondas de cafe organizadas por *PungaBANK*. </p>
										<h5>Kael Kewen</h5>
										<h6>Estudiante Abogacia</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/16.jpg" alt="" />
										</div>
									</div>
									<div class="testimonial-img-info">
										<p>Gracias a *PungaBANK* logre financiar los sueños de mis hijos <br> y ellos aprendieron sobre finanzas personales.</p>
										<h5>Ramona Flandicc</h5>
										<h6>Empleada Administrativa</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
									$(function () {
									  // Slideshow 4
									  $("#slider3").responsiveSlides({
										auto: true,
										pager:false,
										nav:false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });

									});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonios -->
	<!-- noticias -->
	<div class="news">
		<div class="container">
			<div class="agileits-heading">
				<h3>Noticias & Eventos</h3>
			</div>
			<div class="w3-agileits-news-grids">
				<div class="col-md-6 news-left">
					<div class="w3-agile-news-date">
						<div class="agile-news-icon">
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<p>'19 Nov 24</p>
						</div>
						<div class="agileits-line"> </div>
						<div class="agile-news-icon">
							<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
							<p>259</p>
						</div>
						<div class="agileits-line"> </div>
						<div class="agile-news-icon">
							<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
							<p>8482</p>
						</div>
					</div>
					<div class="w3-agile-news-img">
						<a href="#"><img src="images/5.jpg" alt="" /></a>
						<h4><a href="#">now, educacion financiera. primeros workshop en casa.<br> ponemos a tu disposicion a los ejecutivos mas didacticos. pregunta todo.</a></h4>
						<p>Elegir una entidad donde depositar tus ahorros no es una decisión fácil. Ahora vas a poder conocer de primera mano algunos pequeños secretos bancarios
                           que necesitas conocer para hacer una mejor elección, o simplemente despejarte esas dudas tipicas...todo en la comodidad de tu casa.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-right">
					<div class="news-right-grid">
						<a href="#">Warning con la ayuda de terceros desconocidos. Enterate qué hacer.</a>
						<h5>06th Nov,2019</h5>
						<p>Accede a la nueva clase de seguridad personal. Tenemos tips imbatibles para que en casos extremos, sepas como defenderte. </p>
					</div>
					<div class="news-right-grid">
						<a href="#">Primeros pasos en el *PungaBANK* para principiantes</a>
						<h5>17th Nov,2019</h5>
						<p>Tenemos un programa de beneficios gratuito en el que sumás puntos para poder canjear por ahorros en marcas o rubros,
						   productos físicos, vuelos, hoteles, cuotificar tus viajes y mucho más.</p>
					</div>
					<div class="news-right-grid">
						<a href="#">Degustacion de vinos & cervezas. Anotate.</a>
						<h5>29th Nov,2019</h5>
						<p>Una vez mas, junto a la cadena de vinotecas "Enogarage", lanzan la segunda edición de su exclusivo ciclo de catas.
						   La degustación tendrá lugar el miércoles 31 de noviembre a las 19.30 horas en enoGarage Palermo (Seguí 3.572).
						   La misma será exclusiva para nuestros clientes, ya que habrá únicamente 15 lugares disponibles, que serán sorteados entre los
						   que se suscriban con anticipacion.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //noticias -->

	<!-- direccion -->
		<div class="address">
			<div class="col-md-4 address-left">
				<h4>Sede Matriz</h4>
				<ul>
					<li><i class="fa fa-map-marker"></i> 461 Chacabuco, San Telmo Town, CABA, ARGENTINA</li>
					<li><i class="fa fa-phone"></i> +1 800 222 9009</li>
					<li><i class="fa fa-envelope-o"></i> <a href="mailto:HERNAN.FIDALGO@mail.com"> hernan.fidalgo@gmail.com</a></li>
				</ul>
			</div>
			<div class="col-md-8 address-right">
				<h4>Newsletter</h4>
				<p>Suscribite con tu email y te enviaremos el newsletter de cada semana</p>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Ingrese su Email..." required="">
					<input type="submit" value="Suscribirme">
				</form>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //direccion -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<h3><a href="index.html">Home Banking</a></h3>
				<p>© 2019 Hernan Fidalgo. All rights reserved | Design by <a href="https://behance.net/hernanFidalgo">PORTFOLIO</a></p>
				<div class="social-icons">
					<ul>
						<li><a href="https://www.facebook.com/pungabank" class="fa fa-facebook icon icon-border facebook"> </a></li>
						<li><a href="https://twitter.com/pungabank" class="fa fa-twitter icon icon-border twitter"> </a></li>
					</ul>
					<p>GRACIAS POR ELEGIRNOS | VUELVE PRONTO</p>
				</div>
			</div>
		</div>
		<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">

		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
    <!-- Whatsapp widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+5491150019009", // WhatsApp number
                call_to_action: "Escríbenos!",
                position: "right",
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /Whatsapp widget -->

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/sites/coderhouse/homebanking/resources/views/index.blade.php ENDPATH**/ ?>