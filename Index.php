<!DOCTYPE html>

<html lang="en">
<head>
	  <style>
       #map {
        height: 400px;
        width: 100%;
			}
    </style>
	<meta charset="utf-8">
	<title> Isaacs Admins - Inicio </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="./img/logo.png">
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	<script>

		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});

		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});

	</script>

</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">

		<!-- HEADER -->
		<header>

			<!-- MENU BLOCK -->
			<div class="menu_block">

				<!-- CONTAINER -->
				<div class="container clearfix">

					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="Index.html"><span class="b1" >I.E.D Jorge Isaacs</span><span class="b2"></span><span class="b3"></span><span class="b4"></span><span class="b5"></span></a>
					</div><!-- //LOGO -->


					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Inicio</a></li>
								<li class="scroll_btn"><a href="#about" >Nuestro Colegio</a></li>
								<li class="scroll_btn"><a href="#team" >Equipo</a></li>
								<li class="scroll_btn"><a href="#news" >Noticias</a></li>
								<li class="scroll_btn last"><a href="#contacts" >Contactanos</a></li>
								<li class="scroll_btn last"><a href="login.php" >Ingresar</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->


		<!-- HOME -->
		<section id="home" class="padbot0">

			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">Bienvenido</p>
							<p class="title2 captionDelay4 FromTop"></p>
							<p class="title4 captionDelay7 FromBottom">Institucion Educativa Distrital Jorge Isaac</p>
						</div>
					</li>

					<li class="slide2">
						<div class="flex_caption1">
							<!-- <p class="title1 captionDelay6 FromLeft">Objetivo General</p>
							<p class="title4 captionDelay7 FromLeft">Implementar un sistema de información en la Institución Educativa Distrital Jorge Isaac para una mejor administración de los datos (Certificado de Notas) de estudiantes actuales y egresados.</p>
						  -->
						</div>
					</li>

			</ul>
		 </div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="img/Fondo_Proyecto.jpg" alt="" /></li>
					<li><img src="img/Fondo_Imagen2.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->


		<!-- ABOUT -->
		<section id="about">

			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">

			<div class="cleancode_block">

				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">

					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>Institucion y Comunidad</b></p>
							<span class="Comentario1">El Colegio Distrital “Jorge Isaac” es una institución organizada horizontal y participativa en donde la moral humanística y el respeto hacia las diferencias son principios de formación. Este proyecto pedagógico al diseñarse  colectivamente pretenden traducir las ideas y necesidades de la comunidad en el proceso de formación, articulando trabajo escolar y vida cotidiana en proyectos de aula vinculados al desarrollo y servicio comunitario.
							</span>
						</div>

						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Mision</b></p>
							<span class="Comentario2">Somos un Colegio articulado con la educación superior (Instituto Tecnológico de Soledad - SENA). Formamos hombres y mujeres líderes capaces de transformar su realidad y la de su contexto.
										Ofrecemos niveles de educación pre-escolar, básica, metodologías flexibles (Aula juvenil y Aprendizajes básicos) y Media, fundamentados en saberes científicos, humanísticos, informáticos, tecnológicos y ecológicos. Basados en valores como el respeto, la honestidad, la solidaridad, responsabilidad, el sentido de pertenencia, mediante un currículum flexible que lleva al educando al desarrollo de sus competencias básicas, ciudadanas, laborales generales y específicas para su formación integral.
						 </span>
						</div>

						<div class="tab-pane fade clearfix" id="tab2">
							<p class="title"><b>Vision</b> </p>
							<span class="Comentario2">El colegio Distrital Jorge Isaacs propende por el fortalecimiento de su profundización en informática, ciencias naturales e insumos. En su articulación con el
								ITSA y el SENA el fortalecimiento de las áreas técnicas (procesos industriales, telecomunicaciones, mantenimiento electromecánico, Informática, Comercio Exterior y Mantenimiento Electrónico) para el desarrollo y  la inclusión en el campo laboral.
                Para el año 2.015 esperamos ser líderes innovadores, de excelencia académica y técnica para brindar a nuestros usuarios un servicio óptimo.
							</span>
						</div>

						<div class="tab-pane fade clearfix" id="tab6">
							<p class="title"><b>Lema</b> </p>
							<span class="Comentario2">"En la exigencia esta la Excelencia."
							</span>
						</div>

					</div>
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a class="i1" href="#tab1" data-toggle="tab" ><i></i><span>Institucion y Comunidad</span></a></li>
						<li><a class="i3" href="#tab2" data-toggle="tab" ><i></i><span>Visíon</span></a></li>
						<li><a class="i5" href="#tab3" data-toggle="tab" ><i></i><span>Misíon</span></a></li>
						<li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Lema</span></a></li>
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->

			<!-- MULTI PURPOSE -->

		</section><!-- //ABOUT -->



		<!-- TEAM -->
		<section id="team">

			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Equipo</b> </h2>

				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">

						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/1.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Rebeca Carbonol Suarez</p>
										<span>Rectora</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->

						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/2.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Luis A. Diaz Guerra</p>
										<span>Tecnico Administrador</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->

						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/3.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Vera Padilla</p>
										<span>Coordinadora Academica</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->

						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Boris Ariza</p>
										<span>Coordinador Academico</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman4 -->

					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->

		<!-- NEWS -->
		<section id="news">

			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Noticias</b> </h2>

				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">

					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">

						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">“ La educacion es el arma mas poderosa que puedes usar para cambiar el Mundo.”</div>
							<div class="testim_author">—  Nelson Mandela, <b>Abogado y Politico</b></div>
						</div>
						<!-- TESTIMONIAL1 -->

						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“ La educacion no cambia el mundo, Cambia a las personas que van a cambiar el Mundo.”</div>
							<div class="testim_author">—  Paulo Freire, <b>Teorico en Educacion</b></div>
						</div><!-- TESTIMONIAL2 -->

						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“ La educacion es la habilidad de escuchar casi cualquier cosa sin perder tu calma o tu autoestima.”</div>
							<div class="testim_author">—  Robert Frost, <b>Poeta</b></div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->

				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="img/Lideres_Isaistas.jpg" alt="" />
							</div>
							<div class="post_item_content">
								<a class="title" href="" >Lideres Isaístas</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >El liderazgo del estudiante Isaísta lo mueve a participar de manera responsable en la solución  de la problemática de su entorno, buscando así una mejor Sociedad.</a> |</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="img/Futbol.jpg" alt="" />
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >"En la exigencia esta la Excelencia."</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Los estudiantes Isaístas día a día se esfuerzas por lograr desempeños superiores y altos. El Colegio Distrital Jorge Isaacs ha sido 2 veces Campeón de los Juegos Distritales.</a> |</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="img/Talentos.jpg" alt="" />
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Potencializador de Talentos</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >El CODIJI promueve en el estudiante el desarrollo de actitudes, habilidades y destrezas  mediante actividades científicas, culturales, deportivas y éticas.</a> |</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->

	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->

	<!-- FOOTER -->
	<footer>

		<!-- CONTAINER -->
		<div class="container">

			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

				<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
					<h4><b>Nuestro</b> Colegio</h4>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="img/Escudo.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="img/Escudo.jpg" >Escudo</a>
							<ul class="post_item_inf_small">
								<li> 4 Febrero de 2018</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="img/logo.png" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="img/logo.png" >Logo Colegio</a>
							<ul class="post_item_inf_small">
								<li>4 Abril de 2018</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="img/LOGO-CODIJI.png" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="img/LOGO-CODIJI.png" >Logo CODIJI</a>
							<ul class="post_item_inf_small">
								<li>3 Junio de 2017</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>Redes Sociales</b></h4>
					<p>Siguenos y mantente al dia con nuestras mas recientes Noticias.</p>
					<p></p>
					<ul class="social">
						<li><a href="https://twitter.com/IEDJorgeIsaacs?lang=es" target=”_blank”><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/groups/31682488032/about/" target=”_blank”><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>

				<div class="respond_clear"></div>

				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>Contactanos</b> </h4>
					<p> Direccion: Carrera 4A No 24B3 – 21 <br> Barrio: Simón Bolívar <br> Telefono: 3755915-3744264 <br> Correo Electrónico: coljorgeisaacs82@hotmail.es <br> Unal: Sur oriente. </p>
					<ul class="social">
					  <li> <a href="javascript:void(0);"> <i class="map_show fa fa-map-marker"> </i> </a> </li>
					</ul>
				</div>

			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->


	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15669.10966789117!2d-74.7807772!3d10.9424045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbf6710995c3863c7!2sInstitucion+Educativa+Distrital+Jorge+Isaasc!5e0!3m2!1ses!2sco!4v1522267409125" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div><!-- //MAP -->
</div>
</body>
</html>
