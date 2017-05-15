<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('../include/head.php') ?>
	<?php include('../include/connect.php') ?>

</head>
<body>


	<?php


		$sql = 'SELECT * FROM mywork';
		$retval = mysql_query( $sql, $conn);
	   
		   	echo 	"<table class='tblPortfolio'>
		   			<tr>
		   			<th>ID</th>
		   			<th>Type</th>
		   			<th>Name</th>
		   			<th>Thumbnail</th>
		   			<th>Image</th>
		   			<th>Description</th>
		   			<th>Link</th>
		   			<th>Modal Class</th>
		   			</tr>";
	   
		while($record = mysql_fetch_array($retval)) {
		      
	   		echo 	"<tr>";

		    echo 	"<td>" . $record['id'] . "</td> 
		    		<td>" . $record['type'] . "</td> 
		    		<td>" . $record['name'] . "</td>
		    		<td><img class='thumbPortfolio' src='data:image/jpeg;base64," .base64_encode($record['thumb']) . "'/></td>
		    		<td><img class='imgPortfolio' src='data:image/jpeg;base64," .base64_encode($record['image']) . "'/></td>
		    		<td>" . $record['description'] . "</td> 
		    		<td><a href='" . $record['link'] . "' target='_blank'>" . $record['link'] . "</a></td> 
		    		<td>" . $record['modalClass'] . "</td>";
			echo "</tr>";
		   }

		   echo "</table>";
	   
			mysql_close($conn);


	?>

</body>
</html>

