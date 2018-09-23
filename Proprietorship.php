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

<?php include('inc/header.php'); ?>
  <!-- Header Section End -->

    <!-- Page Banner Section Start -->
    <div class="page-banner-section" style="background-image: url(assets/images/bg/page-banner-bg.jpg)" data-overlay="theme-color" data-opacity="8">
        <div class="container">
            <div class="page-banner1 row align-items-center">
                
                <!-- Page Title -->
                <div class="col-lg-6 col-lg-offset-2 col-12">
                    <h1 class="page-title">Proprietorship</h1>
                </div>
                
                <!-- Page Breadcrumb -->
                <div class="col-lg-3 col-md-offset-3" id="cont-form">
                    <div class="contact-form">
						<h2 style="text-align:center">Enquire Form</h2>
                                <form  method="post">
                                    <div class="row row-5">
                                        <div class="col-md-12 col-12 mb-20"><input type="text" name="name" placeholder="Name*"></div>
										 <div class="col-md-12 col-12 mb-20"><input type="text" name="phone" placeholder="Phone No*"></div>
                                        <div class="col-md-12 col-12 mb-20"><input type="email" name="email" placeholder="Email*"></div>
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
                
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- About Candidate Section Start -->
    <div class="candidate-section pt-100 pb-65">
        <div class="container">
            <div class="row">
                
                <!-- Candidate Content Start -->
                <div class="candidate-content col-lg-12 col-12 mb-30">               
                    <h1>Proprietorship</h1>
                    <h3>"The Sole Proprietorship Is A Popular Business Form Due To Its Simplicity, Ease Of Setup, And Nominal Cost But Is Not A Legal Entity"</h3>
                    <p>The sole proprietorship is the simplest business form under which one can operate a business. The sole proprietorship is not a legal entity.A sole proprietor need only register his name and secure local licenses, and the sole proprietor is ready for business.</p>
					<p>A distinct disadvantage, however, is that the owner of a sole proprietorship remains personally liable for all the business’s debts. So, if a sole proprietor business runs into financial trouble, creditors can bring lawsuits against the business owner. </p>
                    <p>There is no mechanism provided by the Government of India for the registration or incorporation of a Proprietorship. Therefore, the existence of a proprietorship is established only by tax registrations and other business registrations that a Proprietorship is required to have as per the rules and regulations.</p>                    
                </div>
				<!-- Candidate Content End -->
                
                <!-- Candidate Content Start -->
                
                
            </div>
        </div>
    </div><!-- About Candidate Section End -->

    <!-- Biography Section Start -->
    <div class="biography-section bg-theme pt-95 pb-100">
        <div class="container">
            <div class="row">
                
                <!-- Section Title Start -->
                <div class="section-title title-white text-center col-12 mb-70">
                    <h1>PROPRIETORSHIP FILING PROCESS</h1>
                   
                </div><!-- Section Title End -->
                
                <!-- Biography Timeline Start -->
                <div class="col-lg-12 col-12 ml-auto mr-auto">
                    <div class="timeline-wrap">
                        <span class="timeline-proces"></span>
                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>Proprietership</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>PROPRIETERSHIP</h4>
                                <p>Proprietorship is recognised through one or more government registrations. Our representatives will advise you about the ones you will need, based on the business you're in.</p>
                            </div>

                        </div><!-- Single Timeline End -->

                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>Selection on Type of Registration</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>SELECTION ON TYPE OF REGISTRATION</h4>
                                <p>We will help you decide what registration you need, whether Service tax, Vat, Import/Export code, Shops and Establishments registration.</p>
                            </div>

                        </div>
						<!-- Single Timeline End -->

                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>Begin Registration Procedure</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>BEGIN REGISTRATION PROCEDURE</h4>
                                <p>Once you've decided what you want, we'll ask you for the documents we need to get started. In most cases, you would first need to provide address and identity proof as well as a scanned copy of a passport-sized photograph.</p>
                            </div>

                        </div>
						<!-- Single Timeline End -->

                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>Get Your Proprietorship Started</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>GET YOUR PROPRIETORSHIP STARTED</h4>
                                <p>After registration is complete you start process for opening bank account.</p>
                            </div>

                        </div>
						<!-- Single Timeline End -->

                    </div>
                </div><!-- Biography Timeline End -->                
                
            </div>
        </div>
    </div><!-- Biography Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 ml-auto mr-auto">
                    
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider" style="background-image: url(assets/images/bg/testimonial-bg.png)">
                        
                        <!-- Testimonial Item -->
                        <div class="testimonial">
                            <p>If you use this site regularly and would. like to help keep the site Internet, please consider donating a small sum to help pay for the hosting and width bill. It is a long established of world.</p>
                            <h5>Rohinga Daj</h5>
                        </div>
                        
                        <!-- Testimonial Item -->
                        <div class="testimonial">
                            <p>If you use this site regularly and would. like to help keep the site Internet, please consider donating a small sum to help pay for the hosting and width bill. It is a long established of world.</p>
                            <h5>Hango Daou</h5>
                        </div>
                        
                        <!-- Testimonial Item -->
                        <div class="testimonial">
                            <p>If you use this site regularly and would. like to help keep the site Internet, please consider donating a small sum to help pay for the hosting and width bill. It is a long established of world.</p>
                            <h5>Potlaji Tau</h5>
                        </div>
                        
                    </div>
					<!-- Testimonial Slider End -->
                    
                </div>                
            </div>
        </div>
    </div><!-- Testimonial Section End -->

    <!-- Contiribution Section Start -->
    <div class="contiribution-section bg-red pt-95 pb-100" style="background-image: url(assets/images/bg/contiribution-bg.png)">
        <div class="container">
            <div class="row">
                
                <!-- Contiribution Content Start -->
                <div class="contiribution-content text-center col">                    
                    <h4>OUR CAMPAIGN IS POWERED BY CONTRIBUTIONS FROM SUPPORTERS LIKE YOU</h4>
                    <h1 class="counter">5,58,8074</h1>
                    <h5>Dolars in Campaign Contiributions So Far</h5>
                    <a href="contact.html" class="btn btn-lg btn-black btn-hover-dark-red">Become a Volunteer</a>
                </div><!-- Contiribution Content End -->
                
            </div>
        </div>
    </div><!-- Contiribution Section End -->

    <!-- Service Section Start -->
    <div class="team-section pt-105 pb-50">
        <div class="container">
            <div class="row">                
                <!-- Section Title Start -->
                <div class="section-title text-center col-12 pb-50 pt-40">
                    <h1>Expert Advisor</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
				<!-- Section Title End --> 
            </div>
			<div class="row team-wrap justify-content-center">
				<!-- Single Team -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-team">
						<div class="team-thumb">
							<a href="#"><img src="assets/images/team/1.png" alt="team image"></a>
						</div>
						<div class="team-content text-center">
							<div class="team-conetnt-info">
								<h5><a href="#">Margan Spee</a></h5>
								<h6>Founder Owner</h6>
							</div>
							<div class="team-social-icons">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--// Single Team -->
				<!-- Single Team -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-team">
						<div class="team-thumb">
							<a href="#"><img src="assets/images/team/2.png" alt="team image"></a>
						</div>
						<div class="team-content text-center">
							<div class="team-conetnt-info">
								<h5><a href="#">Loe Karnerl</a></h5>
								<h6>Chairmen Head</h6>
							</div>
							<div class="team-social-icons">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--// Single Team -->
				<!-- Single Team -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-team">
						<div class="team-thumb">
							<a href="#"><img src="assets/images/team/3.png" alt="team image"></a>
						</div>
						<div class="team-content text-center">
							<div class="team-conetnt-info">
								<h5><a href="#">Qumar Stain</a></h5>
								<h6>Marketer</h6>
							</div>
							<div class="team-social-icons">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--// Single Team -->
			</div>
        </div>
    </div>
	<!-- Service Section End -->

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