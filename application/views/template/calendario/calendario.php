<section id="services" style="background:grey;">
  <div class="container">
    <div class="row text-center">

      <?php//include('perfil.php');?>
      <!--
      <canvas id="myCanvas"></canvas>
      -->

      <div class="intro-text2">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <div id="main_area">
          <!-- Slider -->
          <div class="row">
            <div id="calendar" style="margin-top: 20px;margin-left: 20px;"></div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>












<?php  echo get_calendar_events_img(); ?>
    <!-- jQuery --> 
   <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script>
    $( document ).ready(function() {
        
/*        
     canvas = document.getElementById("myCanvas");
     img1=document.getElementById("fperfil");
     img1.onload=function(){
     ctx = canvas.getContext("2d");
ctx.fillStyle = "#FF0000";
ctx.beginPath();
ctx.moveTo(25, 0);
ctx.lineTo(0, 50);
ctx.lineTo(50, 50);
ctx.closePath();
// the outline
ctx.lineWidth = 3;
ctx.strokeStyle = '#666666';
ctx.stroke();
    pat=ctx.createPattern(img1,"repeat");
ctx.fillStyle=pat;
ctx.fill();
canvas = document.getElementById("myCanvas");
dataUrl = canvas.toDataURL("image/png");
console.log(dataUrl);
     }
*/
    });
</script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!--<script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/agency.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
     
    <script src='<?php echo base_url(); ?>assets/calendario/lib/moment.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/calendario/fullcalendar.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/calendario/lang-all.js'></script>


    <script>
         $( document ).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    $('#calendar').fullCalendar({
        lang:'es',
      header: {
        left: '',
        center: 'title',
        right: 'month'
      },
      editable: false,
      events: [
          <?php // echo get_calendar_events(); ?>
          /*
        {
          title: 'All Day Event',
          start: new Date(y, m, 1)
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d-5),
          end: new Date(y, m, d-2)
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d-3, 16, 0),
          allDay: false
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+4, 16, 0),
          allDay: false
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d+1, 19, 0),
          end: new Date(y, m, d+1, 22, 30),
          allDay: false
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/'
        }*/
      ]
    });
    $('.fc-left').append('<button id="button_back" value="back"/>');
    $('.fc-left').append('<button id="button_next" value="next"/>');
    
    $("#button_back").click(function() {
    $('#calendar').fullCalendar('prev');
    put_carus();
    });
    $("#button_next").click(function() {
    $('#calendar').fullCalendar('next');
    put_carus();
    });
    put_carus();
    function put_carus(){
    i=0;
    $('td .fc-day-number').each(function(index){
    
    $( this ).append('<div id="car'+i+'" class="carousel slide" data-ride="carousel"><div class="carousel-inner" role="listbox"> </div><a class="left carousel-control" href="#car'+i+'" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#car'+i+'" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div> </div>');
    
    i++;
    });
    $(".item").each(function(index){
        esto=$(this);
        datadateitem=$(this).attr('data-dateitem');
        $("[data-date="+datadateitem+"]").each(function(index){
           
           // alert($(this).find("[role='listbox']").prop('outerHTML'));
            $(this).find("[role='listbox']").append(esto.clone());
           
        });
        $("[data-date="+datadateitem+"]").each(function(index){
            
           
            $(this).find(".item").first().addClass("active");
           
        });
       // $("[data-date="+datadateitem+"]").find(".carousel .slide").append($(this));
    });
    }
       
    });
    
</script>
