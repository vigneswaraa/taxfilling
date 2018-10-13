﻿<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>taxfilling</title>
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
	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	
	<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
	
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
                    <h1 class="page-title">One Person Company</h1>
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
    </div>

	
	<div class="candidate-section pt-100 pb-65">
        <div class="container">
            <div class="row">
                
                <!-- Candidate Content Start -->
                <div class="candidate-content col-lg-12 col-12 mb-30">               
                    <h1>One Person Company</h1>
                    <h3>"One Person Company Is The Preferred Choice Of Business For Startups Who Have Only 1 Founder"</h3>
                    <p>One Person company, as the name suggests, it is owned and managed by a single person. As per the Companies Act, 2013 "One Person Company means a company which has only one member". The concept of One Person Company (OPC) in India was introduced to support entrepreneurs who on their own are capable of starting a venture by allowing them to create a single person economic entity.</p>
					<p>Forming an One Person Company will provide businessmen much flexibility in management, attains benefits and status like Private Limited Company, which means they will have limited liability, legal protection for business, access to credits, bank loans, access to markets etc., all in the name of separate legal entity.</p>
                    <p>Normally, naturally born Indian, who is a resident of India, can only obtain the advantages of a One Person company. We require two persons to register One person company, one is Member cum Director and the other person would be a Nominee.</p>                    
                </div>
				<!-- Candidate Content End -->
                
                <!-- Candidate Content Start -->
                
                
            </div>
        </div>
    </div><!-- About Candidate Section E -->

    <!-- Biography Section Start -->
    <div class="biography-section bg-theme pt-95 pb-100">
        <div class="container">
            <div class="row">
                
                <!-- Section Title Start -->
                <div class="section-title title-white text-center col-12 mb-70">
                    <h1>ONE PERSON COMPANY FILING PROCESS</h1>
                 
                </div><!-- Section Title End -->
                
                <!-- Biography Timeline Start -->
                <div class="col-lg-10 col-12 ml-auto mr-auto">
                    <div class="timeline-wrap">
                        <span class="timeline-proces"></span>
                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>OPC Incorporation</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>OPC INCORPORATION</h4>
                                <p>taxfilings.com can help you incorporate a OPC in 12 to 16 days, subject to ROC processing time.</p>
                            </div>

                        </div><!-- Single Timeline End -->

                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>Obtaining DSC & DIN</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>OBTAINING DSC & DIN</h4>
                                <p>Digital Signature Certificate(DSC) and Director Identification Number(DIN) are required for the proposed Director of the OPC. DIN and DSC can be obtained for the proposed Director within 3 to 5 days.</p>
                            </div>

                        </div>
						<!-- Single Timeline End -->

                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>Name Approval</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>NAME APPROVAL</h4>
                                <p>A minimum of one and a maximum of six proposed names must be submitted to the MCA. Subject to availability, naming guidelines and MCA processing time, Name Approval can be obtained in 4 to 6 working days.</p>
                            </div>

                        </div>
						<!-- Single Timeline End -->

                        <!-- Single Timeline Start -->
                        <div class="timeline row">

                            <!-- Date -->
                            <div class="date col-md-6">
                                <span class="dot"></span>
                                <h4>OPC Incorporation</h4>
                            </div>

                            <!-- Content -->
                            <div class="content col-md-6">
                                <h4>OPC INCORPORATION</h4>
                                <p>Incorporation documents can be submitted to the MCA along with an application for incorporation. MCA will usually approve the application for incorporation in 5 to 7 days, subject to their processing time.</p>
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
    <div class="biography-section bg-theme pt-95 pb-100">
        <div class="container">
            <div class="row">
	<div class="cd-faq-items">
		

		<ul id="mobile" class="cd-faq-group">
			
			<li>
				<a class="cd-faq-trigger" href="#0">How does syncing work?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do I upload files from my phone or tablet?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore, placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum, autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni aperiam amet architecto adipisci aspernatur! Officia, quaerat magni architecto nostrum magnam fuga nihil, ipsum laboriosam similique voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam blanditiis veritatis provident possimus iusto voluptas, eveniet architecto quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae, molestias!</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do I link to a file or folder?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
				</div> <!-- cd-faq-content -->
			</li>
			
			<li>
				<a class="cd-faq-trigger" href="#0">How do I link to a file or folder?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
				</div> <!-- cd-faq-content -->
			</li>
			
			<li>
				<a class="cd-faq-trigger" href="#0">How do I link to a file or folder?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
				</div> <!-- cd-faq-content -->
			</li>
			
			<li>
				<a class="cd-faq-trigger" href="#0">How do I link to a file or folder?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
				</div> <!-- cd-faq-content -->
			</li>
			
		</ul> <!-- cd-faq-group -->

		
	</div> <!-- cd-faq-items -->
</div>
</div>
</div>

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