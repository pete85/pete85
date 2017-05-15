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


<!-- **********************************************************************************************************************
													ENQUIRY PAGE
********************************************************************************************************************** -->
	
	<section id="enquiry" data-role="page">
		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry" class="mobile-menu-active"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
			<h1 class="txtCentered" id="introText">Enquiry</h1>

			<!-- Enquiry form -->
			<form id="enquiry_form" name="enquiry_form" method="get" action="#thankyou">
			    <h3>Step 1</h3>
			    <fieldset data-role="fieldcontain" class="ui-hide-label">

					<label for="companyName">Company name</label>
					<input type="text" name="companyName" id="companyName" value="" placeholder="Company name">

					<label for="postcode">Postcode</label>
					<input type="text" name="postcode" id="postcode" value="" placeholder="Postcode">

					<label for="contactName">Contact name</label>
					<input type="text" name="contactName" id="contactName" value="" placeholder="Contact name">

					<label for="enquiryType">Enquiry type</label>
					<select name="enquiryType" id="enquiryType" data-theme="c">
						<option value="" disabled="disabled" selected>Enquiry type</option>
						<option value="">Tyres</option>
						<option value="">Racking</option>
						<option value="">New truck</option>
					</select>

					<label for="product">Product</label>
					<select name="product" id="product" data-theme="c">
						<option value="" disabled="disabled" selected>Product</option>
						<option value="">New tyre</option>
						<option value="">Tyre racking</option>
						<option value="">Jungheinrich forklift</option>
					</select>
				</fieldset>

			    <h3>Step 2</h3>
			    <fieldset data-role="fieldcontain" class="ui-hide-label">

					<label for="enquiryInfo1">Enquiry info 1</label>
					<select name="enquiryInfo1" id="enquiryInfo1" data-theme="c">
						<option value="" disabled="disabled" selected>Enquiry info 1</option>
						<option value="">info a</option>
						<option value="">info b</option>
						<option value="">info c</option>
					</select>

					<label for="enquiryInfo2">Enquiry info 2</label>
					<select name="enquiryInfo2" id="enquiryInfo2" data-theme="c">
						<option value="" disabled="disabled" selected>Enquiry info 2</option>
						<option value="">info a</option>
						<option value="">info b</option>
						<option value="">info c</option>
					</select>

					<label for="enquiryInfo3">Enquiry info 3</label>
					<select name="enquiryInfo3" id="enquiryInfo3" data-theme="c">
						<option value="" disabled="disabled" selected>Enquiry info 3</option>
						<option value="">info a</option>
						<option value="">info b</option>
						<option value="">info c</option>
					</select>

					<label for="additional_info">Additional info</label>
					<textarea id="additional_info" placeholder="Additional info" rows="3"></textarea>
				</fieldset>
			</form>
		</div><!-- /content -->
	</section><!-- /page -->


<!-- **********************************************************************************************************************
												ENQUIRY THANK YOU PAGE
********************************************************************************************************************** -->

	<section id="thankyou" data-role="page">
		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry" class="mobile-menu-active"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->

		<div data-role="content">	
				<h1 class="introText">Thank you</h1>

				<br/>
	
				<h3 class="txtCentered" id="txtThankyou">Your lead has been<br/>successfully submitted</h3>

				<div class="divider"></div>

				<a href="#leads-dashboard" class="ui-btn">HOME</a>
		</div><!-- /content -->
	</section><!-- /page -->



<!-- **********************************************************************************************************************
											ENGINEER STATS PAGE - DASHBOARD
********************************************************************************************************************** -->

	<section id="leads-dashboard" data-role="page">
		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard" class="mobile-menu-active"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->

		<div data-role="content">	
			<h1 class="txtCentered" id="introText">Submitted leads</h1>
			<div class="ui-grid-b stats">
			  	<div class="ui-block-a">
					<div class="dash dash-accepted">
						<h1 class="txtLarge">16</h1>
					</div>
					<div class="ui-block-a dash-desc"><p>accepted</p></div>
			  	</div>
			  	<div class="ui-block-b">
			  		<div class="dash dash-rejected">
			  			<h1 class="txtLarge">5</h1>
			  		</div>
			  		<div class="ui-block-b dash-desc"><p>rejected</p></div>
			  	</div>
			  	<div class="ui-block-c">
			  		<div class="dash dash-ongoing">
			  			<h1 class="txtLarge">19</h1>
			  		</div>
			  		<div class="ui-block-c dash-desc"><p>ongoing</p></div>
			  	</div>
			</div>

			<div class="divider"></div>

			<h1 class="txtCentered" id="introText">Accepted leads</h1>
			<div class="ui-grid-b stats">
			  	<div class="ui-block-a">
					<div class="dash dash-accepted">
						<h1 class="txtLarge">8</h1>
					</div>
					<div class="ui-block-a dash-desc"><p>won</p></div>
			  	</div>
			  	<div class="ui-block-b">
			  		<div class="dash dash-rejected">
			  			<h1 class="txtLarge">2</h1>
			  		</div>
			  		<div class="ui-block-b dash-desc"><p>lost/no sale</p></div>
			  	</div>
			  	<div class="ui-block-c">
			  		<div class="dash dash-ongoing">
			  			<h1 class="txtLarge">6</h1>
			  		</div>
			  		<div class="ui-block-c dash-desc"><p>ongoing</p></div>
			  	</div>
			</div>
			<a href="#submitted-leads" class="ui-btn">REVIEW ALL LEADS</a>
		</div><!-- /content -->
	</section><!-- /page -->


<!-- **********************************************************************************************************************
											ENGINEER STATS PAGE - LEADS REVIEW
********************************************************************************************************************** -->

	<section id="submitted-leads" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard" class="mobile-menu-active"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
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
			        <p><strong>Status:</strong> <span class="leadsDesc">Rejected</span></p>				
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
			        <p><strong>Status:</strong> <span class="leadsDesc">Ongoing</span></p>	
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
			        <p><strong>Status:</strong> <span class="leadsDesc">Ongoing</span></p>
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
			        <p><strong>Status:</strong> <span class="leadsDesc">Rejected</span></p>					
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


<!-- **********************************************************************************************************************
											SALES STATS PAGE - DASHBOARD
********************************************************************************************************************** -->

	<section id="sales-dashboard" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard" class="mobile-menu-active"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
			<h1 class="txtCentered" id="introText">Sales</h1>
			<h3 class="txtCentered">from connections</h3>
			<div class="divider"></div>
			<div id="salesTotal">
				<h1 class="txtCentered txtLarge">&pound;22,000</h1>
			</div>
			<div class="divider"></div>
			<h2 class="txtCentered">Your leads:</h2>
			<div class="ui-grid-b sales-stats">
			  	<div class="ui-block-a">
			  		<div class="dash dash-ongoing">
			  			<h1 class="txtLarge">19</h1>
			  		</div>
			  		<div class="ui-block-a dash-desc"><p>new</p></div>
			  	</div>			  	
			  	<div class="ui-block-b">
					<div class="dash dash-accepted">
						<h1 class="txtLarge">16</h1>
					</div>
					<div class="ui-block-b dash-desc"><p>accepted</p></div>
			  	</div>
			  	<div class="ui-block-c">
			  		<div class="dash dash-rejected">
			  			<h1 class="txtLarge">5</h1>
			  		</div>
			  		<div class="ui-block-c dash-desc"><p>rejected</p></div>
			  	</div>
			</div>

			<a href="#sales-review-leads" class="ui-btn">REVIEW ALL LEADS</a>
		</div><!-- /content -->

	</section><!-- /page -->


<!-- **********************************************************************************************************************
											SALES STATS PAGE - LEADS REVIEW
********************************************************************************************************************** -->

	<section id="sales-review-leads" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard" class="mobile-menu-active"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
			<h1 class="txtCentered" id="introText">Leads</h1>

			<div class="ui-grid-a">
				<div class="ui-block-a">
					<a href="#" class="ui-btn leadTab allTab" data-tab="all">ALL</a>
			  	</div>
				<div class="ui-block-b">
			  		<a href="#" class="ui-btn leadTab" data-tab="lead-new">NEW</a>
			  	</div>
				<div class="ui-block-a">
			  		<a href="#" class="ui-btn leadTab" data-tab="lead-accepted">ACCEPTED</a>
			  	</div>
				<div class="ui-block-b">
					<a href="#" class="ui-btn leadTab" data-tab="lead-rejected">REJECTED</a>
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
			        <p><strong>Status:</strong> <span class="leadsDesc">Rejected</span></p>					
			    </div>

				<!-- NEW LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-new" data-collapsed="true" data-theme="c">
			        <h3>Johns Store</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
					<div class="new-status ui-grid-a">
						<h3 class="txtCentered">Status</h3>
						<br/>
						<div class="ui-block-a">
							<button id="btnAccepted" class="ui-btn btnAccept">ACCEPT</button>
						</div>						
						<div class="ui-block-b">
							<button id="btnRejected" class="ui-btn btnReject">REJECT</button>
						</div>
					</div>
			    </div>

				<!-- NEW LEAD EXAMPLE -->
			    <div data-role="collapsible" class="leadInfo lead-new" data-collapsed="true" data-theme="c">
			        <h3>Martins Shop</h3>
			        <p><strong>Contact:</strong> <span class="leadsDesc">Keith Brown</span></p>
			        <p><strong>Enquiry:</strong> <span class="leadsDesc">Tyres</span></p>
			        <p><strong>Product:</strong> <span class="leadsDesc">New tyre</span></p>
			        <p><strong>Info 1:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Info 2:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum</span></p>
			        <p><strong>Info 3:</strong> <span class="leadsDesc">lorem ipsum</span></p>
			        <p><strong>Additional info:</strong> <span class="leadsDesc">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span></p>
					<div class="new-status ui-grid-a">
						<h3 class="txtCentered">Status</h3>
						<br/>
						<div class="ui-block-a">
							<button id="btnAccepted" class="ui-btn btnAccept">ACCEPT</button>
						</div>						
						<div class="ui-block-b">
							<button id="btnRejected" class="ui-btn btnReject">REJECT</button>
						</div>
					</div>
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
			        <p><strong>Status:</strong> <span class="leadsDesc">Rejected</span></p>					
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


<!-- **********************************************************************************************************************
											REWARD STORE INTRO PAGE
********************************************************************************************************************** -->

	<section id="reward-store" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#leads-dashboard" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="#enquiry"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#leads-dashboard"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#sales-dashboard"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#reward-store" class="mobile-menu-active"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
			<h1 class="txtCentered" id="introText">Reward Store</h1>
			<div class="divider"></div>
			<div id="pointsTotal">
				<h1 class="txtCentered txtLarge">800</h1>
				<p class="txtCentered">points</p>
			</div>
			<div class="divider"></div>
			
			<a href="#" class="ui-btn">GO TO REWARD STORE</a>
		</div><!-- /content -->

	</section><!-- /page -->



	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/jquery.steps.min.js"></script>
	<script src="js/jungheinrichscripts.js"></script>
	<script src="js/form-validation.js"></script>

</body>
</html>