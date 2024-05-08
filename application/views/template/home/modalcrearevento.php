    <link href="<?php echo base_url(); ?>assets/css/createEvent.css" rel="stylesheet">

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
                        <form action="<? echo base_url()."index.php/home/do_upload" ?>" id="crear_evento" method="POST"  enctype="multipart/form-data">   
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
                                <span onclick="jQuery('#myMapModal').modal()" class="glyphicon glyphicon-euro"></span>
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

<div class="modal fade" id="myMapModal">
    <div class="modal-dialog-lg" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title">Modal title</h4>

            </div>
            <div class="modal-body">
                
                        <div id='map-leaflet' class='map'> </div>
                    
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    
    


     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script> 
     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script> 
     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.js"></script> 
     <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.min.js"></script> 
     <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.3/mapbox.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.3/mapbox.css' rel='stylesheet' />
  <style>
    .modal-body { margin:0; padding:0; }
    .map { position: initial !important;top:0; bottom:0; width:90%; }
  </style>
     <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
         
  <!--       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC16ZJptbBaCThTaFs4E963B-6ZPb1BLRQ&libraries=places&callback=initAutocomplete"
         async defer></script> -->
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

L.mapbox.accessToken = 'pk.eyJ1IjoiY2VyZGl0bzQzIiwiYSI6ImNpaTc5bHAzaDAyMmt0ZmtxMXJ1cmMwMWsifQ.A_fwWmVlgYvHq_TJFkAanA';
var mapLeaflet = L.mapbox.map('map-leaflet', 'mapbox.light')
  .setView([37.8, -96], 4)

L.marker([38.913184,-77.031952]).addTo(mapLeaflet);
L.marker([37.775408,-122.413682]).addTo(mapLeaflet);

mapLeaflet.scrollWheelZoom.disable();


/*
var map;        
            var myCenter=new google.maps.LatLng(39.45, -0.4);
var marker=new google.maps.Marker({
    position:myCenter
});

function initialize() {
  var mapProp = {
      center:myCenter,
      zoom: 8,
      draggable: true,
      scrollwheel: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
  marker.setMap(map);
    
  google.maps.event.addListener(marker, 'click', function() {
      
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
    
  }); 
};
google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", resizingMap());

$('#myMapModal').on('show.bs.modal', function() {
   //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
   resizeMap();
});

function resizeMap() {
   if(typeof map =="undefined") return;
   setTimeout( function(){resizingMap();} , 400);
}

function resizingMap() {
   if(typeof map =="undefined") return;
   var center = map.getCenter();
   google.maps.event.trigger(map, "resize");
   map.setCenter(center); 
}

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
  google.maps.event.addDomListener(window, "resize", resizingMap());

$('#myMapModal').on('show.bs.modal', function() {
   //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
   resizeMap();
});

function resizeMap() {
   if(typeof map =="undefined") return;
   setTimeout( function(){resizingMap();} , 400);
}

function resizingMap() {
   if(typeof map =="undefined") return;
   var center = map.getCenter();
   google.maps.event.trigger(map, "resize");
   map.setCenter(center); 
}
}

*/

    </script>
                   