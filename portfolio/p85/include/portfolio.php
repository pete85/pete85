<?php
	$sql = 'SELECT * FROM mywork ORDER BY id DESC;';
	$retval = mysql_query( $sql, $conn);


	while($record = mysql_fetch_array($retval)) {

	// Thumbnail image
	echo 
	"<article class='project-item " . $record['type'] . "' data-toggle='modal' data-target='." . $record['modalClass'] . "'>
		<img class='img-responsive project-image' src='data:image/jpeg;base64," .base64_encode($record['thumb']) . "'  alt=''>
        <h2 class='project-title'>" . $record['name'] . "</h2>
	</article>";

	// Modal
	echo 
	"<div class='modal fade " . $record['modalClass'] ."'>
      	<div class='modal-dialog modal-lg'>
        	<div class='modal-content'>
          		<div class='modal-header'>
            		<button type='button' class='close' data-dismiss='modal'>
            			<span aria-hidden='true'><i class='fa fa-times'></i></span><span class='sr-only'>Close</span>
            		</button>
            		<h2 class='modal-title'>" . $record['name'] . "</h2>
                <h4 class='project-name'>" . $record['project'] . "</h4>
            		<img src='data:image/jpeg;base64," .base64_encode($record['image']) ."' alt=' />
          		</div>
          		<div class='modal-body'>

          			<div class='row'>
          				<div class='col-sm-10 col-sm-offset-1 description'>
          					<p>" . $record['description'] . "</p>
          				</div>	
          			</div>

          			<div class='row'>
              			
              			<div class='col-xs-12 btnModal " . $record['hidden'] ."'>
              				<a class='btnAnchor hvr-fade' href='" . $record['link'] . "' target='_blank'>View more</a>
              			</div>

                    <div class='col-xs-12 btnModal " . $record['nogit'] ."'>
                      <a class='btnAnchor hvr-fade' href='" . $record['github'] . "' target='_blank'><i class='fa fa-github' aria-hidden='true'></i> Github</a>
                    </div>

          			</div>
            		
        		</div>
       		</div>
      	</div>
    </div>";
}
?>