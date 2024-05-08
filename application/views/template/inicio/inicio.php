<section>
        <div class="container">
            <div class="col-sm-12" style="" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                
                <div id="portfolio">
                    <?php 
                    
                    foreach (get_the_events() as $arrevent){
                      
                        echo '<div class="col-md-6 col-xs-12" >';
                        
                        foreach ($arrevent as $event){
                           //var_dump($event);
                  if($event["prioridad"]==NULL){
                        
                        $span="height: 185px;width: 50%;";
                        $hei="height: 185px;";
                    }
                       if($event["prioridad"]==1){
                        
                        $span="height: 185px;width: 50%;";
                        $hei="height: 185px;";
                    }
                    if($event["prioridad"]==2){
                        
                        $span="height: 400px;width: 50%;";
                        $hei="height: 400px;";
                    }
                    if($event["prioridad"]==3){
                       
                        $span="height: 400px;width: 100%;";
                        $hei="height: 400px;";
                    }
                    if (/*new DateTime() < new DateTime($event["box_any"]."-".$event["box_mes"]."-".$event["box_dia"])*/ true) {
                    echo '<div class="portfolio-item"  style="'.$span.'position:relative;float:left;padding:5px;">';
                    
                    //echo '<div>'.count(get_assistants_to_event($event["id"])).'</div>';
                    echo '<a class="portfolio-link" style="max-width: 1200px;" href="'.base_url().'index.php/home/evento/'.$event["id"].'">';
                    echo '<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <div class="">assistentes<br/>'.count(get_assistants_to_event($event["id"])).'</div>
                            </div>
                        </div>';
                    echo '<img class="img-responsive" style="width: 100%;'.$hei.'" src="'.base_url().'uploads/eventos/'.$event["img"].'_.jpg">';
                    
                    echo '</a>';    
                    
                    echo '</div>';
                    
                    }
                    
                    }
                    echo '</div>';
                    }?>
                   
                </div>
            </div>
    </div>


</section>


<canvas id="myCanvas"></canvas>
