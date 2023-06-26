<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>ELECCIONES 2023</title>


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">
        <link type="image/png" sizes="96x96" rel="icon" href=".../icons8-mano-96.png">
        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
				<!--LIBRERIA JQUERY-->
				<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <!--Importar API-->
	       <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7lwiegFXMqWAquFEM7hyAK11W_StSUBM&libraries=places&callback=initMap">
	        </script>
								<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

				<!-- Latest compiled and minified JavaScript -->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/slick/slick.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/slick/slick-theme.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/animate.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/iconfont.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/magnific-popup.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/bootsnav.css'); ?>">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/style.css'); ?>">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/responsive.css'); ?>" />

        <script src="<?php echo base_url('plantilla/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); ?>"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Teléfono: 1234 5678 90</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Correo electrónico: elecciones@cne.gob.ec</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/cnegobec"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/cnegobec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Top Search -->

                <!-- End Top Search -->


                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand; text-center" href="<?php echo site_url(); ?>" >
                          <img src="<?php echo base_url('assets/images/logoecu.png'); ?>" height="80px" width="100%" class="logo" alt="" >

                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="<?php echo site_url(); ?>">Bienvenidos</a></li>


                            <ul class="nav navbar-nav navbar-center">

                            <li><a href="<?php echo site_url('candidatos/nosotros'); ?>">Acerca de</a></li>
                            <li><a href="<?php echo site_url('candidatos/requisitos'); ?>">Requisitos</a></li>
                            <li><a href="<?php echo site_url('candidatos/noticias'); ?>">Noticias</a></li>

                            <li class="dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo site_url('reportes/presidentes'); ?>">Presidentes</a></li>
                              <li><a href="<?php echo site_url('reportes/nacionales'); ?>">Asambleistas Nacionales</a></li>
                              <li><a href="<?php echo site_url('reportes/provinciales'); ?>">Asambleistas Provinciales</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('reportes/todos'); ?>">General</a></li>
                              <li><a href="<?php echo site_url('reportes/tipos'); ?>">Tipos</a></li>
                             </ul>
                           </li>
                            <li class="dropdown">
                            <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidatos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo site_url('candidatos/nuevo'); ?>">Nuevo Candidato</a></li>
                              <li><a href="<?php echo site_url('candidatos/index'); ?>">Listado de Candidatos</a></li>

                             </ul>
                           </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
