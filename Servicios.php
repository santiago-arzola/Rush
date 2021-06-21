<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
	<link rel="shortcut icon" href="./Recursos/Logos/R oficial.png" rel="icon"/>
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Servicios</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
    <style>
        h3{
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;

        }
    </style>
	
    <body id="body">

      <!-- preloader -->
    <div id="preloader">
            <div class="loder-box">
              <div> <img src="./Recursos/Logos/rush junio.png"></div>
            </div>
    </div>
    <!-- end preloader -->

    <!-- Modal Inteligencia de negocios -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Inteligencia de Negocios</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding-left: 5rem;padding-right: 5rem;">
       <p>Facilita la obtención rápida y sencilla de datos provenientes de los sistemas de gestión empresarial para su análisis e interpretación, de manera que puedan ser aprovechados para la toma de decisiones y se conviertan en conocimiento para los responsables del negocio.</p>
        <b style="text-align: center;"><p>eGoverment</p>
        <p>Legaltech</p>
        <p>BIM</p>
        <p>Healtech</p></b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="location.href='./IN.php'" style="color: white;" data-dismiss="modal">Conocer más</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Logistica -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Logística</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding-left: 5rem;padding-right: 5rem;">
       <b style="text-align: center;"><p> eCommerceSocial</p>
        <p>Media</p>
        <p>Strategist</p>
        <p>Branding</p>
        <p>Fintech</p></b>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" onclick="location.href='./Logistica.php'" style="color: white;" data-dismiss="modal">Conocer más</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Infraestructura -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Infraestructura</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding-left: 5rem;padding-right: 5rem;">
       <b style="text-align: center;"><p> eCommerceSocial</p>
        <p>Telefonía</p>
        <p>Video Vigilancia</p>
        <p>Cómputo</p>
        <p>Almacenamiento</p></b>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" onclick="location.href='./Infraestructura.php'" style="color: white;" data-dismiss="modal">Conocer más</button>
      </div>
    </div>
  </div>
</div>

		

        <!--
        Fixed Navigation
        ==================================== -->
       <?php include_once('comun/menu.php') ?>
        <!--
        End Fixed Navigation
        ==================================== -->


            <!-- Service section -->
            <section id="service" style="margin-top: 13rem;margin-bottom: 7rem;">
                <div class="container">
                    <div class="row" style="background: #dcdcdc57;height:auto;padding-bottom: 4rem;">
                    
                        <div class="sec-title text-center" style="margin-top: 4rem;">
                            <h2 class="wow animated bounceInLeft">Servicios</h2>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                            <div class="service-item" data-toggle="modal" data-target="#myModal">
                                <div class="service-icon">
                                    <i class="fa fa-building fa-3x"></i>
                                </div>
                                <h3>Inteligencia de negocios</h3>
                            </div>
                        </div>
                    
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                            <div class="service-item" data-toggle="modal" data-target="#myModal2">
                                <div class="service-icon">
                                    <i class="fa fa-tasks fa-3x"></i>
                                </div>
                                <h3>Logística</h3>
                            </div>
                        </div>
                    
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                            <div class="service-item" data-toggle="modal" data-target="#myModal3">
                                <div class="service-icon">
                                    <i class="fa fa-gear fa-3x"></i>
                                </div>
                                <h3>Infraestructura</h3>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- end Service section -->

            <!-- footer
        ==================================== -->
       <?php include_once('comun/footer.php') ?>
        <!--
        End footer
        ==================================== -->

        
        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Google Map API -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>
