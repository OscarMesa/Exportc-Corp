<!DOCTYPE html>
<!-- 
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html lang="en"> 
    <head>
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <meta name="keywords" content="urbanic, responsive, bootstrap, fluid layout, orange, white, free website template, templatemo" />
        <meta name="description" content="Urbanic is free responsive template using Bootstrap which is compatible with mobile devices. This layout is provided by templatemo for free of charge." />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->


        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="login-modal/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="login-modal/css/style.css"> <!-- Gem style -->
        <!--<script src="login-modal/js/modernizr.js"></script>--> 
        <link href="megaSlider/md-slider.css" rel="stylesheet" type="text/css">
        <link href="megaSlider/animate.css" rel="stylesheet" type="text/css">
        
         <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
        
        <!--<script type="text/javascript" src="megaSlider/jquery.min.js"></script>-->
        <script src="megaSlider/jquery.touchwipe.js"></script><style type="text/css"></style>
        <script src="megaSlider/jquery.easing.min.js"></script>
        <script src="login-modal/js/modernizr.js"></script>
        <script src="megaSlider/md-slider.js"></script>
        
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
        <script src="login-modal/js/main.js"></script> <!-- Gem jQuery -->
        
       
        
        <script type="text/javascript" charset="utf-8">
            
            $(document).ready(function() {
                $("#md-slider").mdSlider({
                    transitions: 'strip-up-left',
                    height: 320,
                    width: 1000,
                    fullwidth: true,
                    showArrow: true,
                    showLoading: false,
                    slideShow: true,
                    showBullet: true,
                    showThumb: false,
                    slideShowDelay: 2000,
                    loop: true,
                    strips: 5,
                    transitionsSpeed: 1000
                });
                $("#md-transition li a").click(function() {
                    $("#md-transition li a.active").removeClass("active");
                    $(this).addClass("active");
                    var transition = $(this).attr("href").substr(1);
                    $("#md-slider .md-slide-item").data("transition", transition);
                    return false;
                });
                $("#md-transition li:first a").trigger("click");

                bottomSize();
                $(window).resize(function() {
                    bottomSize()
                })
                function bottomSize() {
                    bth = $(window).height() - 411;
                    console.log(bth)
                    $("#bottom-region").height(bth);
                }
                 $(window).scroll(function () {
                    var aTop = $('#welcome').height();
                    if($(this).scrollTop()>=aTop)
                        $("#btn-back-to-top").show("fast");
                    else
                        $("#btn-back-to-top").hide();
                });

            });
        </script>
    </head>

    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                        <img src="images/phone-azul.png" alt="phone"/>
                        010-020-0340
                    </div>
                    <div class="main-nav">
                        <ul>
                            <!-- inser more links here -->
                            <?php if(!isset(Yii::app()->session['user'])){ ?>
                            <li><a id="init" class="cd-signin" href="#0">Ingresar</a></li>
                            <?php }else{ ?>
                            <li><a class="cd-signup" id="logut" href="<?php echo Yii::app()->createAbsoluteUrl("site/logout");?>">Cerrar sesión</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu" style="background-color: #FFF; z-index: 3">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="" rel="nofollow">
                                <img src="images/importLogistica_logo.jpg" alt="logo"/>
                            </a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                    <li class="active"><a href="#templatemo-top">INICIO</a></li>
                                <li><a href="#templatemo-about">NOSOTROS</a></li>
                                <li><a href="#templatemo-service">SERVICIOS</a></li>
                                <li><a href="#templatemo-contact">CONTACTO</a></li>
                                <!--<li><a href="#templatemo-contact">CONTACT</a></li>-->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>

        <?php $this->renderPartial('/site/banner') ?>

        <div id="welcome" class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Bienvenido a </span><span class="txt_orange">Import Logistica</span>
                    <!--<p class="txt_slogan"><i>Lorem ipsum dolor sit amet, consect adipiscing elit. Etiam metus libero mauriec ignissim fermentum.</i></p>-->
                </div>	
            </div>
        </div>

        <?php $this->renderPartial('/site/nosotros') ?>

        <?php $this->renderPartial('/site/servicios') ?>
        
        <?php $this->renderPartial('/site/contact') ?>

        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                
                                
                                
                                
                                
                                
                                
                                   <li class="twitter animated bounceIn wow delay-02s animated" style="visibility: visible; -webkit-animation: bounceIn;"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
                                   <li class="facebook animated bounceIn wow delay-03s animated" style="visibility: visible; -webkit-animation: bounceIn;"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
                                   <li class="pinterest animated bounceIn wow delay-04s animated" style="visibility: visible; -webkit-animation: bounceIn;"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
                                   <li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; -webkit-animation: bounceIn;"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
                                   <li class="dribbble animated bounceIn wow delay-06s animated" style="visibility: visible; -webkit-animation: bounceIn;"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </ul>
                            <div class="height30"></div>
                            <a id="btn-back-to-top" style=""><img src="images/flecha_arriba.png" width="50"/></a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">Copyright © 2014 <a href="#">Import logística</a></div>

                    </div>
                </div>
            </div>
        </div>

        <?php $this->renderPartial('/site/login_modal') ?>        
    </body>
</html>