<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="/assets/images/finalicon.png">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- The title of the page that will appear in the browser tab/window -->
        <title><?= $title ?></title>

        <!--[if lt IE 9]>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">



        jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });

	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;

	$('#slider').css({ width: slideWidth, height: slideHeight });

	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

}); </script>


        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:300' rel='stylesheet' type='text/css'>
        <link href="assets/css/styles.css?t=<? echo time();?>"  rel="stylesheet" type="text/css">
        <link href="assets/css/social.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="finalicon.png">
    </head>

    <body>


        <header>

            <section class="wrapper"> 
                
                <div>
               
                    <img src="assets/images/logo8.png" height="57px">
               
                    <nav>
                        <ul>

                            <li><a href="index.php">Home</a></li>
                            <li><a href="pricing.php">Features</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>

                        </ul>
                        
                        <section class="social_section">
                            <a class="social facebook thirtytwo" < a href="https://www.facebook.com/dynamisystems" target="_blank"></a>
                            <a class="social twitter thirtytwo" < a href="https://twitter.com/dynamisystems" target="_blank"></a>
                        </section>
                    </nav> 
                </div>
            </section>
        </header>
       