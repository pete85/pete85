<?php
	   $dbhost = 'pete85com.ipagemysql.com';
	   $dbuser = 'pete85com';
	   $dbpass = 'Vectr@19CDti';
	   
	   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
	   
	   if(! $conn ) {
	      die('Could not connect: ' . mysql_error());
	   }
		
		mysql_select_db("pete85portfolio", $conn);
?>