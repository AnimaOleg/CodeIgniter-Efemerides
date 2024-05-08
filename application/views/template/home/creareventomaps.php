<link href="<?php echo base_url(); ?>assets/css/createEvent.css" rel="stylesheet">     
 <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.1/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v0.0.0/mapbox-gl-geocoder.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v0.0.0/mapbox-gl-geocoder.css' type='text/css' />
  <style>
    .body { margin:0; padding:0; }
    .map { position:absolute; top:0; bottom:0; width:100%;}
    #info {
        display: block;
        position: relative;
        margin: 0px auto;
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        font-size: 12px;
        text-align: center;
        color: #222;
        background: #fff;
    }
  </style>
  
  <body>
      <div class="col-lg-3"> </div>
      <div class="col-lg-6"> 
      <div style="position:relative;width: 100%;height: 60%;">
      <div id='map' class='map'> </div>
      
      </div
      </div>
      <div class="col-lg-3"> </div>
  </body>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiY2VyZGl0bzQzIiwiYSI6ImNpaTc5bHAzaDAyMmt0ZmtxMXJ1cmMwMWsifQ.A_fwWmVlgYvHq_TJFkAanA';
var map = new mapboxgl.Map({
      container: 'map',
    style: 'mapbox://styles/mapbox/streets-v8',
    center: [-0.3661249509750917, 39.47065940494633],
    zoom: 11,
    
});
  var marker=null;
map.on('click', function (e) {
    if(marker!=null){
        map.removeSource("markers");
        map.removeLayer("markers");
    }else{
       marker="markers"; 
    }
    map.addSource("markers", {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [ e.lngLat["lng"],  e.lngLat["lat"]]
                },
                "properties": {
                    "title": "TU EVENTO",
                    "marker-symbol": "marker"
                }
            }]
        }
    });
    map.addLayer({
        "id": "markers",
        "type": "symbol",
        "source": "markers",
        "layout": {
            "icon-image": "{marker-symbol}-15",
            "text-field": "{title}",
            "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
            "text-offset": [0, 0.6],
            "text-anchor": "top"
        },
        "paint": {
            "text-size": 12
        }
    });

});
/*
map.on('dblclick', function (e) {
    var cache = [];
JSON.stringify(e, function(key, value) {
    if (typeof value === 'object' && value !== null) {
        if (cache.indexOf(value) !== -1) {
            // Circular reference found, discard key
            return;
        }
        // Store value in our collection
        cache.push(value);
    }
    return value;
});


latlng=JSON.stringify(cache[1]);
    document.getElementById('info').innerHTML =
        // e.point is the x, y coordinates of the mousemove event relative
        // to the top-left corner of the map
            // e.lngLat is the longitude, latitude geographical position of the event
        latlng+"<br/>"+cache[1]["lat"]+"<br/>"+cache[1]["lng"];
});
*/
//mapLeaflet.addControl(new L.mapbox.);
map.addControl(new mapboxgl.Geocoder());
map.addControl(new mapboxgl.Navigation({position: 'top-right'}));
//map.scrollWheelZoom.disable();
</script>