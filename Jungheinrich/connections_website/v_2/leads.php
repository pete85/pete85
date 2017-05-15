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

	
		<div class="row" id="filterTabs">
			<button class="btn-custom leadTab allTab active-tab" data-tab="all">ALL</button>
	  		<button class="btn-custom leadTab" data-tab="lead-accepted">ACCEPTED</button>
			<button class="btn-custom leadTab" data-tab="lead-rejected">REJECTED</button>
	  		<button class="btn-custom leadTab" data-tab="lead-ongoing">ONGOING</button>
	  	</div>


		<div class="row filters">
			
			<h2>Filter by:</h2>
			<div class="col-sm-3">
				<h3>Enquiry type</h3>
		      	<select name="filter-enquiry" id="filter-enquiry" data-attribute="enquiryType">
		      		<option value="" selected>Select...</option>
		      		<option value="training">Training</option>
		      		<option value="tyres">Tyres</option>
		      	</select>
			</div>
			<div class="col-sm-3">
				<h3>Product</h3>
		      	<select name="filter-product" id="filter-product" data-attribute="productType">
		      		<option value="" selected>Select...</option>
		      		<option value="">Health & Safety</option>
		      		<option value="">Tyres fitting</option>
		      	</select>
			</div>
			<div class="col-sm-3">
				<h3>Lead from</h3>
				<input type="text" id="filter-source" onkeyup="filterSource()" placeholder="Enter name...">
			</div>
			<div class="col-sm-3">
				<h3>Sales contact</h3>
				<input type="text" id="filter-contact" onkeyup="filterContact()" placeholder="Enter name...">
			</div>
		</div>

		
		<div class="row">
			<!-- *** LEADS LIST *** -->

			<table width="100%" id="tblLeads">
			  <tbody>
			    <tr>
			      <th width="10%">Customer</th>
			      <th width="10%">Contact</th>
			      <th width="20%">Enquiry type</th>
			      <th width="10%">Product</th>
			      <th width="10%">Status</th>
			      <th width="10%">Lead from</th>
			      <th width="10%">Sales contact</th>
			      <th width="10%">Business won</th>
			      <th width="5%">Value</th>
			      <th width="5%">Edit</th>
			    </tr>

			    <tr class="leadInfo active-lead lead-accepted">
			      <td class="tblCustomer">Waynes Warehouse</td>
			      <td class="tblContact">
			      	John Smith
			      	<ul class="contactDetails d-1">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>training</p>
			      	<ul class="enquiryDetails d-1">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Health & Safety</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="">Select...</option>
			      		<option value="" selected>Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Paddy Brennan</td>
			      <td class="tblSalesContact">Tony Wilkinson</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="">Select...</option>
			      		<option value="" selected>Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-1" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-rejected">
			      <td class="tblCustomer">Johns Shop</td>
			      <td class="tblContact">
			      	Ted Walker
			      	<ul class="contactDetails d-2">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>tyres</p>
			      	<ul class="enquiryDetails d-2">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Tyres fitting</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="">Select...</option>
			      		<option value="">Accepted</option>
			      		<option value="" selected>Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Paul Brightman</td>
			      <td class="tblSalesContact">Tom Deeny</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="">Select...</option>
			      		<option value="">Yes</option>
			      		<option value="" selected>No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-2" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-accepted">
			      <td class="tblCustomer">Waynes Warehouse</td>
			      <td class="tblContact">
			      	Alex Hunter
			      	<ul class="contactDetails d-3">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>training</p>
			      	<ul class="enquiryDetails d-3">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Health & Safety</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="">Select...</option>
			      		<option value="" selected>Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Paddy Brennan</td>
			      <td class="tblSalesContact">Tony Wilkinson</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="">Select...</option>
			      		<option value="" selected>Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-3" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-ongoing">
			      <td class="tblCustomer">Petes Tyres</td>
			      <td class="tblContact">
			      	Alice Johnson
			      	<ul class="contactDetails d-4">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>tyres</p>
			      	<ul class="enquiryDetails d-4">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Tyres fitting</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="" selected>Select...</option>
			      		<option value="">Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Peter Moore</td>
			      <td class="tblSalesContact">Lisa Cox</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="" selected>Select...</option>
			      		<option value="">Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-4" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-accepted">
			      <td class="tblCustomer">Tyre Store</td>
			      <td class="tblContact">
			      	Jenny Brown
			      	<ul class="contactDetails d-5">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>tyres</p>
			      	<ul class="enquiryDetails d-5">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Tyres fitting</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="">Select...</option>
			      		<option value="" selected>Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Martin Wright</td>
			      <td class="tblSalesContact">Maria Knight</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="">Select...</option>
			      		<option value="" selected>Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-5" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-rejected">
			      <td class="tblCustomer">Waynes Warehouse</td>
			      <td class="tblContact">
			      	Chris Jones
			      	<ul class="contactDetails d-6">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>training</p>
			      	<ul class="enquiryDetails d-6">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Health & Safety</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="">Select...</option>
			      		<option value="">Accepted</option>
			      		<option value="" selected>Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Nick Nagle</td>
			      <td class="tblSalesContact">Tom Deeny</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="">Select...</option>
			      		<option value="">Yes</option>
			      		<option value="" selected>No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-6" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-accepted">
			      <td class="tblCustomer">Tyres World</td>
			      <td class="tblContact">
			      	Mark Fletcher
			      	<ul class="contactDetails d-7">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>training</p>
			      	<ul class="enquiryDetails d-7">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Health & Safety</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="">Select...</option>
			      		<option value="" selected>Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Paddy Brennan</td>
			      <td class="tblSalesContact">Jack Wick</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="">Select...</option>
			      		<option value="" selected>Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-7" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-ongoing">
			      <td class="tblCustomer">Marks Tyres</td>
			      <td class="tblContact">
			      	Christina Moore
			      	<ul class="contactDetails d-8">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>tyres</p>
			      	<ul class="enquiryDetails d-8">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Tyres fitting</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="" selected>Select...</option>
			      		<option value="">Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Patrick Walker</td>
			      <td class="tblSalesContact">Jim Graham</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="" selected>Select...</option>
			      		<option value="">Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-8" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			    <tr class="leadInfo active-lead lead-ongoing">
			      <td class="tblCustomer">Waynes Warehouse</td>
			      <td class="tblContact">
			      	Martin Giggs
			      	<ul class="contactDetails d-9">
			      		<li>Account number: <span>12345678</span></li>
						<li>Date: <span>01/01/2017</span></li>
			      	</ul>

			      </td>
			      <td class="tblEnquiry">
			      	<p>training</p>
			      	<ul class="enquiryDetails d-9">
			      		<li>Info 1: <span>lorem ipsum lorem</span></li>
						<li>Info 2: <span>lorem ipsum lorem ipsum</span></li>
						<li>Info 3: <span>lorem ipsum lorem</span></li>
						<li>Additional Info: <span>DHDHDhb eb bdb erbde db dfb d b dfb ad b dfb df b dsbf</span></li>
			      	</ul>
			      </td>
			      <td class="tblSroduct">Health & Safety</td>
			      <td class="tblStatus">
			      	<select name="status" id="status">
			      		<option value="" selected>Select...</option>
			      		<option value="">Accepted</option>
			      		<option value="">Rejected</option>
			      	</select>
			      </td>
			      <td class="tblFrom">Paddy Brennan</td>
			      <td class="tblSalesContact">Tony Wilkinson</td>
			      <td class="tblBusiness">
			      	<select name="businesswon" id="businesswon">
			      		<option value="" selected>Select...</option>
			      		<option value="">Yes</option>
			      		<option value="">No</option>
			      	</select>		      	
			      </td>
			      <td class="tblValue"><input type="text" name="valueInput" class="valueInput" value="£"/></td>
			      <td class="tblEdit">
			      	<button class="btn btn-danger">Update</button>
					<a href="#"><i data-tab="d-9" class="btnExpand fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
			      </td>
			    </tr>

			  </tbody>
			</table>
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