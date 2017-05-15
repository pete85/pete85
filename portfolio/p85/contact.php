<!DOCTYPE html>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info.pete85@gmail.com";
    $email_subject = "pete85 - enquiry";
 
    function died($error) {
        // your error code can go here
        echo "I'm sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died("I'm sorry, but there appears to be a problem with the form you submitted.");       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	if(!preg_match($email_exp,$email_from)) {
	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$name)) {
	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}


	if(strlen($message) < 2) {
	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}

	if(strlen($error_message) > 0) {
	died($error_message);
	}
 
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<?php
 
}
?>

<html lang="en-US" class="no-js">
	<head>
		<?php include('include/head.php') ?>
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
				
				
					<!--======= NAME ========-->
					<a class="navbar-brand tlt" data-in-effect="flipInY" href="#home">pete85</a>
				
				</div>
				
			</div>
			
		</div><!--End main-nav -->

		<!-- ==============================================
		HEADER
		=============================================== -->
		<header id="home">
			<div class="container text-center">

                <div class="hello testElement">
                    <h1 class="intro-1 tlt" data-in-effect="flipInY">Thank you</h1>
                    <h2 class="intro-2 tlt" data-in-effect="flipInY">for getting in touch with me.</h2>
                    <h3 class="intro-3 tlt" data-in-effect="flipInY">I will contact you soon.</h3>
                    <br/>
                    <a href="index.php" class="btn btnBack hvr-push">
                        <i class="fa fa-home fa-4x animated"></i>
                    </a>
                </div>
                
			</div>
		</header><!--End home header -->
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->
		
		<?php include('include/scripts.php') ?>

	</body>
	
</html>