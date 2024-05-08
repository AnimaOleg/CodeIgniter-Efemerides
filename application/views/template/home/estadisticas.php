<script>
    fecha='<?php echo date("Y-m-d H:i:s");  ?>';
    $( document ).ready(function() {
        segundos=0;
         tiempo_crono = setInterval(function(){
             segundos++;
         },1000)
     
    });
    $(window).unload(function(){
    $.ajax({
        url: "<?php echo site_url('estadisticas/tiempo/time/');?>",
        
        type:"POST",
        async: false, // this may be needed to make sure the browser doesn't
                      // unload before this is done
        data:{url:window.location.href ,time:segundos,fecha:fecha},              
        success: function(data){
          return data;
        }
    });
    
});
     </script>