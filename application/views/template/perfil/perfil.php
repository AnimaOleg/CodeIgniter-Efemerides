<section id="services" style="background:grey;">
    <div class="container">
        <div class="col-md-12" style="border:1px solid black;position:float;float:left;width:20%">
                <p class="text-muted">
                    <?php 
                        if(isset($_GET['ref']) == null)
                        {
                            echo get_profile(get_id());
                        }
                        else
                        {                  
                            echo get_profile($_GET['ref']);
                        }

                    ?>
                    <form method="post" action="'.base_url().'index.php/perfil">
                        <input type="submit" name="guardar" value="guardar">
                    </form>
                </p>
            </div>
        </div>
    </div>
</section>