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
    <link href="<?php echo base_url(); ?>assets/css/triangle.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/createEvent.css" rel="stylesheet">

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

<body id="page-top" class="index">

    <!-- Navigation -->
    <!-- Header -->
   
        <div style="background-color: #222;">
    
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


            <?php
              $basic_url="template/home/basic";
              $this->load->view($basic_url."/navbar.php")
            ?>


            </div>
        </div>
            </nav>
        <div class="container">
            
                <div class="row"style="
    margin-top: 100px;
">
                    <div class="col-md-3">
                    <img src="<?php echo base_url()."uploads/eventos/".$event_data[0]["img"]."_.jpg" ?>" style=" height: 150px; width: 100%;">
                    </div>
                      <div class="form-group col-md-9">
                          <div class="box col-md-2 text-center">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-euro"></span>
                            </div>
                            <div class="icontext">
                                Entrada
                            </div>
                            <div class="box-font">
                                <div class="form-group">
                                <?php  echo $event_data[0]["box_euro"]; ?>,
                                <?php  echo $event_data[0]["box_centimo"]; ?>
                            </div>
                            </div>
                        </div>
                        </div>
                <div class="box col-md-2 text-center">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-time"></span>
                            </div>
                            <div class="icontext">
                                hora
                            </div>
                        <div class="box-font" style="">
                               <div class="form-group">
                                <?php  echo $event_data[0]["box_hora"]; ?>:
                                   <?php  echo $event_data[0]['box_minuto']; ?>
                            </div>
                            </div>
                            
                        </div>
                </div>
                <div class="box col-md-2 text-center">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                            <div class="icontext">
                                fecha
                            </div>
                        <div class="box-font" style="">
                              <div class="form-group">
                                <?php  echo $event_data[0]['box_dia']; ?>/
                                   <?php  echo $event_data[0]['box_mes']; ?>/
                                   <?php  echo $event_data[0]['box_any']; ?>
                            </div>
                            </div>
                            
                        </div>
                </div>
                <div class="box col-md-2 text-center">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-earphone"></span>
                            </div>
                            <div class="icontext">
                                telefono
                            </div>
                            <div class="box-font">
                                <div class="form-group">
                                <?php  echo $event_data[0]["box_telefono"]; ?>
                            </div>
                            </div>
                            
                        </div>
                </div>
                          <div class="col-lg-4 text-center"> 
                              <button  style="height: 150px;" onclick="window.location.href='<? echo base_url()."index.php/home/efemerizalo/".$event_data[0]["id"] ?>'" type="button" class="btn btn-xl" name="submit" value="crear">EFEMERIZALO</button>
            </div>          
                          
                      </div>
            
        </div>
    
        </div>
             
        <div  style="background-color: #222;">
        <div class="container">
            <div class="row" style="  margin-top: 20px;">
                       
                        <div class="col-sm-9 col-xs-12">
                            
                            <div class="form-group">
                                <div class="form-group" style="margin-bottom: 20px; color: #fed136;">
                                <h4> <?php echo $event_data[0]["nombre"]; ?> </h4>
                            </div>
                                <textarea class="form-control" placeholder="<?php echo $event_data[0]["info"]; ?>" disabled="" name="info" required="" data-validation-required-message="Informacion del evento" style="
   
    height: 150px;
    
"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            <div class="col-md-9" style="margin-top: 20px;">
                
                  <?php 
            
            if(count(get_assistants_to_event($event_data[0]["id"]))!=0){
                echo '<h4 >ASSISTENTES</h4>';
                $assistents=get_assistants_to_event($event_data[0]["id"]);
                $i=0;
            foreach  ($assistents as $value) {
                if($i<6){
      echo '<img style="height:100px;" src="'.get_user_perfil_img($value).'">';
                }
                if($i==6){
                                echo '<a onclick="$(\'#verasistentes\').modal()">ver mas asistentes</a>';
                }
            }
                
            }
            
            
            
            ?>  
                
                    
                </div> 
                        </div>
                
                        <div class="col-lg-3">
                        <div class="input-group" style="margin-top: 50px;">
                            <form action="<?php echo base_url().'index.php/home/addComment/'.$event_data[0]["id"]; ?>" id="crear_msg" method="POST">
                        <input type="text" id="userComment" name="comment" class="form-control input-sm chat-input" placeholder="Write your message here..." />
	    <span class="input-group-btn">     
                <button  type="submit" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-comment"></span> Add Comment</button>
        </span>
                        </form>
    </div>
                    
                  <div class="page-header">
                  <!--  <h4><small class="pull-right">comentarios</small> </h4>-->
                  </div> 
                        <?php $i=0; foreach (get_comments($event_data[0]["id"]) as $value){
                            if($i<3){
                            echo '<div class="comments-list">
                       <div class="media">
                            <a class="media-left" href="#">
                              <img style="width: 50px; margin:5px;" src="'.get_user_perfil_img($value).'">
                            </a>
                            <div class="media-body">
                                
                              <h4 class="media-heading user_name">'.$value["usuario"].'</h4>
                              '.$value["comentario"].'
                            </div>
                       </div></div>';
                            }if($i==3){
                                echo '<a onclick="$(\'#vercomentarios\').modal()">ver mas comentarios</a>';
                            }
                            
                            $i++;
                            
                        } ?>
                    
                    
                </div>
                
                    </div>
            
                   
            
        </div>
            
            
                </div>
            
        </div>
               <?php 
                 echo '<div class="modal fade" id="verasistentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="creareventoLabel">ver comentarios</h4>
            </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">';
               
               if(count(get_assistants_to_event($event_data[0]["id"]))!=0){
                echo '<h4 >ASSISTENTES</h4>';
                $assistents=get_assistants_to_event($event_data[0]["id"]);
                
            foreach  ($assistents as $value) {
                
      echo '<img style="height:100px;" src="'.get_user_perfil_img($value).'">';
                
                
                               
                
            }
                
            }
                        echo '</div>
        
                        </div>
                    </div>
                

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>';   
                        ?>
    
    <?php 
                 echo '<div class="modal fade" id="vercomentarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="creareventoLabel">ver comentarios</h4>
            </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">';
               
               foreach (get_comments($event_data[0]["id"]) as $value){
                            
  
                             echo '<div class="comments-list">
                       <div class="media">
                            <a class="media-left" href="#">
                              <img style="width: 50px; margin:5px;" src="'.get_user_perfil_img($value).'">
                            </a>
                            <div class="media-body">
                                
                              <h4 class="media-heading user_name">'.$value["usuario"].'</h4>
                              '.$value["comentario"].'
                            </div>
                       </div></div>'; 
                         
                        } 
                        echo '</div>
        
                        </div>
                    </div>
                

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>';   
                        ?>
    
            

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
     <script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
     <!--validator-->
          <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script> 
     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script> 
     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.js"></script> 
     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.min.js"></script> 
     
          <script>
     $(document).ready(function () {
jQuery.validator.addMethod("filtro", function(value, element) {
    if(value){
        validtacos=true;
        var tacos = new Array("puta", "orgia", "doble penetracion");
        for(i=0;i<tacos.length;i++){
    if (element.value.toLowerCase().indexOf(tacos[i]) >= 0){
        validtacos=false;
    }
    }
    }
  return validtacos; 
}, "No pots posar tacos motherfucker");
$('#crear_msg').validate({
    rules: {
        userComment: {
            required: true,
                  filtro:true
        },
        
    },
    highlight: function (element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
    },
    success: function (element) {
        element.text('OK!').addClass('valid')
            .closest('.control-group').removeClass('error').addClass('success');
    }
});
});
     </script>

</body>

</html>