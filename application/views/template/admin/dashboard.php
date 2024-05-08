    <link href="<?php echo base_url(); ?>assets/css/createEvent.css" rel="stylesheet">
<div class="col-lg-4 hidden-xs col-sm-2 col-md-2">
                            <button type="button" class="btn btn-primary" onclick="$('#crearevento').modal()"> <h4 class="modal-title" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>CREAR EVENTO</h4></button>
                        </div>
<div class="col-lg-4 hidden-xs col-sm-2 col-md-2">
                            <button type="button" class="btn btn-primary" onclick="$('#crearempresa').modal()"> <h4 class="modal-title" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>CREAR EMPRESA</h4></button>
                        </div>


<div class="modal fade" id="crearevento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="creareventoLabel">Crear Evento</h4>
            </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <form action="<? echo base_url()."index.php/home/do_upload_empresa" ?>" id="crear_evento" method="POST"  enctype="multipart/form-data">   
                            <div  style="background-color: #222;">
        <div class="container">
            
                <div class="row"style="
    margin-top: 20px;
">
                      <div class="form-group col-md-12">
                          
                          <input type="file" id="adr_file" class="form-control" size="90" placeholder="imagen" name="userfile" required="" data-validation-required-message="imagen" style="
    height: 0px; visibility: hidden;
">
                          <input type="button" onclick="jQuery('#adr_file').click();this.value='cambiar imagen'" class="form-control btn btn-xl" value="A&ntilde;ADIR IMAGEN" size="90" placeholder="imagen" name="userfile" required="" data-validation-required-message="imagen" style="
    height: 150px;
">
                                    <p class="help-block text-danger"></p>
                      </div>
                
        </div>
    
        </div>
  
        
        <div class="container">
            <div class="row" style="  margin-top: 0px;">
                        <div class="col-sm-12 col-xs-12">
                            <!--<input type="text" data-role="tagsinput" class="form-control" placeholder="tags" name="tags" required="" data-validation-required-message="tags del evento" style="
  
    height: 265px;
    
">-->
                         
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            
                            <div class="form-group">
                                   <div class="form-group">
                                <input type="text" class="form-control" placeholder="email" id="email" name="email" required="" data-validation-required-message="email">
                                    <p class="help-block text-danger"></p>
                            </div>
                                 <div class="form-group">
                                <input type="text" class="form-control" placeholder="prioridad" id="prioridad" name="prioridad" required="" data-validation-required-message="prioridad">
                                    <p class="help-block text-danger"></p>
                            </div>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="nombre evento" id="nombre" name="nombre" required="" data-validation-required-message="nombre evento">
                                    <p class="help-block text-danger"></p>
                            </div>
                                    <textarea class="form-control" placeholder="Informacion" id="info" name="info" required="" data-validation-required-message="Informacion del evento" style="
   
    height: 150px;
    
"></textarea>
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
            <button style="margin: 20px;" type="submit" class="btn btn-xl" name="submit" value="crear">CREAR EVENTO</button>
            </div>
                </div>
        </div>
                </form>
     </div>
        
                        </div>
                    </div>
                

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


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
        nombre: {
            required: true,
                  filtro:true
        },
        info: {
            required: true,
                  filtro:true
        },
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
     
     <div class="modal fade" id="crearempresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
            </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-center">LOGEATE</h4></br>
                            <form class="form-horizontal" action="<?php echo site_url('user/log/loggin/');?>" method="POST" role="form">
                                <div id="error_log" class="alert alert-danger alert-normal-danger" hidden="hidden">
  				    
                  					ERROR! Email o Password incorrecto.
                				</div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="pwd">Password:</label>
                                    <div class="col-sm-9"> 
                                        <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Remember me</label>
                                             <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-5">
                            <h4 class="text-center">REGISTATE</h4></br>
                            <form id="form_registro"  class="form-horizontal" action="<?php echo site_url('user/register_empresa/');?>" method="POST" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_DNI">DNI</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_DNI" id="Register_DNI" placeholder="DNI" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_User">Usuario</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_User" id="Register_User" placeholder="Usuario" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Nombre">Nombre</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Nombre" id="Register_Nombre" placeholder="Nombre" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Apellidos">Apellidos</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Apellidos" id="Register_Apellidos" placeholder="Apellidos" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_CP">Codigopostal</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_CP" id="Register_CP" placeholder="codigo postal" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Tel">Telefono</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Tel" id="Register_Tel" placeholder="telefono" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div> 
                                 <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Prov">Provincia</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Prov" id="Register_Prov" placeholder="Provincia" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Email">Email</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Email" id="Register_Email" placeholder="Email" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Password">Password</label>
                                    <div class="input-group">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control" id="Register_Password" name="Register_Password" placeholder="Enter Email" required>
                                        
                                        </div>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                
                                
                                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary pull-right">
                            </form>
                        </div>
        
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

        
             <script>
                $(document).ready(function () {

                $('#form_registro').validate({
                    rules: {
                        
                        Register_DNI: {

                                  minlength: 9,
                                  maxlength: 9,
                            required: true,
                            
                        },
                        Register_User:{
                             minlength: 3,
                                  maxlength: 16,
                            required: true,
                        },
                        Register_Nombre:{
                             
                                  maxlength: 16,
                            required: true,
                        },
                        Register_Apellidos:{
                             
                                  maxlength: 16,
                            required: true,
                        },
                        Register_CP:{
                            digits:true,
                                minlenght:5,
                                  maxlength: 7,
                            required: true,
                        },
                        Register_Tel:{
                            digits:true,
                                minlenght:8,
                                  maxlength: 10,
                            required: true,
                        },
                        Register_Prov:{
                                  minlenght:2,
                                  
                            required: true,
                        },
                        Register_Email:{
                                  email:true,
                            required: true,
                        },
                        Register_Password:{
                                  minlenght:4,
                            required: true,
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
                