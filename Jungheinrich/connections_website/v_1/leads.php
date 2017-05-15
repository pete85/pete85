<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jungheinrich Connections</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>

<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div id="userDiv" class="navbar-header">
				<h2 id="userName">Hello [NAME]</h2>
				<button id="btnLogout" type="button" class="btn btn-danger">Logout</button>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobileMenu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img class="mainLogo" src="images/jungheinrich_logo_400x90.png" alt="Jungheinrich logo"/></a>
			</div>
			<div class="collapse navbar-collapse" id="mobileMenu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="leads.php" class="active-page">Leads</a></li>
					<li><a href="business.php">New business</a></li>
					<li><a href="reports.php">Reports</a></li>
					<li><a href="adhoc.php">Ad-hoc</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>


<section class="container main-body margin-top-100">

	<h1>Submitted leads</h1>

	<div>	
		<div class="ui-grid-a">
			<div>
				<a href="#" class="leadTab allTab" data-tab="all">ALL</a>
		  	</div>
			<div>
		  		<a href="#" class="leadTab" data-tab="lead-accepted">ACCEPTED</a>
		  	</div>
			<div>
				<a href="#" class="leadTab" data-tab="lead-rejected">REJECTED</a>
		  	</div>
			<div>
		  		<a href="#" class="leadTab" data-tab="lead-ongoing">ONGOING</a>
		  	</div>
		</div>

		

		<!-- *** LEADS LIST *** -->

		<div data-role="collapsible-set" data-content-theme="a" data-iconpos="right" id="set">

			<!-- ACCEPTED LEAD EXAMPLE -->
		    <div class="leadInfo lead-accepted">
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
		    <div class="leadInfo lead-rejected">
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
		    <div class="leadInfo lead-ongoing">
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
		    <div class="leadInfo lead-ongoing">
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
		    <div class="leadInfo lead-rejected">
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
		    <div class="leadInfo lead-accepted">
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
	</div>

</section>























	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="js/form-validation.js"></script>
	<script src="js/jungheinrichscripts.js"></script>
	
</body>
</html>