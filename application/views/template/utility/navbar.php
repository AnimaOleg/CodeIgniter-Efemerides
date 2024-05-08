    <header>
        <div class="container">
            <div class="intro-text2">




                <!-- Navigation -->
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">

                        <div class="row">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand page-scroll col-sm-3" href="<?php echo base_url();?>">Efemerides</a>
                                 
                            </div>


                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                <div style="position:fixed;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <h2></h2>
                                                <form action="<?php echo base_url() ?>" method="get">
                                                <div id="custom-search-input">
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="q" class="form-control input-lg" placeholder="Buscar" />
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-info btn-lg" type="submit">
                                                                <i class="glyphicon glyphicon-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                                <ul class="nav navbar-nav navbar-right">
                                    <li class="hidden">
                                        <a href="#page-top"></a>
                                    </li>
                                    
                                    <li class="hidden-sm hidden-lg hidden-md">
                                        <button type="button" class="btn btn-primary ">
                                            <h4 class="modal-title" >
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>CREAR EVENTO
                                            </h4>
                                        </button>
                                    </li>

                                    <li>
                                        <a class="page-scroll" href="<?php echo base_url().'index.php/home/'; ?>">HOME</a>
                                        <!-- <a class="page-scroll" href="<?php echo base_url().'index.php/home/homes/'; ?>">HOME</a> -->
                                    </li>

                                    <li>
                                        <a class="page-scroll" href="<?php echo base_url()."index.php/calendario/";?>">CALENDARIO</a>
                                    </li>

                                    <li>
                                        <a class="page-scroll" href="<?php echo base_url()."index.php/amigo/";?>">AMIGOS</a>
                                    </li>

                                    <li>
                                        <a class="page-scroll"  href="<?php echo site_url('user/log/loggout/');?>">Salir</a> 
                                    </li>
                                </ul>
                            </div>


                    </div>




                    <div class="second-row row hidden-xs">
                        <div class="col-sm-2 hidden-xs">
                            <div class="container">
                                <img class="img-responsive col-md-1" id='fperfil' src="<?php echo $this->session->userdata('image'); ?>" style="width:10%;">
                            </div>
                        </div>
                    
                        <?php
                            //$this->load->view($utility_url."/saludo.php");
                        ?>
                        <div class="col-lg-6 hidden-xs col-sm-6 col-md-6">
                            <div class="row">
                                <a href="<?php echo base_url()."index.php/perfil/?ref=".get_id(); ?>">
                                    Hola, <?php echo $this->session->userdata('username'); ?> eres un crack! </a>
                            </div>
                        </div>

                        <div class="col-lg-4 hidden-xs col-sm-2 col-md-2">
                            <button type="button" class="btn btn-primary" onclick="window.location.href = '<?php echo base_url()."index.php/home/crearevento/";?>';//$('#crearevento').modal()"> <h4 class="modal-title" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>CREAR EVENTO</h4></button>
                        </div>

                    </div>




                </div>
            <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</header>
