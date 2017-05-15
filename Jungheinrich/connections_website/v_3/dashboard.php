<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jungheinrich Connections</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
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
					<li><a href="dashboard.php" class="active-page">Dashboard</a></li>
					<li><a href="leads.php">Leads</a></li>
					<li><a href="business.php">New business</a></li>
					<li><a href="reports.php">Reports</a></li>
					<li><a href="adhoc.php">Ad-hoc</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<section class="container main-body">
	<div id="dashboard" class="middleParent">
		<div class="middleChild">
			<h1 class="txtIntro">Driver Training</h1>
			<div class="row" id="stats">
				<div class="col-lg-6">

					<table class="tblDashboard">
						<tbody>
							<tr>
								<td><h3>Leads received</h3></td>
								<td><h1 class="lrgGreen">146</h1></td>
							</tr>
							<tr>
								<td><h3>New business</h3></td>
								<td><h1 class="lrgGreen">47</h1></td>
							</tr>
							<tr>
								<td><h3>Value of business</h3></td>
								<td><h1 class="lrgGrey">&pound;23,000</h1></td>
							</tr>
						</tbody>
					</table>
					
				</div>		
				<div class="col-lg-6">
					<table class="tblDashboard">
						<tbody>
							<tr>
								<td><h3>Leads rejected</h3></td>
								<td><h1 class="lrgRed">12</h1></td>
							</tr>
							<tr>
								<td><h3>Lost business</h3></td>
								<td><h1 class="lrgRed">7</h1></td>
							</tr>
							<tr>
								<td><h3>Commission</h3></td>
								<td><h1 class="lrgGrey">&pound;1,000</h1></td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<div id="resultsFilter" class="row">
				<div class="col-xs-12 col-lg-4">
					<h3>Filter results:</h3>
					<hr class="hidden-sm hidden-md hidden-lg"/>
				</div>
				<div class="col-xs-3 col-lg-2">
					<button type="submit" class="btn btn-custom">&nbsp;&nbsp;YTD&nbsp;&nbsp;</button>
				</div>
				<div class=" col-xs-9 col-lg-6">
					<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
					    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
					    <span></span> <b class="caret"></b>
					</div>					
				</div>
			</div>
		</div>	
	</div>		
</section>


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/jungheinrichscripts.js"></script>

	<script>
	// Calendar range picker

	$(function() {

	    var start = moment().subtract(29, 'days');
	    var end = moment();

	    function cb(start, end) {
	        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	    }

	    $('#reportrange').daterangepicker({
	        startDate: start,
	        endDate: end,
	        ranges: {
	           'Today': [moment(), moment()],
	           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	           'This Month': [moment().startOf('month'), moment().endOf('month')],
	           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	        }
	    }, cb);

	    cb(start, end);
	    
	});		
	</script>
	
</body>
</html>