<?
$title = "Home";
?>
<? include("includes/header.php")?>
<main class="sunset">

        <section class="wrapper">

            <h1 class="title"> Transportation Simplified </h1>



        </section>

    </section>


    <section class="content wrapper">
           <div class="row clearfix">
               <div>
                   <img src="assets/images/mapicon.png" height="100" width="100">
                   <h3> Destination History </h3>
                   <p> Within our management system you will be able to view bicycle destinations. </p>

               </div>
               <div>
                   <img src="assets/images/mobile.png" height="100" width="100">
                   <h3> Immediate Notifications </h3>
                   <p style="margin-left: 95px"> Our management system will provide immediate notifications when an employee requests to check out a bike via (Email, Text etc..).</p>

               </div>
               <div>
                   <img src="assets/images/checkmark.png" height="60" width="60" style="padding: 25px">
                   <h3> Simplicity</h3>
                   <p> Dynami Systems is easy to operate, and very user friendly. </p>

               </div>
           </div>
    </section>
</main>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/assets/js/bigvideo.js"></script>
<link href=/assets/css/bigvideo.css>
<script>$(function() {
        var BV = new $.BigVideo();
        BV.init();
        BV.show('http://dynamisystems.com.mp4');
    });</script>

<script type="text/javascript">

    $(function() {
        var BV = new $.BigVideo();
        BV.init();
        BV.show('/assets/video/bikeride.mp4',{doLoop:true});

        $('header').addClass('frontvid')
    });
</script>


