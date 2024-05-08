<?php
    $utility_url="template/home/utility";
    $this->load->view($utility_url."header1.php");
?>

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
                <a class="navbar-brand page-scroll col-sm-3" href="#page-top">Efemerides</a>
                 
            </div>


            <?php
              $basic_url="template/home/basic";
              $this->load->view($basic_url."/navbar.php")
            ?>



            </div>
        </div>
            </nav>
            <form action="<? echo base_url()."index.php/home/do_upload" ?>" id="crear_evento" method="POST"  enctype="multipart/form-data">   
        <div class="container">
            
                <div class="row"style="
    margin-top: 150px;
">
                     <img  class="hidden-xs col-md-3" src="<?php echo $this->session->userdata('image'); ?>" style="
    max-height: 200px;
">
                      <div class="form-group col-md-9">
                          
                                <input type="file" class="form-control" size="90" placeholder="imagen" name="userfile" required="" data-validation-required-message="imagen" style="
    height: 200px;
">
                                    <p class="help-block text-danger"></p>
                      </div>
                     <img  class="visible-xs-block col-xs-3" src="<?php echo $this->session->userdata('image'); ?>" style="
    max-height: 200px;
">
                
        </div>
    
        </div>
  
        <div  style="background-color: #222;">
        <div class="container">
            <div class="row" style="  margin-top: 20px;">
                        <div class="col-sm-3 col-xs-12">
                            <div class="form-group" style="color: #fed136; margin-bottom: 22px; margin-top: 8px;">
                                <?php echo get_fullname(); ?>
                            </div>
                            <input type="text" data-role="tagsinput" class="form-control" placeholder="tags" name="tags" required="" data-validation-required-message="tags del evento" style="height: 265px;">
                            <!-- 
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="fecha evento" name="fecha" required="" data-validation-required-message="fecha evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="hora evento" name="hora" required="" data-validation-required-message="hora evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="provincia evento" name="provincia" required="" data-validation-required-message="provincia evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ciudad evento" name="ciudad" required="" data-validation-required-message="ciudad evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="calle evento" name="calle" required="" data-validation-required-message="calle evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                           
                            -->
                        </div>
                        <div class="col-sm-9 col-xs-12">
                            
                            <div class="form-group">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="nombre evento" name="nombre" required="" data-validation-required-message="nombre evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                                    <textarea class="form-control" placeholder="Informacion" name="info" required="" data-validation-required-message="Informacion del evento" style="height: 265px;"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            
                        </div>
                    </div>
            <div class="row text-center">
                
                <div class="box col-md-3">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-euro"></span>
                            </div>
                            <div class="icontext">
                                Entrada
                            </div>
                            <div class="box-font">
                                <div class="form-group">
                                <input type="number" id="eur" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="eeee" size="2" name="box_euro" required=""  data-validation-required-message="€€">:
                                <input type="number" id="cent" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="cc" size="2" name="box_centimo" required=""  data-validation-required-message="cc">
                                   
                            </div>
                            </div>
                        </div>
                        </div>
                <div class="box col-md-3">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-time"></span>
                            </div>
                            <div class="icontext">
                                hora
                            </div>
                        <div class="box-font" style="">
                               <div class="form-group">
                                <input type="number" id="hour" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="hh" size="2" name="box_hora" required=""  data-validation-required-message="hh">:
                                <input type="number" id="min" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="mm" size="2" name="box_minuto" required=""  data-validation-required-message="mm">
                                    
                            </div>
                            </div>
                            
                        </div>
                </div>
                <div class="box col-md-3">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                            <div class="icontext">
                                fecha
                            </div>
                        <div class="box-font" style="">
                              <div class="form-group">
                                  <input type="number" id="day" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="dd" size="2" name="box_dia" required=""  data-validation-required-message="dd">/
                                  <input type="number" id="month" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="mm" size="2" name="box_mes" required=""  data-validation-required-message="mm">/
                                  <input type="number" id="year" style="width: 20%; border-radius: 10px;color: #555;" class="" placeholder="aaaa" size="4" name="box_any" required=""  data-validation-required-message="aaaa">


                                                                
                                    <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            
                        </div>
                </div>
                <div class="box col-md-3">
                    <div class="box-size">
                            <div>
                                <span class="glyphicon glyphicon-earphone"></span>
                            </div>
                            <div class="icontext">
                                telefono
                            </div>
                            <div class="box-font">
                                <div class="form-group">
                                <input type="text" style="width: 35%; border-radius: 10px;color: #555;" class="" placeholder="telefono" name="box_telefono" required="" data-validation-required-message="telefono">
                                    <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-xl" name="submit" value="crear">CREAR EVENTO</button>
            </div>
                </div>
        </div>
                </form>

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
$('#crear_evento').validate({
    rules: {
        box_euro: {
                  digits: true,
                  minlength: 1,
                  required: true,
                  range: [0, 9999]
        },
        box_centimo: {
                  digits: true,
                  minlength: 1,
                  maxlength: 2,
                  required: true,
                  range: [00, 99]
        },
        box_hora: {
                  digits: true,
                  minlength: 1,
                  maxlength: 2,
                  required: true,
                  range: [00, 23]
        },
        box_minuto: {
                  digits: true,
                  minlength: 1,
                  maxlength: 2,
                  required: true,
                  range: [00, 59]
        },
        box_dia: {
                  digits: true,
                  minlength: 1,
                  maxlength: 2,
                  required: true,
                  range: [1, 31]
        },
        box_mes: {
            digits: true,
                  minlength: 1,
                  maxlength: 2,
            required: true,
            range: [1, 12]
        },
        box_any: {
            digits: true,
                  minlength: 4,
                  maxlength: 4,
            required: true,
            range: [2015, 3000]
        },
        box_telefono: {
            digits: true,
                  minlength: 9,
                  maxlength: 10,
            required: true,
            range: [100000000,9999999999]
        }
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

