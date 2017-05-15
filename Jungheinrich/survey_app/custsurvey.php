<!DOCTYPE html>
<html lang="en">
	<?php include'inc/head.php' ?>
	<body>
		<div class="header">
			<img src="img/jungheinrich_logo.png" alt="JUNGHEINRICH Logo" class="col-xs-6 col-sm-4 col-md-3 pull-right" />
		</div>
		<div class="container">
			<img src="img/insights_logo.png" alt="Connections" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" />
		<h1>Customer Survey</h1>
        
        
		<form class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
			
			<fieldset class="arrow">
				<select id="customer" class="enquiries">
					<option rel='selected disabled' placeholder="selected disabled" selected disabled>Customer</option>
					<option value="A">Logistics Systems</option>
				 	<option value="B">UE and STR</option>
				 	<option value="C">Regional Sales</option>
				 	<option value="D">Corporate Sales</option>
				</select>
			<fieldset>
			<fieldset class="arrow">
				<select id="custName" class="enquiries">
					<option rel='selected disabled' placeholder="selected disabled" selected disabled>Contact Name</option>
<!-- 					<option value="A">Steve Richmond</option>
				 	<option value="B">Neil Warren</option>
				 	<option value="C">Mike Hasson</option>
				 	<option value="D">Jonathan Morris</option> -->
				</select>
			<fieldset>
			<fieldset class="arrow">
				<select id="custMobile" class="enquiries">
					<option rel='selected disabled' placeholder="selected disabled" selected disabled>Mobile</option>
<!-- 					<option value="A">07736205441</option>
				 	<option value="B">07736202603</option>
				 	<option value="C">07736205500</option>
				 	<option value="D">07736206916</option> -->
				</select>
			<fieldset>

			
			<fieldset>
				<a class="next" href="http://www.streamdigital.co.uk/jungsurvey/thank_you2.php">Submit</a>
  			</fieldset>
		</form>
        
					
		</div>
		<?php include'inc/footer.php' ?>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

		<!-- Temporary script for testing only -->
<!-- 		<script>
			$( document ).ready(function() {
				$('#customer').change(function(){
				  if($(this).val() == 'A'){ // or this.value == 'volvo'
				    $('#custName option:gt(0)').hide();
					$('#custName option:eq(1)').show();
					$('#custMobile option:gt(0)').hide();
					$('#custMobile option:eq(1)').show();
				  } else if($(this).val() == 'B'){
				    $('#custName option:gt(0)').hide();
					$('#custName option:eq(2)').show();
					$('#custMobile option:gt(0)').hide();
					$('#custMobile option:eq(2)').show();
				  } else if($(this).val() == 'C'){
				    $('#custName option:gt(0)').hide();
					$('#custName option:eq(3)').show();
					$('#custMobile option:gt(0)').hide();
					$('#custMobile option:eq(3)').show();
				  } else {
				    $('#custName option:gt(0)').hide();
					$('#custName option:eq(4)').show();
					$('#custMobile option:gt(0)').hide();
					$('#custMobile option:eq(4)').show();
				  }
				});


			});
		</script> -->

		<script>
			$( document ).ready(function() {
				$('#customer').change(function(){
				  if($(this).val() == 'A'){ // or this.value == 'volvo'
				    	$('#custName option:gt(0)').remove();
				    	$("#custName").append('<option value="A">Steve Richmond</option>');
				    	$('#custMobile option:gt(0)').remove();
				    	$("#custMobile").append('<option value="A">07736205441</option>');
				  } else if($(this).val() == 'B'){
				  		$('#custName option:gt(0)').remove();
				  		$("#custName").append('<option value="B">Neil Warren</option>');
				  		$('#custMobile option:gt(0)').remove();
				  		$("#custMobile").append('<option value="B">07736202603</option>');
				  } else if($(this).val() == 'C'){
				  		$('#custName option:gt(0)').remove();
				  		$("#custName").append('<option value="C">Mike Hasson</option>');
				  		$('#custMobile option:gt(0)').remove();
				  		$("#custMobile").append('<option value="C">07736205500</option>');
				  } else {
				    	$('#custName option:gt(0)').remove();
				    	$("#custName").append('<option value="D">Jonathan Morris</option>');
				    	$('#custMobile option:gt(0)').remove();
				    	$("#custMobile").append('<option value="D">07736206916</option>');

				  }
				});


			});			
		</script>
		
	</body>
</html>
