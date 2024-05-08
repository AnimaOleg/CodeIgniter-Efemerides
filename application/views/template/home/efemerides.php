<?php
    $utility_url="template/utility";
    $scripts_url="template/scripts";
    /*
      DEBERIA FUNCIONAR
    */
    $this->load->view($utility_url.'/head1.php');
    $this->load->view($scripts_url.'/facebook.php');
    $this->load->view($utility_url.'/navbar.php');


?>


<section>
      <div class="row">
            <div class="col-sm-7" style="" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <?php $i=0; foreach (get_the_events() as $event){
                    echo '<li class="col-sm-3">';
                        
                    echo '<a class="" href="'.base_url().'index.php/home/evento/'.$event["id"].'" id="carousel-selector-'.$i.'">';
                    
                    echo '<img style="width:100%;height: auto;" src="'.base_url().'uploads/eventos/'.$event["email"].'_.jpg">';
                    
                    echo '</a>';    
                     
                    echo '</li>';
                    $i++;
                    } ?>
                    <!--<li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img style="width: 82.375px;height: 82.375px;" src="<?php echo base_url(); ?>assets/image/background.jpg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img style="width: 82.375px;height: 82.375px;" src="<?php echo base_url(); ?>assets/image/background2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img style="width: 82.375px;height: 82.375px;" src="<?php echo base_url(); ?>assets/image/background3.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img style="width: 82.375px;height: 82.375px;" src="<?php echo base_url(); ?>assets/image/background2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img style="width: 82.375px;height: 82.375px;" src="http://placehold.it/150x150&text=15"></a>
                    </li>-->
                </ul>
            </div>




            <div class="col-sm-5" style="margin-top: 20px;">
                <div class="col-xs-12"  id="slider">



                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12"  id="carousel-bounding-box">
                            <div class="carousel slide" style="position:fixed;" id="myCarouselgallery">
                                <!-- Carousel items -->
                                <div class="carousel-inner" >
                                    <?php $i=0; foreach (get_the_events() as $event){
                                        if($i==0){
                                            echo '<div class="active item" data-slide-number="0">';    
                                                                }else{
                                            echo '<div class="item" data-slide-number="'.$i.'">';
                                                                }
                                            echo '<img style="width: 400px;height: 200px;" src="'.base_url().'uploads/eventos/'.$event["email"].'_.jpg">';
                                             
                                            echo '<div class="row text-center" style="position: relative;top: -145px;"> 
                                            <div class="box col-md-3">
                                            <div class="box-size" style="height: auto;">
                                            <div><span class="glyphicon glyphicon-euro"></span></div>
                                            
                                            <div class="box-font">
                                                '.$event['box_euro'].','.$event['box_centimo'].'
                                            </div></div></div>';
                                            echo '<div class="box col-md-3">
                                            <div class="box-size" style="height: auto;">
                                            <div><span class="glyphicon glyphicon-time"></span></div>
                                            
                                            <div class="box-font">
                                                '.$event['box_hora'].':'.$event['box_minuto'].'
                                            </div></div></div>';
                                            echo '<div class="box col-md-3">
                                            <div class="box-size" style="height: auto;">
                                            <div><span class="glyphicon glyphicon-calendar"></span></div>
                                            
                                            <div class="box-font">
                                                '.$event['box_dia'].'/'.$event['box_mes'].'/'.$event['box_any'].'
                                            </div></div></div>';
                                            echo '<div class="box col-md-3">
                                            <div class="box-size" style="height: auto;">
                                            <div><span class="glyphicon glyphicon-earphone"></span></div>
                                            
                                            <div class="box-font">
                                                '.$event['box_telefono'].'
                                            </div></div></div>';
                                            
                                            echo '</div></div>'; 
                                        
                                        //echo '<button type="button" style="width: 100%;" class="btn btn-primary " value="Informacion de evento" >Informacion de evento</button>';
                                            $i++;
                                            } ?>








                                    <!--<div class="active item" data-slide-number="0">
                                        <img style="width: 400px;height: 300px;" src="<?php echo base_url(); ?>assets/image/background.jpg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img style="width: 400px;height: 300px;" src="<?php echo base_url(); ?>assets/image/background2.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img style="width: 400px;height: 300px;" src="<?php echo base_url(); ?>assets/image/background3.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img style="width: 400px;height: 300px;" src="<?php echo base_url(); ?>assets/image/background2.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=4"></div>

                                    <div class="item" data-slide-number="5">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=5"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=6"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=7"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=8"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=9"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=10"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=11"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img style="width: 400px;height: 300px;" src="http://placehold.it/470x480&text=15"></div>
                                </div>-->
                                <!-- Carousel nav -->
                              <!--  <a class="left carousel-control" href="#myCarouselgallery" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarouselgallery" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>-->
                               <!-- <button type="button" style="width: 100%;" class="btn btn-primary " value="Informacion de evento" >Informacion de evento</button>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


    <canvas id="myCanvas"></canvas>



<?php
    $this->load->view($utility_url.'/footer.php');
    $this->load->view($scripts_url.'/misScripts.php');
?>
