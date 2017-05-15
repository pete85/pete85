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
  
	<body>

		<!--=== PAGE PRELOADER ===-->
		<div id="page-loader"><span class="page-loader-gif"></span></div>
	
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="portfolio-nav" class="navbar navbar-fixed-top scrolled">
            
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
					<!--======= NAME ========-->
					<a class="navbar-brand tlt" data-in-effect="flipInY" href="index.php#home">pete85</a>
				
				</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="sr-only">
							<a href="index.php#home">Home</a>
						</li>
						<li>
							<a href="index.php#about"><i class="fa fa-user"></i> About Me</a>
						</li>
						<li>
							<a href="index.php#skills"><i class="fa fa-pie-chart"></i> Skills</a>
						</li>
						<li class="active">
							<a href="#portfolio"><i class="fa fa-th"></i> Works</a>
						</li>
						<li>
							<a href="index.php#contact"><i class="fa fa-comments-o"></i> Contact Me</a>
						</li>
					</ul>
				</div>
				
			</div>
			
		</div><!--End main-nav -->


		<!-- ==============================================
		PORTFOLIO
		=============================================== -->
		<section id="portfolio" class="bg1">
		
			<div class="container">

                <h1 class="section-title blue wow fadeInDown text-center" data-wow-offset="100">
                    <i class="fa fa-th"></i>
                    My works
                </h1>

                <h4 class="text-center">Please find selected projects below.</h4>

                <br/>
                <br/>
				
				<!--==== Portfolio Filters ====-->
				<div id="filter-works">
					<ul>
						<li class="active wow fadeInRight" data-wow-delay="0s">
							<a href="#" data-filter="*">All</a>
						</li>
						<li class="wow fadeInRight" data-wow-delay=".3s">
							<a href="#" data-filter=".websites">Websites</a>
						</li>
						<li class="wow fadeInRight" data-wow-delay=".9s">
							<a href="#" data-filter=".apps">Web apps</a>
						</li>						
						<li class="wow fadeInRight" data-wow-delay=".6s">
							<a href="#" data-filter=".banners">Web banners</a>
						</li>
					</ul>
				</div><!--End portfolio filters -->
				
			</div>
		
			<div class="container masonry-wrapper">
				<div id="projects-container">

					<?php include('include/portfolio.php') ?>
                    
				</div><!-- End projects --> 
			</div><!-- End container --> 
			
		
		</section><!-- End portfolio section --> 


	
		<!-- ==============================================
		FOOTER
		=============================================== -->	
		
		<footer id="main-footer">
            <!-- FOOTER MAP -->
            <div id="gmapMobil" class="hidden-lg hidden-md"></div>
            
            <!-- FOOTER Social -->
			<div class="container">

				<?php include('include/addthis.php') ?>

                <p>&copy; 2017 - All rights reserved | <a href="mailto:info.pete85@gmail.com" target="_blank">Piotr Furmanek</a></p>
<!--                 <a href="/admin/">admin</a> -->
                   
			 </div>
            
		</footer><!--=== End Footer ===-->
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->
		
		<?php include('include/scripts.php') ?>

	</body>
	
</html>