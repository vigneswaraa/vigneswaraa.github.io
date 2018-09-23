<?php

$link=mysqli_connect('localhost','root','','taxdatabase');
 ?>


<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Korki - Tax & Finance Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- Lightgallery CSS -->
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">	
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">    
    <!-- VMap CSS -->
    <link rel="stylesheet" href="assets/css/jqvmap.min.css">    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
<?php include('inc/header.php');?>

    <!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url(assets/images/bg/page-banner-bg.jpg)" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner row align-items-center">
                
                <!-- Page Title -->
                <div class="col-lg-6 col-12">
                    <h1 class="page-title">contact us</h1>
                </div>
                
                <!-- Page Breadcrumb -->
                <div class="col-lg-6 col-12">
                    <ul class="page-breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">contact us</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Page Banner Section End -->

    <!-- Contact Section Start -->
    <div class="contact-section pt-55 pb-100">
        <div class="container">
            <div class="row">                
                <div class="col-lg-6 ml-auto mr-auto">
                    <div class="row">
					
						<!-- Section Title Start -->
						<div class="section-title text-center col-12 pb-50 pt-40">
							<h1>Get In Touch</h1>
							
						</div>
						<!-- Section Title End -->
                        
                        <!-- Contact Info Start -->
                       
                      
						<!-- Contact Info Start -->
                        
                        <!-- Contact Form Start -->
                        <div class="col-12 mt-20">
                            <div class="contact-form">
                                <form  method="post">
                                    <div class="row row-5">
                                        <div class="col-md-6 col-12 mb-20"><input type="text" name="name" placeholder="Name*"></div>
										 <div class="col-md-6 col-12 mb-20"><input type="text" name="phone" placeholder="Phone No*"></div>
                                        <div class="col-md-12 col-12 mb-20"><input type="email" name="email" placeholder="Email*"></div>
                                        <div class="col-12 mb-20"><textarea name="message" placeholder="Message"></textarea></div>
                                        <div class="col-12"><input type="submit" name="submit" value="send message"></div>
                                    </div>
                                </form>
                               <?php 
					if(isset($_POST['submit'])){
						$name=$_POST['name'];
						
						$phone=$_POST['phone'];
						$email=$_POST['email'];
						$message=$_POST['message'];
						
						$query1=$link->query("INSERT INTO contact_form(name,phone,email,message) VALUES ('$name','$phone','$email','$message')");
						
					}
					?>     
                            </div>
                        </div>
						<!-- Contact Form End -->
                        
                    </div>
                </div>
				<div class="col-lg-6">
                    <div id="contact-map"></div>
					</div>
            </div>
        </div>
    </div>
	<!-- Contact Section End -->
    
    <!-- Contact Map Start -->

	<!-- Contact Map End -->

    <!-- Footer Top Section Start -->
    <div class="footer-top-section bg-cyan-blue pt-100 pb-60">
        <div class="container">
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="footer-widget text-left col-lg-4 col-md-6 col-12 mb-40">                    
                    <h3 class="title">Contact <span>Us</span></h3>                    
                    <ul class="contact-list">
                        <li><span>Phone:</span> <a href="tel:+99858547589">+99 858 547 589</a></li>
                        <li><span>Email:</span> <a href="#">info@examplel.com</a></li>
                        <li><span>Address:</span> House 10, Road Nomber 32 <br>Ognada, Malay 1212.</li>
                    </ul>                    
                </div>
				<!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget text-center col-lg-4 col-md-6 col-12 mb-40">                    
                    <div class="footer-about">                       
                        <!-- Logo -->
                        <img src="assets/images/footer-logo.png" alt="Footer Logo">
                        <p>Combined with a handful of model sente nce structures, to generate Lorem Ipsum whilooks reasonable. The generated Lorem.</p>
                        <!-- Social -->
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>    
                            <a href="#"><i class="fa fa-twitter"></i></a>    
                            <a href="#"><i class="fa fa-instagram"></i></a>    
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>    
                            <a href="#"><i class="fa fa-linkedin"></i></a>    
                        </div>                       
                    </div>                    
                </div>
				<!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget text-right col-lg-4 col-md-6 col-12 mb-40">                    
                    <h3 class="title">INSTAGRAM <span>photos</span></h3>                   
                    <div class="footer-instagram">
                        <ul id="instagram-feed"></ul>
                    </div>                    
                </div>
				<!-- Footer Widget End -->
                
            </div>
        </div>
    </div><!-- Footer Top Section End -->

    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">                
                <!-- Footer Copyright -->
                <div class="footer-copyright text-center col-12">
                    <p>Copyright © All Right Reserved. Designed by <a href="#">KorKi</a></p>
                </div>                
            </div>
        </div>
    </div>
	<!-- Footer Bottom Section End -->
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- VMap JS -->
<script src="assets/js/jquery.vmap.min.js"></script>
<script src="assets/js/maps/jquery.vmap.world.js"></script>
<!-- Google Map Api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs"></script>
<!-- Google Map Activation -->
<script src="assets/map/contact-map.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>



</html>