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

			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><img class="mainLogo" src="images/jungheinrich_logo_400x90.png" alt="Jungheinrich logo"/></a>
			</div>
		</div>
	</nav>
</header>

<section class="container main-body">
	<div id="login" class="row middleParent">
		<div class="middleChild">
			<h1 class="txtIntro">Welcome to Connections</h1>
			<h2>Account login</h2>
			<form id="login_form" name="login_form" method="get" action="index.php">
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control" value="" placeholder="ID">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control" value="" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-danger">LOGIN</button>
			</form>				
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