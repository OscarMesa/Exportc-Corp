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
                    width: 800,
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
            });
        </script>
    </head>

    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                        <img src="images/phone.png" alt="phone"/>
                        010-020-0340
                    </div>
                    <div class="main-nav">
                        <ul>
                            <!-- inser more links here -->
                            <li><a class="cd-signin" href="#0">Sign in</a></li>
                            <li><a class="cd-signup" href="#0">Sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
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
                            <a class="navbar-brand" href="http://www.templatemo.com/preview/templatemo_395_urbanic" rel="nofollow"><img src="images/templatemo_logo.png" alt="logo"/></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#templatemo-top">HOME</a></li>
                                <li><a href="#templatemo-about">ABOUT</a></li>
                                <li><a href="#templatemo-portfolio">PORTFOLIO</a></li>
                                <li><a href="#templatemo-blog">BLOG</a></li>
                                <li><a href="#templatemo-contact">CONTACT</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>

        <?php $this->renderPartial('/site/banner') ?>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">Urbanic Design</span>
                    <p class="txt_slogan"><i>Lorem ipsum dolor sit amet, consect adipiscing elit. Etiam metus libero mauriec ignissim fermentum.</i></p>
                </div>	
            </div>
        </div>

        <div class="templatemo-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">AWESOME ICONS</span>
                            </div>
                            <p>Nam porta adipiscing tortor, eget rutrum turpis bibendum ut. Donec eu lacus in diam euismod imperdiet eu ut turpis. Morbi felis orci, tincidunt pretium laoreet id, euismod et lacus. Praesent aliquet magna vitae mi elementum pharetra.</p>
                            <div class="text-center">
                                <a rel="nofollow" href="http://www.templatemo.com/page/1" 
                                   class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-4">
                        <div class="templatemo-service-item" >
                            <div>
                                <img src="images/mobile.png" alt="icon"/>
                                <span class="templatemo-service-item-header">FULLY RESPONSIVE</span>
                            </div>
                            <p>Urbanic theme is free <a href="http://www.templatemo.com/page/1" target="_parent">responsive HTML5 template</a> by templatemo. Credits go to <a rel="nofollow" href="http://getbootstrap.com">Bootstrap</a> for responsive layout and <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images used in this <a href="http://www.tooplate.com">free template</a>. Curabitur non eros ut dolor tincidunt interdum sit amet vitae quam.</p>
                            <div class="text-center">
                                <a rel="nofollow" href="http://www.templatemo.com/page/2" 
                                   class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/battery.png" alt="icon"/>
                                <span class="templatemo-service-item-header">HIGH EFFICIENCY</span>
                            </div>
                            <p>Morbi imperdiet ipsum sit amet dui pharetra, vulputate porta neque tristique. Quisque id turpis tristique, venenatis erat sit amet, venenatis turpis. Ut tellus ipsum, posuere bibendum consectetur vel, egestas sit amet erat. Morbi rhoncus leo fermentum viverra.</p>
                            <div class="text-center">
                                <a rel="nofollow" href="http://www.templatemo.com/page/3" 
                                   class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="templatemo-team" id="templatemo-about">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>MEET OUR TEAM</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <ul class="row row_team">
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                            <div class="member-thumb">
                                <img src="images/member1.jpg" class="img-responsive" alt="member 1" />
                                <div class="thumb-overlay">
                                    <a href="#"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="team-inner">
                                <p class="team-inner-header">TRACY</p>
                                <p class="team-inner-subtext">Designer</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                            <div class="member-thumb">
                                <img src="images/member2.jpg" class="img-responsive" alt="member 2" />
                                <div class="thumb-overlay">
                                    <a href="https://www.facebook.com/templatemo" rel="nofollow"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="team-inner">
                                <p class="team-inner-header">MARY</p>
                                <p class="team-inner-subtext">Developer</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                            <div class="member-thumb">
                                <img src="images/member3.jpg" class="img-responsive" alt="member 3" />
                                <div class="thumb-overlay">
                                    <a href="#"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="team-inner">
                                <p class="team-inner-header">JULIA</p>
                                <p class="team-inner-subtext">Director</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                            <div class="member-thumb">
                                <img src="images/member4.jpg" class="img-responsive" alt="member 4" />
                                <div class="thumb-overlay">
                                    <a href="https://www.facebook.com/templatemo" rel="nofollow"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="team-inner">
                                <p class="team-inner-header">LINDA</p>
                                <p class="team-inner-subtext">Manager</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- /.templatemo-team -->

        <div id="templatemo-portfolio" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR PORTFOLIO</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                        <div class="text-center">
                            <a class="active" href=".gallery">All</a> / <a href=".gallery-design">Web Design </a>/ <a href=".gallery-graphic">Graphic</a> / <a href=".gallery-inspiration">Inspiration</a> / <a href=".gallery-creative">Creative</a>							
                        </div>
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                            <a class="colorbox" href="images/full-gallery-image-1.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">

                                    <img src="images/gallery-image-1.jpg" class="img-responsive" alt="gallery" />

                                    <div class="project-overlay">
                                        <h5>Graphic</h5>
                                        <hr />
                                        <h4>TEA POT</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                            <a class="colorbox" href="images/full-gallery-image-2.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-2.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BREAKFAST</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-3.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-3.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>GREEN COLORS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                            <a class="colorbox" href="images/full-gallery-image-4.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-4.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CAMERA</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-5.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-5.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>PLANT</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-6.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-6.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>CABLE TRAIN</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            <a class="colorbox" href="images/full-gallery-image-7.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-7.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CITY</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                            <a class="colorbox" href="images/full-gallery-image-8.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-8.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BIRDS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                            <a class="colorbox" href="images/full-gallery-image-9.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-9.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Graphic</h5>
                                        <hr />
                                        <h4>NATURE</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-10.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-10.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>DOGGY</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul><!-- /.gallery -->
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <a class="btn_loadmore btn btn-lg btn-orange" href="#" role="button">LOAD MORE</a>
                </div>
            </div><!-- /.container -->
        </div> <!-- /.templatemo-portfolio -->

        <div id="templatemo-blog">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">BLOG POSTS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>

                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blog-image-1.jpg" alt="gallery 1" />
                                </a>
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">GRAPHIC DESIGN</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Tracy</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">18 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Aliquam quis rutrum risus, ut condimentum ipsum. Nullam aliquet libero augue, eget auctor felis vulputate id. Proin a enim eu libero ornare malesuada. Sed iaculis fringilla lacinia. Sed laoreet lectus vitae [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                    <img class="img-responsive" src="images/blog-image-2.jpg" alt="gallery 2" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">WEBSITE TEMPLATE</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Mary</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">16 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Morbi imperdiet ipsum sit amet dui pharetra, vulputate porta neque tristique. Quisque id turpis tristique, venenatis erat sit amet, venenatis turpis. Ut tellus ipsum, posuere bibendum [...]
                                </p>
                            </li>
                        </ul>	
                    </div><!-- /.blog_post 2 -->

                    <div class="templatemo_clear"></div>

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                    <img class="img-responsive" src="images/blog-image-2.jpg" alt="gallery 3" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">WEB DEVELOPMENT</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Julia</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">12 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Fusce molestie tellus risus, id commodo turpis convallis id. Morbi mattis sapien sapien, vitae lacinia ante interdum sit amet. Praesent eget varius diam, ac tempor est. Mauris at scelerisque magna [...]
                                </p>
                            </li>
                        </ul>	
                    </div><!-- /.blog_post 3 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blog-image-1.jpg"  alt="gallery 4" />
                                </a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">NEW FLUID LAYOUT</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Linda</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">10 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    In venenatis sodales purus a cursus. Ut consectetur, libero ac elementum tristique, enim ante aliquet mauris, scelerisque congue magna neque ac purus. Aliquam facilisis volutpat odio [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 4 -->

                </div>
            </div>
        </div>

        <div id="templatemo-contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">CONTACT US</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                        <i>You can find us on 123 Dagon Studio, Yankin Street, <span class="txt_orange">Digital Estate</span> in Yangon.</i>
                    </div>
                    <div class="col-md-4 contact_right">
                        <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit pendisse as a molesti.</p>
                        <p><img src="images/location.png" alt="icon 1" /> 123 Dagon Studio, Yakin Street, Digital Estate</p>
                        <p><img src="images/phone1.png"  alt="icon 2" /> 010-020-0340</p>
                        <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange">www.templatemo.com</span></a></p>
                        <form class="form-horizontal" action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Name..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" style="height: 130px;" placeholder="Write down your message..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange pull-right">SEND</button>
                        </form>

                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->


        <div class="templatemo-tweets">
            <div class="container">
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-1">
                        <img src="images/quote.png" alt="icon" />
                    </div>
                    <div class="col-md-7 tweet_txt" >
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendiise as a molesti neque vestibulum,  persiutsor de andues mare fricilus ipsum dolor sit amet cons forukus.</span>
                        <br/>
                        <span class="twitter_user">Moe Moe, Yangon</span>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>

        <div class="templatemo-partners" >
            <div class="container">
                <div class="row">


                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR PARTNERS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="text-center">

                        <div style="margin-top:60px;">
                            <ul class="list-inline">
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner1.jpg" class="img-responsive" alt="partner 1" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner2.jpg" class="img-responsive" alt="partner 2" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner3.jpg" class="img-responsive" alt="partner 3" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner4.jpg" class="img-responsive" alt="partner 4" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner5.jpg" class="img-responsive" alt="partner 5" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner6.jpg" class="img-responsive" alt="partner 6" /></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>


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
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">Copyright © 2084 <a href="#">Your Company Name</a> - <a href="http://www.templatemo.com/page/1">HTML5 Template</a> by <a class="link_orange" href="http://www.templatemo.com/preview/templatemo_395_urbanic" rel="nofollow"><span class="txt_orange">Urbanic</span></a></div>

                    </div>
                </div>
            </div>
        </div>

        <?php $this->renderPartial('/site/login_modal') ?>        
    </body>
</html>
<!-- 
    Free Responsive Template from templatemo
    http://www.templatemo.com
-->