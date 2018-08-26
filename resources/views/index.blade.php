<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>My Little Friends</title>			
		<!-- Latest Bootstrap min CSS -->
		<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >		
		<!-- Google Font -->
		<link href="{{('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700')}}" rel='stylesheet' type='text/css'>
		<link href="{{('https://fonts.googleapis.com/css?family=Dosis:400,300,600,700')}}" rel='stylesheet' type='text/css'>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
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
								<li><i class="fa fa-phone"></i><a href="mailto:info@yourdomain.com"></a></li>
								<li><i class="fa fa-phone"></i>(+593) 99 723 0626</p>
								</li>
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
						<h4 class="login_register_title">Usuarios registrados-Inicio Sesión</h4>
						<div class="form-group">
							<input type="text" class=" form-control requiredField input-label" placeholder="Usuario" name="usuario">
						</div>
						<div class="form-group">
							<input type="password" class="form-control requiredField input-label" placeholder="Contraseña" name="password" >
						</div>
						<div class="form-group mbnone">
							<a href="{{('administracion/index.html')}}" class="btn btn-popup-bg">Iniciar Sesion</a>
							<!--<button class="btn btn-popup-bg" type="submit" name="submit">Inicia sesión</button>-->
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
							<h4 class="login_register_title">Registrarse:</h4>
							<div class="form-group">
								<input type="text" class=" form-control requiredField input-label" placeholder="Usuario" name="usuario">
							</div>
							<div class="form-group">
								<input type="text"  class=" form-control requiredField input-label" placeholder="Nombre y apellidos" name="nombre y apellido">
							</div>
							<div class="form-group">
								<input type="email" class="form-control requiredField input-label" placeholder="Dirección" name="dirección" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control requiredField input-label" placeholder="Correo Electronico" name="email" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control requiredField input-label" placeholder="Contraseña" name="contraseña" >
							</div>

							<div class="form-group mbnone">
								<button class="btn btn-popup-bg" type="submit" name="submit">Registrate</button>
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
					<a href="index.html" class="navbar-brand"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
				</div>
				<div class="navbar-collapse collapse">
					<nav>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" href="/">Inicio</a>
								
							</li>
							<li><a class="page-scroll" href="login/index.html">Preinscripción</a>
								

							</li>						
							<li><a class="page-scroll" href="Servicios">Servicios</a>
								<ul class="sub-menu">
									<li><a href="index_video.html"></a>Estimulación</li>
									<li><a href="index_video.html"></a>Área Cognitiva</li>
									<li><a href="index_video.html"></a>Área Motriz</li>
									<li><a href="index_video.html"></a>Área de Lenguaje</li>
									<li><a href="index_video.html"></a>Área Socio-Emocional</li>
									<li><a href="index_video.html"></a>Estimulación Acuática</li>
									<li><a href="index_video.html"></a>Vistas Pedagógicas</li>
									<li><a href="index_video.html"></a>Médico y Psicilógico</li>


								</ul>
								
							</li>

							
							
																				
							<li><a class="page-scroll" href="Eventos">Eventos</a></li>												
							<li><a class="page-scroll" href="Contactos">Contacto</a></li>
						</ul>
					</nav>
				</div> 
			</div><!--- END CONTAINER -->
		</div> 
		<!-- END NAVBAR -->
		
		<!-- START HOME -->
		<section id="home" class="welcome-area">
			<div class="welcome-slider-area">
				<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators carousel-indicators-slider">
						<li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
						<li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="single-slide-item slide-1">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-2">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-3">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END  HOME DESIGN -->

		<!-- START PROMOTION -->	
		<section class="promotion section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="single_promo">
							<h1><strong> BIENVENIDOS A  MY LITTLE FRIENDS</strong></h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END PROMOTION -->	
		
		<!-- START ACTIVITES  -->
		<section class="our_activites">
			<div class="container">
				<div class="row text-center">
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_activites single_activites_color_one">
							<i class=""></i>
							<h4>MISIÓN</h4>
							<p>Ser una institución de alto nivel, al servicio de la comunidad, que con propuestas educativas innovadoras, valores y el fortalecimiento de la efectividad, formar a niños y niñas competitivas y lideres del presente y futuro.</p>
						</div>
					</div><!--END COL -->
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_activites single_activites_color_three">
							<i class=""></i>
							<h4>VISIÓN</h4>
							<p>Trabajar con amor al servicio de los niños , proporcionandoles la atención y cuidado que merecen, con el objetivo de conseguir su desarrollo integral potenciado a todas las áreas del conocimiento, cognitivo,motriz y efectivo en nuestros niños.</p>
						</div>
					</div><!--END COL -->
					
					
				</div><!--END  ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END ACTIVITES-->		

		<!-- START PORTFOLIO -->
		<section id="portfolio" class="template_portfolio section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center wow zoomIn">
						<h2>Galeria</h2>
						<span></span>
						
					</div>						
					<ul class="portfolio-filters text-center">
						
					</ul>
					<!-- END PORTFOLIO FILTER-->
					<div class="grid">
						<div class="col-md-4 col-sm-4 mix class painting">
							   <div class="image-wrapper">
									<img src="{{asset('/img/portfolio/1.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/1.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix video">
							   <div class="image-wrapper">
									<img src="{{asset('img/portfolio/2.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/2.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix painting">
							   <div class="image-wrapper">_
									<img src="{{asset('/img/portfolio/3.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/3.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="image-wrapper">
									<img src="{{asset('/img/portfolio/4.jpg')}}" class="img-responsive" alt="work">
									<div class="image-overlay">
								<div class="col-md-4 col-sm-4 mix video painting">
								   <span>
								   <a href="{{asset('/img/portfolio/4.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix  sports">
							   <div class="image-wrapper">
									<img src="{{asset('/img/portfolio/5.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/5.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix class painting">
							   <div class="image-wrapper">
									<img src="{{asset('/img/portfolio/6.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/6.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix sports video">
							   <div class="image-wrapper">
									<img src="{{asset('/img/portfolio/7.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/7.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix class painting">
							   <div class="image-wrapper">
									<img src="{{asset('/img/portfolio/8.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/8.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
						<div class="col-md-4 col-sm-4 mix class painting">
							   <div class="image-wrapper">
									<img src="{{asset('/img/portfolio/9.jpg')}}" class="img-responsive" alt="work">
							   <div class="image-overlay">
								   <span>
								   <a href="{{asset('/img/portfolio/9.jpg')}}" class="image-popup"></a>
								   </span>
								</div>
							  </div>
						</div> <!--work item-->
					 </div><!--/.grid-->		
				</div><!--- END ROW -->	
								
			</div><!--- END CONTAINER -->
		</section>
		<!-- START PORTFOLIO -->

		<!-- START COUNDOWN --> 
		
		<!-- END COUNDOWN -->

		<!-- START TEAM -->
		
		<!-- END TEAM -->

		<!-- START EVENT -->
		
		<!-- END EVENT -->

		<!-- START TESTIMONIAL -->
       
		<!-- END TESTIMONIAL -->
		
		<!-- START CLASS -->
		<section class="our_blog section-padding">
			<div class="container">		
				<div class="row">
					<div class="section-title text-center">
						<h2>Nuestras Clases</h2>
						<span></span>
						<p> Son realizadas interactivas y practicas con trabajos.</p>
					</div>	
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-blog">
							<div class="single-img">
								<img src="{{asset('/img/class/1.jpg')}}" class="img-responsive" alt=""/>
								<div class="post-date">
									<h4><strong>Deportes</strong></h4>
								</div>									
							</div>	
						</div>
					</div><!-- END COL -->					
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-blog">
							<div class="single-img">
								<img src="{{asset('/img/class/2.jpg')}}" class="img-responsive" alt=""/>
								<div class="post-date">
									<h4><strong>Niños Creativos</strong>    </h4>
								</div>								
							</div>	
						</div>
					</div><!-- END COL -->				
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-blog">
							<div class="single-img">
								<img src="{{asset('/img/class/3.jpg')}}" class="img-responsive" alt=""/>
								<div class="post-date">
									<h4><strong>Concursos</strong> </h4>
								</div>								
							</div>	
						</div>
					</div><!-- END COL -->			
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END CLASS -->

		<!-- START CONTACT ADDRESS -->
		<div class="contact-address section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_one">
							<i class="fa fa-phone"></i>
							<p>TELÉFONO</p>
							<p>(+593) 99 723 0626</p>
							<p>(+593) 7 2571014</p>
						</div>
					</div><!-- END COL  -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_three">
							<i class="fa fa-rocket"></i>
							<p>DIRECCIÓN</p>
							<p> Rocafuerte y Orillas del Zamora(Frente la salle) </p>
						</div>
					</div><!-- END COL  -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_two">
							<i class="fa fa-envelope"></i>
							<p>CORREO ELECTRÓNICO</p>
							<p>Info@bornomala.com</p>
							<p>Info@bornomala.com</p>
						</div>
					</div><!-- END COL  -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address single_activites_color_four">
							<i class="fa fa-clock-o"></i>
							<p>HORARIOS</p>
							<p>Lunes - Viernes</p>
							<p>08:00 - 18:00</p>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</div>
		<!-- END CONTACT ADDRESS -->
		
	
		
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
		<!-- scripts js -->
			<script src="{{asset('/js/scripts.js')}}"></script>
    </body>
</html>
