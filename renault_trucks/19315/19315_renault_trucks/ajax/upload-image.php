<?php
include('class.upload.php');
// retrieve eventual CLI parameters
$cli = (isset($argc) && $argc > 1);
if ($cli) {
    if (isset($argv[1])) $_GET['file'] = $argv[1];
    if (isset($argv[2])) $_GET['dir'] = $argv[2];
    if (isset($argv[3])) $_GET['pics'] = $argv[3];
}

// set variables
$target_dest = '../uploads/'.$_POST['desto'];
$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : $target_dest);
$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);

if (!$cli && !(isset($_SERVER['HTTP_X_FILE_NAME']) && isset($_SERVER['CONTENT_LENGTH']))) {
?>


<?php
}


// we have three forms on the test page, so we redirect accordingly

    // ---------- SIMPLE UPLOAD ----------

    // we create an instance of the class, giving as argument the PHP object
    // corresponding to the file field from the form
    // All the uploads are accessible from the PHP object $_FILES
    $handle = new Upload($_FILES['uploadimage']);

    // then we check if the file has been uploaded properly
    // in its *temporary* location in the server (often, it is /tmp)
    if ($handle->uploaded) {
		//$handle->image_ratio_no_zoom_in = true;

        // yes, the file is on the server
        // now, we start the upload 'process'. That is, to copy the uploaded file
        // from its temporary location to the wanted location
        // It could be something like $handle->Process('/home/www/my_uploads/');
        $handle->Process($dir_dest);
	    $filenameage = $handle->file_dst_name;

        // we check if everything went OK
        if ($handle->processed) {
            // everything was fine !
            echo '<p class="result">';
            echo '  <b>File uploaded with success</b><br />';
            echo '  File: <a href="'.$dir_pics.'/' . $handle->file_dst_name . '">' . $handle->file_dst_name . '</a>';
            echo '   (' . round(filesize($handle->file_dst_pathname)/256)/4 . 'KB)';
            echo '</p>';
			
			$to      = 'ben@stream-ltd.com';
            $subject = 'Media Upload from Proudprofessionals Website';
			$name = $_POST["uploadname"];
			$email_from = $_POST["uploademail"];
			$tel = $_POST["uploadtel"];
			$uploadty = $_POST["uploadyt"];
	
	
$message = "<p>Name: ". $name  . "</p>" . "<p>Email: ". $email_from  . "</p>" . "<p>Telephone: ". $tel  . "</p>" . "<p>Upload: ". '  File: <a href="http://www.proudprofessionals.co.uk/dev/uploads/' . $handle->file_dst_name . '">' . $handle->file_dst_name . '</a></p>';
$headers = 'From: noreply@proudprofessionals.co.uk' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);
			// Send Email Here
        } else {
            // one error occured
            echo '<p class="result">';
            echo '  <b>File not uploaded to the wanted location</b><br />';
            echo '  Error: ' . $handle->error . '';
            echo '</p>';
			
        }

        // we delete the temporary files
        $filenameage = $handle->file_dst_name;
		$handle-> Clean();
		
		

    } else {
        // if we're here, the upload file failed for some reasons
        // i.e. the server didn't receive the file
		echo("Upload failed");
    
	};

?>