<!DOCTYPE html> 
<html> 
	<head> 
	<title>Jungheinrich mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jungheinrich_themes.min.css" />
	<link rel="stylesheet" href="css/jquery.steps.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head> 
<body> 

	<section id="leads-dashboard" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#home" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="enquiry.php" rel="external"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="stats.php" class="mobile-menu-active"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	


			<h1 class="txtCentered" id="introText">Submitted leads</h1>
			<div class="ui-grid-b stats">
			  	<div class="ui-block-a">
					<div class="dash dash-accepted">
						<h1>16</h1>
					</div>
					<div class="ui-block-a dash-desc"><p>accepted</p></div>
			  	</div>
			  	<div class="ui-block-b">
			  		<div class="dash dash-rejected">
			  			<h1>5</h1>
			  		</div>
			  		<div class="ui-block-b dash-desc"><p>rejected</p></div>
			  	</div>
			  	<div class="ui-block-c">
			  		<div class="dash dash-ongoing">
			  			<h1>19</h1>
			  		</div>
			  		<div class="ui-block-c dash-desc"><p>ongoing</p></div>
			  	</div>
			</div>

			<a href="#submitted-leads" class="ui-btn">REVIEW SUBMITTED</a>


			<div class="divider"></div>


			<h1 class="txtCentered" id="introText">Accepted leads</h1>
			<div class="ui-grid-b stats">
			  	<div class="ui-block-a">
					<div class="dash dash-accepted">
						<h1>8</h1>
					</div>
					<div class="ui-block-a dash-desc"><p>won</p></div>
			  	</div>
			  	<div class="ui-block-b">
			  		<div class="dash dash-rejected">
			  			<h1>2</h1>
			  		</div>
			  		<div class="ui-block-b dash-desc"><p>lost/no sale</p></div>
			  	</div>
			  	<div class="ui-block-c">
			  		<div class="dash dash-ongoing">
			  			<h1>6</h1>
			  		</div>
			  		<div class="ui-block-c dash-desc"><p>ongoing</p></div>
			  	</div>
			</div>

			<a href="#" class="ui-btn">REVIEW ACCEPTED</a>






		</div><!-- /content -->

	</section><!-- /page -->

	<section id="submitted-leads" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#home" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="enquiry.php" rel="external"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="stats.php#leads-dashboard" class="mobile-menu-active"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
			<h1 class="txtCentered" id="introText">Submitted leads</h1>

			<div class="ui-grid-a">
				<div class="ui-block-a">
					<a href="#" class="ui-btn leadTab allTab" data-tab="all">ALL</a>
			  	</div>
				<div class="ui-block-b">
			  		<a href="#" class="ui-btn leadTab" data-tab="lead-accepted">ACCEPTED</a>
			  	</div>
				<div class="ui-block-a">
					<a href="#" class="ui-btn leadTab" data-tab="lead-rejected">REJECTED</a>
			  	</div>
				<div class="ui-block-b">
			  		<a href="#" class="ui-btn leadTab" data-tab="lead-ongoing">ONGOING</a>
			  	</div>
			</div>

			

			<!-- *** LEADS LIST *** -->

			<div data-role="collapsible-set" data-content-theme="a" data-iconpos="right" id="set">

				<!-- ACCEPTED LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-accepted" data-collapsed="true" data-theme="c">
			        <h3>Waynes Warehouse</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Status:</strong> <span class="leadsDesc">Accepted</span></p>
			        <p><strong>Business:</strong> <span class="leadsDesc">Won</span></p>
			        <p><strong>Value:</strong> <span class="leadsDesc">&pound;200.00</span></p>
			        <p><strong>Rewards:</strong> <span class="leadsDesc">Lead &pound;5 Business &pound;50</span></p>
			    </div>

				<!-- REJECTED LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-rejected" data-collapsed="true" data-theme="c">
			        <h3>Bobs Warehouse</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Status:</strong> <span class="leadsDesc">Accepted</span></p>
			        <p><strong>Business:</strong> <span class="leadsDesc">Won</span></p>
			        <p><strong>Value:</strong> <span class="leadsDesc">&pound;200.00</span></p>
			        <p><strong>Rewards:</strong> <span class="leadsDesc">Lead &pound;5 Business &pound;50</span></p>					
			    </div>

				<!-- ONGOING LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-ongoing" data-collapsed="true" data-theme="c">
			        <h3>Johns Store</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Status:</strong> <span class="leadsDesc">Accepted</span></p>
			        <p><strong>Business:</strong> <span class="leadsDesc">Won</span></p>
			        <p><strong>Value:</strong> <span class="leadsDesc">&pound;200.00</span></p>
			        <p><strong>Rewards:</strong> <span class="leadsDesc">Lead &pound;5 Business &pound;50</span></p>	
			    </div>

				<!-- ONGOING LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-ongoing" data-collapsed="true" data-theme="c">
			        <h3>Martins Shop</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Status:</strong> <span class="leadsDesc">Accepted</span></p>
			        <p><strong>Business:</strong> <span class="leadsDesc">Won</span></p>
			        <p><strong>Value:</strong> <span class="leadsDesc">&pound;200.00</span></p>
			        <p><strong>Rewards:</strong> <span class="leadsDesc">Lead &pound;5 Business &pound;50</span></p>	
			    </div>

				<!-- REJECTED LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-rejected" data-collapsed="true" data-theme="c">
			        <h3>Marks Warehouse</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Status:</strong> <span class="leadsDesc">Accepted</span></p>
			        <p><strong>Business:</strong> <span class="leadsDesc">Won</span></p>
			        <p><strong>Value:</strong> <span class="leadsDesc">&pound;200.00</span></p>
			        <p><strong>Rewards:</strong> <span class="leadsDesc">Lead &pound;5 Business &pound;50</span></p>					
			    </div>

				<!-- ACCEPTED LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-accepted" data-collapsed="true" data-theme="c">
			        <h3>Stevens Warehouse</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Status:</strong> <span class="leadsDesc">Accepted</span></p>
			        <p><strong>Business:</strong> <span class="leadsDesc">Won</span></p>
			        <p><strong>Value:</strong> <span class="leadsDesc">&pound;200.00</span></p>
			        <p><strong>Rewards:</strong> <span class="leadsDesc">Lead &pound;5 Business &pound;50</span></p>
			    </div>


			</div>



		</div><!-- /content -->

	</section><!-- /page -->


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/jquery.steps.min.js"></script>
	<script src="js/form-validation.js"></script>
	<script src="js/jungheinrichscripts.js"></script>

</body>
</html>