<!DOCTYPE html>

<html lang="en-US" class="no-js">
	<head>

		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
		<title>pete85 - portfolio</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Welcome to my portfolio. I'm a Front-End Developer who specialises in building responsive, mobile friendly websites and web apps.">
		<meta name="keywords" content="HTML5,CSS3,JavaScript,jQuery,jQuery Mobile,Bootstrap,php,MySQL,Gulp,Sass,Photoshop,portfolio,web,web developer,front-end">
		<meta name="author" content="pete85">

		<?php include('include/head.php') ?>
		<?php include('include/connect.php') ?>
		<?php include_once("analyticstracking.php") ?>

	</head>
  
	<body data-spy="scroll" data-target="#main-nav" data-offset="200">

	    <video autoplay loop muted poster="images/header-bg.jpg" id="background">
	        <source src="video_bg.mp4" type="video/mp4">
	    </video>
	
		<!--=== PAGE PRELOADER ===-->
		<div id="page-loader"><span class="page-loader-gif"></span></div>
		
	
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="main-nav" class="navbar navbar-fixed-top">
            
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
					<!--======= NAME ========-->
					<a class="navbar-brand tlt" data-in-effect="flipInY" href="index.php">pete85</a>
				
				</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="sr-only">
							<a href="#home">Home</a>
						</li>
						<li>
							<a href="#about"><i class="fa fa-user"></i> About Me</a>
						</li>
						<li>
							<a href="#skills"><i class="fa fa-pie-chart"></i> Skills</a>
						</li>
						<li>
							<a href="mywork.php"><i class="fa fa-th"></i> Works</a>
						</li>
						<li>
							<a href="#contact"><i class="fa fa-comments-o"></i> Contact Me</a>
						</li>
					</ul>
				</div>
				
			</div>
			
		</div><!--End main-nav -->


		<!-- ==============================================
		HEADER
		=============================================== -->
		<header id="home">
			<div class="container text-center">

                <div class="hello testElement">
                    <h1 class="intro-1 tlt" data-in-effect="flipInY">pete85</h1>
                    <h2 class="intro-2 tlt" data-in-effect="flipInY">Welcome to my</h2>
                    <h3 class="intro-3 tlt" data-in-effect="flipInY">PORTFOLIO</h3>
                    <br/>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
                
			</div>
		</header><!--End home header -->

        <!-- ==============================================
        ABOUT
        =============================================== -->
		<section id="about" class="bg1">
		
			<div class="container">
				
				<div class="row">

                    <div class="col-xs-12">
                        <h1 class="intro-1 wow fadeInDown text-center"><i class="fa fa-user"></i> About Me</h1>
<!--                         <h3 class="testimonial">
                            <i class="fa fa-quote-left" aria-hidden="true"></i> I'm a Web Developer. I solve problems you don't know you have in ways you can't understand. <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </h3>
                        <br/> -->
                    </div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="aboutme wow fadeInLeft">
							<div class="icon-custom">
								<img src="images/icons/icon-responsive.png" alt="Responsive icon"/>
							</div>
							<h4>I specialise in implementing fully responsive and mobile friendly websites and web apps.</h4>
						</div>
					</div>


					<div class="col-md-4">
						<div class="aboutme wow fadeInUp">
							<div class="icon-custom">
								<img src="images/icons/icon-coding.png" alt="Coding icon"/>
							</div>
							<h4>I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too.</h4>
						</div>
					</div>

					<div class="col-md-4">
						<div class="aboutme wow fadeInRight">
							<div class="icon-custom">
								<img src="images/icons/icon-bulb.png" alt="Bulb icon"/>
							</div>
							<h4>I have a diverse set of skills, ranging from design, to HTML + CSS + Javascript, all the way to PHP and MySQL</h4>
						</div>
					</div>



				</div>
		
			</div>
		
		</section><!--End about section -->


		<!-- ==============================================
		SKILLS
		=============================================== -->
		<section id="skills" class="bg2">
			<div class="container">
				
				<?php include('include/skills.php') ?>
			
			</div>
		
		</section><!--End skills section -->
			

        <!-- ===================================================================
        								CONTACT
        ==================================================================== -->

		<section id="contact" class="bg1">
		
			<div class="container">
				
				<div class="row">

                    <div class="col-xs-12">
                        <h1 class="section-title blue wow fadeInDown text-center" data-wow-offset="100">
                            <i class="fa fa-comments-o"></i> Contact Me</h1>
                    </div>
				
                    <div class="clear"></div>

					<div id="contact-wrapper">
						<form role="form" data-toggle="validator" method="post" action="contact.php">
							<div class="field name-box form-group">
							    <input type="text" id="name" name="name" required/>
								<label for="name">Name</label>
							</div>

							<div class="field email-box form-group">
							    <input type="email" id="email" name="email" required/>
							    <label for="email">Email</label>
							</div>

							<div class="field msg-box form-group">
							    <textarea id="message" name="message" rows="4" required/></textarea>
							    <label for="message">Msg</label>
							</div>

							<input class="button" type="submit" value="Send" />

						</form>
					</div>
				</div>
			</div>
		</section><!--=== End Contact section ===-->


		
		<!-- ==============================================
		FOOTER
		=============================================== -->	
		
		<footer id="main-footer">
            <!-- FOOTER MAP -->
            <div id="gmapMobil" class="hidden-lg hidden-md"></div>
            
            <!-- FOOTER Social -->
			<div class="container">

				<?php include('include/addthis.php') ?>

                <p>&copy; 2017 - All rights reserved | <a href="mailto:info.pete85@gmail.com" target="_blank">pete85</a></p>
<!--                 <a href="/admin/">admin</a> -->
                   
			 </div>
            
		</footer><!--=== End Footer ===-->
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->
		
		<?php include('include/scripts.php') ?>

	</body>
	
</html>