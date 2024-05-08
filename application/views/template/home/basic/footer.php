<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepaginator.min.js"></script>
   
    <script>
   /*
See more options at:
http://jondmiles.com/bootstrap-datepaginator/#usage
*/


$(document).ready(function() {
// This will wait for the DOM (your HTML) to be loaded before executing aFunction

/* uncomment to use optios
  var options = {
  selectedDate: '2013-01-01',
  selectedDateFormat: 'YYYY-MM-DD'
}

$('#paginator').datepaginator(options);

*/

//  defatult settings, i.e. today's date etc.




  $('#myCarouselgallery').carousel('pause');  
  $('#paginator').datepaginator();
  $('#paginator').on('click',function(eve){
      var target = $( eve.target ); 
      if(target.hasClass("dp-nav")){
          return;
      }
      if(target.hasClass("glyphicon")){
          return;
      }
      if (target[0].className!="glyphicon") {
      //alert("click");
      $("#myModalEvents").modal('show');
       $('#myCarouselgallery').carousel({
                interval: 2500
        });
        $('#myCarouselgallery').carousel('cycle'); 
      }
  });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            $('#myCarouselgallery').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarouselgallery').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
 // jQuery(".dp-item dp-selected dp-today").append('<i onclick="alert("alert");" class="glyphicon glyphicon-plus"></i>');

  /* uncomment to add event if date is changed
  $('#paginator').on('selectedDateChanged', function(event, date) {
  // Your logic goes here
  alert('Date was changed.');
  });
  */

});
    </script>  
    <link href="<?php echo base_url(); ?>assets/css/calen.css" rel="stylesheet">
  </body>
</html>
