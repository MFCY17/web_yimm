<!DOCTYPE html>
<html lang="zxx">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Bornomala - Kindergarten & School HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >		
		<!-- Google Font -->
		<link href='{{('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700')}} rel='stylesheet' type='text/css'>
		<link href='{{('https://fonts.googleapis.com/css?family=Dosis:400,300,600,700')}} rel='stylesheet' type='text/css'>
		<!-- Font Awesome CSS -->
		<link  rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}" >
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{asset('owlcarousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('owlcarousel/css/owl.theme.css')}}">	
		<!-- magnific popup CSS -->	
		<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">				
		<!-- animate CSS -->		
		<link rel="stylesheet" href="{{asset('css/animate.css')}}">			
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">		
		<link rel="stylesheet" href="{{asset('css/responsive.css')}}">	
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		  <div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>  
		<!-- END PRELOADER -->	

		<!-- START COLOR -->	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
					<div class="color_one"></div>
				</div><!--- END COL -->		
				<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
					<div class="color_two"></div>
				</div><!--- END COL -->		
				<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
					<div class="color_three"></div>
				</div><!--- END COL -->		
				<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
					<div class="color_four"></div>
				</div><!--- END COL -->		
				<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
					<div class="color_five"></div>
				</div><!--- END COL -->		
				<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
					<div class="color_six"></div>
				</div><!--- END COL -->				  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
		<!-- END COLOR -->
		
		<!-- START HEADER -->
		<header class="header_area">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="top-info-left">
							<ul>
								<li><i class="fa fa-phone"></i><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
								<li><i class="fa fa-phone"></i>+593 99 723 0626</li>
								<li><i class="fa fa-clock-o"></i>Lunes a Viernes: 08:00 - 18:00</li>
							</ul>
						</div>
					</div><!--- END COL -->	
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="top-info-right">
							
						</div>
					</div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</header>
		<!-- START HEADER -->

		<!--- START POPUP TAB ONE  -->
		<div id="openModal" class="modalbg">
		  <div class="dialog">
				<a href="#close" title="Close" class="close">X</a>
				<div class="single_project_popup">
					<div class="login">
						<h4 class="login_register_title">Already a member? Sign in here</h4>
						<div class="form-group">
							<input type="text" class=" form-control requiredField input-label" placeholder="Username" name="name">
						</div>
						<div class="form-group">
							<input type="password" class="form-control requiredField input-label" placeholder="Enter Password" name="password" >
						</div>
						<div class="form-group mbnone">
							<button class="btn btn-popup-bg" type="submit" name="submit">login</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- END POPUP TAB ONE  -->
		
		<!--- START POPUP TAB TWO  -->
		<div id="openModaltwo" class="modalbg">
		  <div class="dialog">
				<a href="#close" title="Close" class="close">X</a>
				<div class="single_project_popup">
					<div class="register">
							<h4 class="login_register_title">Create a new account:</h4>
							<div class="form-group">
								<input type="text" class=" form-control requiredField input-label" placeholder="Username" name="name">
							</div>
							<div class="form-group">
								<input type="text"  class=" form-control requiredField input-label" placeholder="Enter Name" name="name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control requiredField input-label" placeholder="Enter Email" name="email" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control requiredField input-label" placeholder="Enter Password" name="password" >
							</div>
							<div class="form-group mbnone">
								<button class="btn btn-popup-bg" type="submit" name="submit">signup now</button>
							</div>
						</div>
				</div>
			</div>
		</div>
		<!--- END POPUP TAB TWO  -->

		<!-- START NAVBAR -->
		<div class="navbar navbar-default menu-top menu_dropdown">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand"><img src="{{asset('/img/logo.png')}}" alt="logo"></a>
				</div>
				<div class="navbar-collapse collapse">
					<nav>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" href="/">Inicio</a>
								
							</li>
												
							<li><a class="page-scroll" href="Servicios">Servicios</a></li>						
																	
							<li><a class="page-scroll" href="Eventos">Eventos</a></li>												
							<li><a class="page-scroll" href="Contactos">Contactos</a></li>
						</ul>
					</nav>
				</div> 
			</div><!--- END CONTAINER -->
		</div> 
		<!-- END NAVBAR -->
		
		<!-- START  HOME DESIGN -->
		<section class="section-top">
			<div class="container">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="section-top-title">
						<h2>Contactanos</h2>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<ol class="breadcrumb">
					  <li><a href="/">Inicio</a></li>
					  <li class="active">Contactanos</li>
					</ol>
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END  HOME DESIGN -->	

		<div id="map"></div>
		
		<!-- START CONTACT FORM AND MAP -->
		<section class="footer_contact_area section-padding">
			<div class="container-luid">
				<div class="row">	
					<div class="section-title text-center wow zoomIn">
						<h2>INFORMACIÓN</h2>
						<span></span>						
					</div>									
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<div class="footer_contact">
							<form id="contact-form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-12">
										<input type="text" name="Nombre y Apellidos" class="form-control" id="Nombre y Apellidos" placeholder="Nombre y apellido" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" class="form-control" id="Email" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="text" class="form-control" id="Tema" placeholder="Tema" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="mensaje" class="form-control" id="description" placeholder="Mensaje" required="required"></textarea>
									</div>
									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Enviar mensaje" name="submit" id="submitButton" class="btn  btn-contact-bg" title="Submit Your Message!" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL -->						
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END CONTACT FORM  AND MAP -->

		<!-- START CONTACT ADDRESS -->
		<div class="contact-address section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_one">
							<i class="fa fa-phone"></i>
							<p>(+593) 99 723 0626</p>
							<p>(+593) 7 257 1014</p>
						</div>
					</div><!-- END COL  -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_three">
							<i class="fa fa-rocket"></i>
							<p>Rocafuerte y Orillas del Zamora(Frente la salle)</p>
						</div>
					</div><!-- END COL  -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_two">
							<i class="fa fa-envelope"></i>
							<p>Info@bornomala.com</p>
							<p>Info@bornomala.com</p>
						</div>
					</div><!-- END COL  -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_four">
							<i class="fa fa-clock-o"></i>
							<p>Lunes - Viernes</p>
							<p>08:00 - 18:00</p>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</div>
		<!-- END CONTACT ADDRESS -->
		
		<!-- START FOOTER TOP -->
		<footer class="footer-top section-padding">
			<div class="container">
				<div class="row">				
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single_footer">
							
						</div>	
					</div><!--- END COL -->
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single_footer">
							
						</div>	
					</div><!--- END COL -->
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single_footer">
							
						</div>	
					</div><!--- END COL -->
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="single_footer">
							
						</div>	
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</footer>
		<!-- END FOOTER TOP -->
		
		<!-- START FOOTER BOTTOM -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 wow zoomIn">
						<p class="footer_copyright">Sitio web &copy; 2018 Realizado por: Yanixa Manzanilla.</p>		
					</div><!--- END COL -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow zoomIn">
						<div class="footer_social">
							<ul>
								<li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a data-toggle="tooltip" data-placement="top" title="Twitter"  href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a data-toggle="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
								</li>
								<li><a data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
								</li>
								<li><a data-toggle="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a>
								</li>
							</ul>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</footer>
		<!-- END FOOTER BOTTOM-->	
		 
		<!-- Latest jQuery -->
			<script src="{{asset('/js/jquery-1.12.4.min.js')}}"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>														
		<!-- countTo js -->
			<script src="{{asset('/js/jquery.inview.min.js')}}"></script>			
		<!-- owl-carousel min js  -->
			<script src="{{asset('/owlcarousel/js/owl.carousel.min.js')}}"></script>	
		<!-- magnific-popup js -->               
			<script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- jquery mixitup js -->   
			<script src="{{asset('/js/jquery.mixitup.min.js')}}"></script>	
		<!-- scrolltopcontrol js -->
			<script src="{{asset('/js/scrolltopcontrol.js')}}"></script>										
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="{{asset('/js/wow.min.js')}}"></script>
		<!-- form-contact js -->
			<script src="{{asset('/js/form-contact.js')}}"></script>			
		<!-- map js -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>				
		<!-- scripts js -->
			<script src="{{asset('/js/scripts.js')}}"></script>
			<script type="text/javascript">
				/*START GOOGLE MAP*/
				function initialize() {
				  var mapOptions = {
					zoom: 15,
					scrollwheel: false,
					center: new google.maps.LatLng(-3.9981675,-79.1970805)
				  };
				  var map = new google.maps.Map(document.getElementById('map'),
					  mapOptions);
				  var marker = new google.maps.Marker({
					position: map.getCenter(),
					icon: "{{asset('/img/map_pin.png')}}",
					map: map
				  });
				}
				google.maps.event.addDomListener(window, 'load', initialize);	
				/*END GOOGLE MAP*/	
			</script>
    </body>
</html>
