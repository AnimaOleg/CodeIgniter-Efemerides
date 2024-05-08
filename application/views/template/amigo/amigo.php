<section id="services" style="background:grey;">
    <div class="container">



        <div class="row text-center">
            <div class="col-lg-3 col-xs-3">

                <p class="text-muted">

                    <div name="div_buscador" id="div_buscador"
                    style="width:100%; min-height:80px; max-height:250px; background:lightgrey; float:left; border:0;
                    margin:0px; padding:12px; position:relative; display:inline; overflow:auto;">

                        <?php include('buscador_usuarios.php'); ?>
                    </div>

                    <div name="div_invitaciones" id="div_invitaciones"
                        style="width:100%; min-height:80px; max-height:250px; background:lightgrey; float:left; border:0;
                        margin:0px; border-top:solid 5px grey; padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_invitaciones.php'); ?>
                    </div>
                </p>
                
            </div>

            <!-- ======================================== -->

            <div class="col-lg-5 col-xs-12" style="top:-40px"> <!-- hidden-xs -->
                <h4 class="service-heading" style="text-align:left">Novedades</h4>

                <p class="text-muted">
                    <div name="div_novedades" id="div_novedades"
                    style="width:100%; min-height:80px; max-height:250px; background:lightgrey; float:left; border:0;
                    margin:0px; border-top:solid 25px lightgrey;padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_novedades.php'); ?>
                    </div>

                    <div name="div_novedades_empresas" id="div_novedades_empresas"
                        style="width:100%; min-height:80px; max-height:250px; background:lightgrey; float:left; border:0;
                        margin:0px; border-top:solid 5px grey; padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_novedades_empresas.php'); ?>
                    </div>


                    <div name="div_last_amigos" id="div_last_amigos"
                    style="width:100%; min-height:80px; max-height:500px; background:lightgrey; float:left; border:0;
                    margin-top:10px; border-top:solid 25px lightgrey;padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_last_amigos.php'); ?>
                    </div>

                    <div name="div_last_seguidores" id="div_last_seguidores"
                        style="width:100%; min-height:80px; max-height:500px; background:lightgrey; float:left; border:0;
                        margin:0px; border-top:solid 5px grey; padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_last_seguidores.php'); ?>
                    </div>
                </p>

            </div>

            <!-- ======================================== -->

            <div class="col-lg-4 col-xs-12">

                <p class="text-muted" style="text-align:center">

                    <div name="div_contactos_amigos" id="div_contactos_amigos"
                    style="width:100%; min-height:50px; max-height:250px; background:lightgrey; float:left; border:0;
                    margin:0px; padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_amigos.php'); ?>
                    </div>

                    <div name="div_contactos_empresas" id="div_contactos_empresas"
                        style="width:100%; min-height:50px; max-height:250px; background:lightgrey; float:left; border:0;
                        margin:0px; border-top:solid 5px grey; padding:4px; position:relative; display:inline; overflow:auto;">

                        <?php include('lista_empresas.php'); ?>
                    </div>
                </p>

            </div>

        </div>
    </div>
</section>








<script>
    function buscarScriptUsuarios(){
        var info2 = $("#buscador_usuarios").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url().'index.php/amigo/autocompletar_usuarios'; ?>",
            data: {info: info2},
            success: function (data) {
                //event.preventDefault();
                $('#contenedor_usuarios').html(data);
            }
        });
    }
    function add_friendScript(paramX)
    {
        jQuery.ajax({
            url: "<?php echo base_url().'index.php/amigo/add_friendCont'; ?>",
            method: "POST",
            data:{
                    idamigo_test:paramX,
            }
        }).done(function(enviarDatos) {
            $("#div_invitaciones").html(enviarDatos);
        });
    }
    function del_friendScript(paramX)
    {
        jQuery.ajax({
            url: "<?php echo base_url().'index.php/amigo/del_friendCont'; ?>",
            method: "POST",
            data:{
                    idamigo_test:paramX,
            }
        }).done(function(enviarDatos) {
            $("#div_invitaciones").html(enviarDatos);
        });
    }
    function del_seguidoresScript(paramX)
    {
        jQuery.ajax({
            url: "<?php echo base_url().'index.php/amigo/del_seguidoresCont'; ?>",
            method: "POST",
            data:{
                    idamigo_test:paramX,
            }
        }).done(function(enviarDatos) {
            $("#div_contactos_empresas").html(enviarDatos);
        });
    }
    function can_friendScript(paramX)
    {
        jQuery.ajax({
            url: "<?php echo base_url().'index.php/amigo/can_friendCont'; ?>",
            method: "POST",
            data:{
                    idamigo_test:paramX,
            }
        }).done(function(enviarDatos) {
            $("#div_invitaciones").html(enviarDatos);
            //$("#div_contactos_amigos").html(enviarDatos);
        });
    }
    function acc_friendScript(paramX)
    {
           jQuery.ajax({
            url: "<?php echo base_url().'index.php/amigo/acc_friendCont'; ?>",
            method: "POST",
            data:{
                    idamigo_test:paramX,
            }
        }).done(function(enviarDatos) {
            $("#div_contactos_amigos").html(enviarDatos);
            //$("#div_novedades").html(enviarDatos);
        });
    }

    function follow_empresasScript(paramX)
    {
           jQuery.ajax({
            url: "<?php echo base_url().'index.php/amigo/follow_empresasCont'; ?>",
            method: "POST",
            data:{
                    idamigo_test:paramX,
            }
        }).done(function(enviarDatos) {
            $("#div_contactos_empresas").html(enviarDatos);
            //$("#div_novedades_empresas").html(enviarDatos);
        });
    }
</script>   