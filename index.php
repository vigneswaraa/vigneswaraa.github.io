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

    <!-- Header Section Start -->
    <div class="header-section">
        <!-- Header Top Start -->
        <div class="header-top side-padding">
            <div class="container">
                <div class="row">
					<div class="col">
                        <!-- Header Top Links Start -->
                        <div class="header-links">
                            <a href="#"><i class="fa fa-phone"></i>info@example.com  </a>
                            <a href="#">/</a>
                            <a href="#"><i class="fa fa-envelope"></i> +98 558 547 589</a>
                        </div><!-- Header Top Links End -->
                    </div>
                    <div class="col">
                        <!-- Header Social Start -->
                        <div class="header-social">
                            <a href="#">Mon - Fri : 9am to 5pm </a>
                            <a href="#"> / </a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div><!-- Header Social End -->
                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
       
        <!-- Header Bottom Start -->
       <?php include('inc/header.php'); ?>
    </div><!-- Header Section End -->

    <!-- Hero Section Start -->
    <div class="hero-section">
        <!-- Hero Slider Start -->
        <div class="hero-slider">
			
			<!-- Hero Item Start -->
            <div class="hero-item bg-theme">
                <div class="container">
                    <div class="row align-items-end">                     
                        <!-- Hero Content -->
                        <div class="hero-content col-sm-12 col-md-12 col-lg-6">
						   <div class="sub-title"><h3>Don’t Worry,</h3></div>
                           <div class="title"><h1>Our Expert Adviser</h1></div>
                           <div class="title-2"><h1>Always With You</h1></div>
                           <div class="button"><a href="#" class="btn btn-lg btn-red">About More</a></div>
                        </div>                        
                        <!-- Hero Image -->
                        <div class="hero-image col-sm-4 col-md-4 col-lg-6">
                           <img src="assets/images/hero/1.png" alt="Hero Image">
                        </div>                
                    </div>
                </div>
            </div><!-- Hero Item End -->
			
            <!-- Hero Item Start -->
            <div class="hero-item bg-theme">
                <div class="container">
                    <div class="row align-items-end">
                        <!-- Hero Content -->
                        <div class="hero-content col-sm-12 col-md-12 col-lg-6">
						   <div class="sub-title"><h3>We Are Ready,</h3></div>
                           <div class="title"><h1>Get your tax Pay</h1></div>
                           <div class="title-2"><h1>When it is time to pay taxs</h1></div>
                           <div class="button"><a href="#" class="btn btn-lg btn-red">About More</a></div>
                        </div>
                        <!-- Hero Image -->
                        <div class="hero-image col-sm-4 col-md-4 col-lg-6">
                           <img src="assets/images/hero/1.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div><!-- Hero Item End -->
			
        </div><!-- Hero Slider End -->
    </div><!-- Hero Section End -->
	
	<!-- Mission Area -->
	<div class="mission-area bg-gray pt-60">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6 col-sm-12">
					<div class="mission-area-content pt-35">
						<h2>Why you should file Income Tax Return?</h2>
						<p>To file an Income Tax Return is an obligation placed on every citizen of India by the Government. However besides this, there are various reasons, why you should file your Income Tax Return.</p>
						<ul class="cr-liststyle-1">
							<li>Every Individual whose gross total income is more than the Basic Exemption limit is required to file Income Tax Return, even if there is no tax due pending.</li>
							<li>Failure to file Income Tax Return within one year from the end of the relevant financial year, attracts penalty of Rs.5,000/-, even though tax payable is Nil-Section 271F</li>
							
							<li> When you file Income Tax Return, you create your Financial Record with Tax department. This financial / tax history is positively viewed and favourably used by most agencies with whom you may need to interact, such as when you avail any kind of loan (home, personal, vehicle loan) or when you apply for VISA, etc.</li>
						</ul>
						
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-sm-12">
					<div class="mission-area-thumb">
						<img class="wow fadeInRight" src="assets/images/about/about.png" alt="mission area thumb">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Mission Area -->
	
    <!-- Service Section Start -->
    <div class="feature-section pt-55 pb-70">
        <div class="container">
            <div class="row">
                
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Our Services</h1>
                    
                </div><!-- Section Title End -->
                
                <!-- Feature Start-->
                <div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/gst.png" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">GST Registration</a></h4>
							<p>As per the GST Council, entities in the Northea..</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
				
				<!-- Feature Start-->
                <div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/ngo.jpg" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Section 8 Company(NGO)</a></h4>
							<p>A Section 8 Company..NGO (Non-Government Organisation) </p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
				
				<!-- Feature Start-->
                <div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/plc.jpg" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Private Limited Company</a></h4>
							<p>Private Limited Company, the <br>
							most popular legal...</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
				
				<div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/llp.jpg" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Limited Liability Partnership</a></h4>
							<p>Limited Liability Partnership has been introduc...</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
				<!-- Feature End-->
                <div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/one.png" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">One Person Company</a></h4>
							<p>One Person company, as the name suggests, it is...</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
				<div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/llpfill.png" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">LLP Annual Filing</a></h4>
							<p>All LLPs shall be under obligation to maintain ...</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>  
          
					</div>
                </div>
				<div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/caf.png" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Company Annual Filing</a></h4>
							<p>All the companies doing business in India are r...</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
				<div class="col-lg-3 col-md-6 col-12"> 
					<div class="feature text-center mb-30"> 
						<!-- Icon -->
						<div class="image">
							<img src="assets/images/tax.png" alt="" />
						</div>                   
						<!-- Content -->
						<div class="content">
							<h4><a href="service-details.html">Income Tax Return</a></h4>
							<p>It is a prescribed form through which the parti...</p>
							<a href="blog-details.html" class="btn btn-sm btn-red">About More</a>
						</div>            
					</div>
                </div>
            </div>
        </div>
    </div>
	<!-- Service Section End -->
	
	<!-- Video Area -->
	<div class="video-area bg-fixed" style="background-image: url(assets/images/bg/1.png)" data-overlay="theme-color" data-opacity="8">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
					<div class="video-area-inner text-center">
						<a class="video-popup-trigger" href="https://vimeo.com/104509732">
							<img src="assets/images/icons/icon-play.png" alt="Play">
						</a>
						<h1>Success Depends on a Right Plan</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Video Area -->

	<!-- Counter Area -->
	>
	

	<!-- Service Section End -->
	
	
	
	<!-- Campaign Section Start -->
    <div class="campaign-section pt-55 pb-70">
        <div class="container">
            <div class="row">               
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Our Gallery</h1>
                   
                </div>
				<!-- Section Title End -->                              
            </div>
			<div class="row">
                
                <div class="col-12">
                    <div class="isotop-filter">
                        <button data-filter="*" class="active">all</button>
                        <button data-filter=".consultant">Consultant</button>
                        <button data-filter=".tax">Tax</button>
                        <button data-filter=".finance">Finance</button>
                        <button data-filter=".business">Business</button>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="isotop-grid row">

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item consultant col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="assets/images/gallery/3-1.jpg" alt="Gallery Image">
                                <a href="assets/images/gallery/1-1.jpg" class="gallery-popup"><img src="assets/images/icons/pro.png" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item tax col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="assets/images/gallery/3-2.jpg" alt="Gallery Image">
                                <a href="assets/images/gallery/1-5.jpg" class="gallery-popup"><img src="assets/images/icons/pro.png" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item finance col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="assets/images/gallery/3-3.jpg" alt="Gallery Image">
                                <a href="assets/images/gallery/1-6.jpg" class="gallery-popup"><img src="assets/images/icons/pro.png" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item business tax col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="assets/images/gallery/3-4.jpg" alt="Gallery Image">
                                <a href="assets/images/gallery/1-2.jpg" class="gallery-popup"><img src="assets/images/icons/pro.png" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item consultant col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="assets/images/gallery/3-5.jpg" alt="Gallery Image">
                                <a href="assets/images/gallery/1-3.jpg" class="gallery-popup"><img src="assets/images/icons/pro.png" alt="" /></a>
                            </div>
                        </div>

                        <!-- Gallery Isotop Item -->
                        <div class="isotop-item tax business col-md-4 col-12 mb-30">
                            <div class="gallery">
                                <img src="assets/images/gallery/3-6.jpg" alt="Gallery Image">
                                <a href="assets/images/gallery/1-4.jpg" class="gallery-popup"><img src="assets/images/icons/pro.png" alt="" /></a>
                            </div>
                        </div>


                    </div>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Campaign Section End -->	
	
	<!-- Request Call Back Section Start -->
    <div id="donation" class="donation-section pt-95 pb-70" style="background-image: url(assets/images/bg/2.jpg)" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="row">                
                <!-- Section Title Start -->
                <div class="section-title title-white text-center col-12 mb-60">
                    <h1>Enquiry Us</h1>
                    
                </div>
				<!-- Section Title End -->                
                <div class="col-12">                    
                    <!-- Donation Form Start -->
                    <form action="#" method="post">
                        <div class="donation-form row">
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><input type="text" name="name" placeholder="Name *" style="color:#222"></div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><input type="email" name="email" placeholder="E-Mail *"></div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><input type="text" name="phone" placeholder="Phone *"></div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30"><button class="btn btn-red btn-hover-dark-red" name="submit">For Consultation</button></div>
                        </div>
                    </form>
					<?php 
					if(isset($_POST['submit'])){
						$name=$_POST['name'];
						$email=$_POST['email'];
						$phone=$_POST['phone'];
						
						$query=$link->query("INSERT INTO enquiry_form(name,email,phone) VALUES ('$name','$email','$phone')");
						
					}
					?>                   
                </div>                
            </div>
        </div>
    </div>
	<!-- Donation Section End -->
	
	<!-- Mission Section Start -->
   
	<!-- Mission Section End -->


	<!-- News Section End -->
	
    <!-- Footer Top Section Start -->
  <?php include('inc/footer.php'); ?>
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
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>



</html>