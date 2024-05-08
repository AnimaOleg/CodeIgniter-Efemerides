<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 90%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
            </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                    <form id="form_registro"  class="form-horizontal" action="<?php echo site_url('user/register/');?>" method="POST" role="form">

                        <div class="col-md-4">
                           
                               <!-- <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_DNI">DNI</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_DNI" id="Register_DNI" placeholder="DNI" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_User">Usuario</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_User" id="Register_User" placeholder="Usuario" required>
                                       
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Nombre">Nombre</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Nombre" id="Register_Nombre" placeholder="Nombre" required>
                                       
                                        </div>
                                         
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Apellidos">Apellidos</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Apellidos" id="Register_Apellidos" placeholder="Apellidos" required>
                                       
                                        </div>
                                         
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_CP">Codigopostal</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_CP" id="Register_CP" placeholder="codigo postal" required>
                                       
                                        </div>
                                        
                                    </div>
                                </div>  
                               <!-- <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Tel">Telefono</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Tel" id="Register_Tel" placeholder="telefono" required>
                                       
                                        </div>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div> -->
                                 <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Prov">Provincia</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Prov" id="Register_Prov" placeholder="Provincia" required>
                                       
                                        </div>
                                         
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Email">Email</label>
                                    <div class="input-group">
                                        <div class="col-sm-12"> 
                                        <input type="text" class="form-control" name="Register_Email" id="Register_Email" placeholder="Email" required>
                                       
                                        </div>
                                         
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="Register_Password">Password</label>
                                    <div class="input-group">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control" id="Register_Password" name="Register_Password" placeholder="Enter Email" required>
                                        
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                
                        </div>

                        <div class="col-md-4">
                            
                            <div class="col-sm-12">
                               <div class="col-sm-6">
                                   <img style="width:100%;" src="<?php echo base_url(); ?>assets/image/circulo_azul.png"/>
                               </div>
                                <div class="col-sm-6">
                                    <img style="width:100%;" src="<?php echo base_url(); ?>assets/image/circulo_naranja.png"/>
                               </div> 
                            </div> 
                            
                        </div>
                        
                        <div class="col-md-4">
                            
                            
                            
                        </div>
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary pull-right">
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