<?php
    $scripts_url="template/scripts";
    $this->load->view($scripts_url.'/facebook.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Efemerides</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" style="overflow: hidden;" class="index">
    <div class="" style="left: 10px; position: fixed;top: 50%;
  transform: translateY(-50%);z-index: 2;">
        
        <div class="row">
            <a class="page-scroll" href="#page-top"><img class="col-md-4" src="<?php echo base_url()."assets/image/triangulo_1.png"; ?>"></a>
        </div>
        <div class="row">
        <a class="page-scroll" href="#services"><img class="col-md-4" src="<?php echo base_url()."assets/image/triangulo_2.png"; ?>"></a>
        </div>
        <div class="row">
        <a class="page-scroll" href="#portfolio"><img class="col-md-4" src="<?php echo base_url()."assets/image/triangulo_3.png"; ?>"></a>
        </div>
        <div class="row">
        <a class="page-scroll" href="#about"><img class="col-md-4" src="<?php echo base_url()."assets/image/triangulo_4.png"; ?>"></a>
        </div>
        <div class="row">
        <a class="page-scroll" href="#team"><img class="col-md-4" src="<?php echo base_url()."assets/image/triangulo_5.png"; ?>"></a>
        </div>
        
    </div>
    <!-- Navigation -->
    <nav style="background-color: transparent;" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="top-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top"> <img class="top-trig hidden" style="width: 30%; margin-top: -21px;" src="<?php echo base_url()."assets/image/efemerides.png"; ?>"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Qu&eacute; es efem&eacute;rides?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Eventos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Calendario</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Contacto</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    
                </ul>
                </div>
                <div class="top-user hidden">
                    <div>
                        <a class="page-scroll" style="left: 150px; position: absolute" href="#page-top"> <img style="width: 30%;" src="<?php echo base_url()."assets/image/efemerides.png"; ?>"></a>
                    </div>
                     <div>
                                <a href="#" style="
    position: relative;
    top: 0px;
    right: 100%;
    " class="btn btn-xl" onclick="$('#myModal').modal()" style="" >Iniciar sesi&oacute;n</a>
                            </div>   
                     <div>
                                <a href="#" style="position: relative;
    bottom: 47px;
    left: 20px;" class="btn btn-xl" onclick="$('#myModal').modal()" style="" >Registrate</a>
                            </div>   
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div class="second-row row hidden-xs">
            
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="first-home-element">
        <div class="container">
             <div class="row">
            
                <div class="container"> 
                    
                        <div class="col-md-12">
                            <div class="col-md-6">
                                 <div class="">
                             <div class="row">
                               <form class="form-horizontal" action="<?php echo site_url('user/log/loggin/');?>" method="POST" role="form">
                                <div id="error_log" class="alert alert-danger alert-normal-danger" hidden="hidden">
  				    
  					ERROR! Email o Password incorrecto.
				</div>
                                <div class="form-group">
                                    
                                    <div class="col-sm-6">
                                        
                                        <input type="email" class="form-control" name="email" id="email" placeholder="correo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-sm-6"> 
                                        
                                        <input type="password" class="form-control" name="pass" id="pwd" placeholder="Contrase&ntilde;a">
                                    </div>
                                </div>
                                <div class="form-group"> 
                                   
                                            
                                    <button style="margin-left: 15px; width: 45%;" type="submit" class="btn btn-xl">iniciar sesi&oacute;n</button>
                                        
                                    </div>
                                    </form>
                                </div>
                                
                           
                              
                            </div>
                                <div class="row" style="margin-top: 40px;">
                                <a href="#" style="width: 47%;" class="btn btn-xl" onclick="$('#myModal').modal()" style="
    margin-top: 20px;" >Registrate</a>
                            </div>        
                                <div class="row" style="margin-top: 20px; ">
                                 
                            <a style="width: 47%;" href="<?php echo base_url()."index.php/home/fbconfig";?>" class="btn btn-xl">Registrate con <img class="" style="
    width: 24px;
" src="<?php echo base_url();?>assets/image/FACEBOOK.png"></a>


                            </div>
                               
                            
                            </div>
                            <div class="col-md-6">
                                <img style="height:60%;width: 90%;" src="<?php echo base_url()."assets/image/logo.png"; ?>">
                            </div>
                        </div>  
                        
                        
                        </div>  
                    
                </div>
                
                
            </div>
        
    </header>

    <!-- Services Section -->
    <section id="services" class="second-home-element">
        <div class="container">
            <div class="col-sm-6 hidden-xs"> </div>
            <div class="col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-3"><img class="img-responsive" src="<?php echo base_url();?>assets/image/amigos.png"> </div>
                    <div class="col-xs-3"><img class="img-responsive" src="<?php echo base_url();?>assets/image/interrogante.png"> </div>
                    <div class="col-xs-3"><img class="img-responsive" src="<?php echo base_url();?>assets/image/movil.png"> </div>
                    <div class="col-xs-3"><img class="img-responsive" src="<?php echo base_url();?>assets/image/ocio.png"> </div>
                </div>
                <div class="row">
                    <div class="col-sx-12" style="padding-top: 50px;line-height: 150%;font-size: 24px; word-wrap: break-word;">
Alguna vez has tenido ganas de hacer algo pero te has quedado en casa porque no se te ha ocurrido nada? <br/><br/>
Entra en Efem&edot;rides, busca el evento que m&aacute;s te guste, efemer&iacute;zalo comparti&eacute;ndolo en tu calendario, o busca en los calendarios de tus amigos, pero por favor... 
<br/><br/><b>No te quedes en casa!!</b>                     </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="third-home-element">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center">
                     
                </div>
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading" style="color: #FAAC58;background: -webkit-linear-gradient(#FAAC58, #FE2E2E);-webkit-background-clip: text;    -webkit-text-fill-color: transparent;">No te quedes fuera</h2>
                    <h3 class="section-subheading text-muted" style="color: white; padding: 10px;padding-bottom: 150px;line-height: 150%;font-size: 24px;" >Tus eventos nunca pasar&aacute;n desapercibidos. Sube tu evento con una foto y una breve descripci&oacute;n, incluy&eacute;ndolo en una de las categor&iacute;as y no hagas nada m&aacute;s, que Efem&eacute;rides hace el resto. Cuantas m&aacute;s efemerizaciones, m&aacute;s visibilidad alcanzar&aacute; tu evento. Simple, no? </h3>
                </div>
                <div class="col-lg-2 text-center">
                     
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="fourth-home-element">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color: #FAAC58;background: -webkit-linear-gradient(#FAAC58, #FE2E2E);-webkit-background-clip: text;    -webkit-text-fill-color: transparent;">efemerizar mas que un concepto</h2>
                    <div class="col-md-8"> </div>
                    <div class="col-md-4">
                        <h3 class="section-subheading text-muted" style="color: white;line-height: 150%; font-size: 24px;">Nunca te has preguntado... Qu&eacute; estar&aacute;n haciendo ahora mismo mis amigos?<br/><br/> 
                            Busca sus perfiles y encuentra los mejores eventos de la ciudad en la que te encuentres, o efemer&iacute;zalos t&uacute; mismo en tu calendario para que ellos tambi&eacute;n los disfruten</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="fiveth-home-element">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color: #FAAC58;background: -webkit-linear-gradient(#FAAC58, #FE2E2E);-webkit-background-clip: text;    -webkit-text-fill-color: transparent;">Nosotros ya hemos hablado demasiado, ahora te toca a ti descubrir el resto</h2>
                    <div class="col-md-5"> </div>
                    <div class="col-md-5"> 
                        <div style="margin-top: 60px;">
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 10px;margin-top: 0px;color: white;line-height: 150%; font-size: 30px;">CONTACTO</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">hola@efemerizate.com</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">embajadores@efemerizate.com</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">negociemos</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">Quieres trabajar con nosotros?</h3>
                    
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 10px;margin-top: 10px;color: white;line-height: 150%; font-size: 30px;">LEGAL</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">politica de privacidad</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">condiciones de uso</h3>
                    <h3 class="section-subheading text-muted" style="text-align: left;margin-bottom: 0px;margin-top: 0px;color: white;line-height: 150%; font-size: 18px;">politica de cookies</h3>
                    </div>
                        </div>
                    <div class="col-md-2"> 
                        <div style="margin-top: 60px;">
                        <img style="width: 75%;height: 10%;margin-bottom: 15px;" src="<?php echo base_url()."assets/image/FACEBOOK.png";?>">
                        <img style="width: 75%;height: 10%;margin-bottom: 15px;" src="<?php echo base_url()."assets/image/twitter.png";?>">
                        <img style="width: 75%;height: 10%;margin-bottom: 15px;" src="<?php echo base_url()."assets/image/instagram.png";?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assets/image/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assets/image/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assets/image/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assets/image/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Contact Section 
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
-->
   <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
-->
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url(); ?>assets/image/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url(); ?>assets/image/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url(); ?>assets/image/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url(); ?>assets/image/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url(); ?>assets/image/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url(); ?>assets/image/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!--<script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/agency.js"></script>
    
    <script>
    
        $( document ).ready(function() {
           // alert(screen.width+"px "+screen.height+"px");
   $(".first-home-element").css("background-size",screen.width+"px "+screen.height+"px");
   $(".second-home-element").css("background-size",screen.width+"px "+screen.height+"px");
   $(".third-home-element").css("background-size",screen.width+"px "+screen.height+"px");
   $(".fourth-home-element").css("background-size",screen.width+"px "+screen.height+"px");
   $(".fiveth-home-element").css("background-size",screen.width+"px "+screen.height-102+"px");
   
   $(".first-home-element").css("height",screen.height+"px");
   $(".second-home-element").css("height",screen.height+"px");
   $(".third-home-element").css("height",screen.height+"px");
   $(".fourth-home-element").css("height",screen.height+"px");
   $(".fiveth-home-element").css("height",screen.height-102+"px");
   
   var animatiOn=false;
    $(document).keydown(function(event){
        if(!animatiOn){
        animatiOn=true;
        if ( event.which == 38 ) {
            
            pos=$(document).scrollTop()-screen.height;
   $("html, body").animate({ scrollTop: pos+"px"},{always:function(){
       animatiOn=false;
   }});
   
  }
      if ( event.which == 40 ) {
          
            pos=$(document).scrollTop()+screen.height;
   $("html, body").animate({ scrollTop: pos+"px"},{always:function(){
       animatiOn=false;
   }});
   
  }
        }
    });
   
   
   
});
    
    </script>

</body>

</html>
