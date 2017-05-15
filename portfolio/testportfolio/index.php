<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<?php include('include/head.php') ?>
		<?php include('include/connect.php') ?>
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
					<a class="navbar-brand tlt" data-in-effect="flipInY" href="#home">pete85</a>
				
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
							<a href="#portfolio"><i class="fa fa-th"></i> Works</a>
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
                    <p class="intro-2 tlt" data-in-effect="flipInY">Welcome to my</p>
                    <p class="intro-3 tlt" data-in-effect="flipInY">PORTFOLIO</p>
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
                        <h1 class="big-text blue wow fadeInDown text-center">
                            <i class="fa fa-user"></i>
                            About Me
                        </h1>
                        <h3 class="testimonial">
                            <i class="fa fa-quote-left" aria-hidden="true"></i> I'm a Web Developer. I solve problems you don't know you have in ways you can't understand. <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </h3>
                        <br/>
<!--                         <br/>
                        <p class="about-text wow fadeInDown">
                            I am an ambitious and self-motivated Front-End Developer with a strong technical background. I specialise in developing responsive websites.
                        </p> -->
                    </div>

                    <!-- ==== PHOTO ==== -->
					<div class="col-sm-6">
                        <div id="trigger1"></div>
					    <div id="pin1" class="imageCont">
						    <img class="wow rollIn image" data-wow-offset="200" src="images/about.jpg" alt="" />
                        </div>
					</div>
                    
                    <!-- ==== TIMELINE ==== -->
					<div class="col-sm-6 timeline">
                        <i id="timeline-top" class="fa fa-clock-o"></i>

                        <div class="wow fadeInRight" data-wow-offset="200">
                            <i class="fa fa-smile-o wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                            <h3>28/04/1985</h3>
                            <p>
                                <span>Born</span>
                                I was born in Gniezno, the first capital of Poland.</p>
                            <img class="europeMap" src="images/map-europe.png"/>
                        </div>

                        <div class="wow fadeInRight" data-wow-offset="200">
                            <i class="fa fa-plane wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                            <h3>2005</h3>
                            <p>
                                <span>London</span>
                                In May 2005 I arrived to London. I was planning to stay here for summer school break... I'm still here, which means that I'm having a very long summer school break.</p>
                        </div>

                        <div class="wow fadeInRight" data-wow-offset="200">
                            <i class="fa fa-university wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                            <h3>2005 - 2014</h3>
                            <p>
                                <span>Work</span>
                                My first job, after arriving to UK, was marquee erector. I worked for a company based in Yorkshire.
                            </p>
                            <p>
                                After one year I have moved to London, where I started working in restaurants and gastro pubs. For six years I worked as a kitchen porter, chef de partie and finally sous chef.
                            </p>
                            <p>
                                When I have begun the university course, I had to move to a different industry as it was a part-time weekend course and I was not able to compromise it with hospitality job. Therefore, I have completed a 5 days course to become a telescopic handler operator and moved to construction industry. I have worked there until February 2015, when I found my first Web Developer job.
                            </p>
                        </div>

                        <div class="wow fadeInRight" data-wow-offset="200">
                            <i class="fa fa-university wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                            <h3>2011 - 2014</h3>
                            <p>
                                <span>University</span>
                                In 2011 I've started a Computing and Information Systems course at the University of West London. Three years later I graduated with 2:1 first division degree and started my career in Web Development.</p>
                        </div>

                        <div class="wow fadeInRight" data-wow-offset="200">
                            <i class="fa fa-briefcase wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                            <h3>2014 - Present</h3>
                            <p>
                                <span>Front End Development</span>
                                Soon after graduation, I have started my first Web Developer role in digital marketing agency in Central London. I was working on a wide range of projects in affiliation department, including tasks such as designing and developing responsive landing pages using Bootstrap framework, implementing HTML5 dynamic banners and building email newsletters. I was taking responsibility for front and back end.
                            </p>
                            <p>
                                In May 2015 I have moved to Europe's leading exhibitions organiser where was responsible for maintaining a portfolio of over 50 event websites.
                            </p>
                            <p>
                            	November 2016 brought another step forward in my career path. I have taken the position of Front-End Developer at a rapidly growing digital marketing agency. Here every day I learn something new and I develop my front-end development skills.
                            </p>
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
				
				<div class="row">

                    <div class="col-xs-12">
                        <h1 class="big-text wow fadeInDown text-center" data-wow-offset="100">
                            <i class="fa fa-pie-chart"></i>
                             My skills
                        </h1>
                    </div>
                </div>



				
			</div>
		
		</section><!--End skills section -->
			
		<!-- ==============================================
		PORTFOLIO
		=============================================== -->
		<section id="portfolio" class="">
		
			<div class="container">

                <h1 class="big-text blue wow fadeInDown text-center" data-wow-offset="100">
                    <i class="fa fa-th"></i>
                    My works
                </h1>





				
				<!--==== Portfolio Filters ====-->
				<div id="filter-works">
					<ul>
						<li class="active wow fadeInRight" data-wow-delay="0s">
							<a href="#" data-filter="*">All</a>
						</li>
						<li class="wow fadeInRight" data-wow-delay=".3s">
							<a href="#" data-filter=".websites">Websites</a>
						</li>
						<li class="wow fadeInRight" data-wow-delay=".6s">
							<a href="#" data-filter=".banners">Web banners</a>
						</li>
						<li class="wow fadeInRight" data-wow-delay=".9s">
							<a href="#" data-filter=".other">Other</a>
						</li>
					</ul>
				</div><!--End portfolio filters -->
				
			</div>
		
			<div class="container masonry-wrapper">
				<div id="projects-container">



 					<?php
						$sql = 'SELECT * FROM mywork';
					   	$retval = mysql_query( $sql, $conn);


					   	while($record = mysql_fetch_array($retval)) {

							// Thumbnail image
							echo 
							"<article class='project-item " . $record['type'] . "' data-toggle='modal' data-target='." . $record['modalClass'] . "'>
								<img class='img-responsive project-image' src='data:image/jpeg;base64," .base64_encode($record['thumb']) . "'  alt=''>
			                    <h2 class='project-title'>" . $record['name'] . "</h2>
							</article>";

							// Modal
							echo 
							"<div class='modal fade " . $record['modalClass'] ."'>
			                  	<div class='modal-dialog modal-lg'>
			                    	<div class='modal-content'>
			                      		<div class='modal-header'>
			                        		<button type='button' class='close' data-dismiss='modal'>
			                        			<span aria-hidden='true'><i class='fa fa-times'></i></span><span class='sr-only'>Close</span>
			                        		</button>
			                        		<h4 class='modal-title'>" . $record['name'] . "</h4><!--Modal Title, Subtitle -->
			                        		<img src='data:image/jpeg;base64," .base64_encode($record['image']) ."' alt=' />
			                      		</div>
			                      		<div class='modal-body'>

			                      			<div class='row'>
			                      				<div class='col-sm-10 col-sm-offset-1 description'>
			                      					<p>" . $record['description'] . "</p>
			                      				</div>	
			                      			</div>

			                      			<div class='row'>
			                          			
			                          			<div class='col-xs-12'>
			                          				<a class='btnAnchor hvr-fadeIn' href='" . $record['link'] . "' target='_blank'>Visit website</a>
			                          			</div>

			                      			</div>
			                        		
			                    		</div>
			                   		</div>
			                  	</div>
			                </div>";
						}
					?>





				</div><!-- End projects --> 
			</div><!-- End container --> 
			
		
		</section><!-- End portfolio section --> 

        <!-- ==============================================
        CONTACT
        =============================================== -->
		<section id="contact" class="">
		
			<div class="container">
				
				<div class="row">

                    <div class="col-xs-12">
                        <h1 class="big-text blue wow fadeInDown text-center" data-wow-offset="100">
                            <i class="fa fa-comments-o"></i>
                            Contact Me
                        </h1>
                    </div>
				
                    <div class="clear"></div>
                    
					<div class="col-md-6 text-right hidden-sm hidden-xs">
                        
                        <!-- MAP -->
                        <div id="gmap" class="wow fadeInLeft" data-wow-offset="100"></div>
					
					</div>
				
					<!--=== Contact info ===-->
                    <div class="col-md-6 contact-info">
						<form class="form-horizontal wow fadeInRight" data-wow-offset="100" role="form" method="post" action="#">
							<div class="form-group">
								<div class="col-sm-12">
									<label for="f_name">First Name</label>
									<input type="text" class="form-control" id="f_name" name="first_name" placeholder="First Name" value="">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<label for="l_name">Last Name</label>
									<input type="text" class="form-control" id="l_name" name="last_name" placeholder="Last Name" value="">
								</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-12">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<label for="phone">Telephone</label>
									<input type="phone" class="form-control" id="phone" name="phone" placeholder="Telephone" value="">
								</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-12">
									<label for="message">Your message</label>
									<textarea class="form-control" rows="5" name="message" id="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<center><button type="button" class="btn btnSubmit hvr-bounce-to-right">Send message</button></center>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<!--  Will be used to display an alert to the user -->
								</div>
							</div>
						</form>

                    </div>
                    <!--=== End Contact ===-->
					
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
			    <ul class="social">
                    <!-- <li class="wow fadeInRight" data-wow-delay="0s"><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                    
                    <li class="wow fadeInRight" data-wow-delay=".3s">
                    	<a href="#"><i class="fa fa-facebook"></i></a>
                    </li>

                    <!-- <li class="wow fadeInRight" data-wow-delay=".6s"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                    
                    <li class="wow fadeInRight" data-wow-delay=".6s">
                    	<a href="https://uk.linkedin.com/in/piotr-furmanek-bb3a5469"><i class="fa fa-linkedin"></i></a>
                    </li>

                    <li class="wow fadeInRight" data-wow-delay=".9s">
                    	<a href="https://github.com/pete85"><i class="fa fa-github"></i></a>
                    </li>
                </ul>
                <p>&copy; 2017 - All rights reserved | <a href="mailto:info.pete85@gmail.com" target="_blank">Piotr Furmanek</a></p>
                <a href="/admin/">admin</a>
                   
			 </div>
            
		</footer><!--=== End Footer ===-->
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->
		
		<?php include('include/scripts.php') ?>

	</body>
	
</html>