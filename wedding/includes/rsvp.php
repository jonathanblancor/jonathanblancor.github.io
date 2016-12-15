<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>RSVP</title>
	</head>
	<body>
		<header>
			<div id="top">Jonathan & Lisvet</div>
		</header>
		<?php include('menu.php'); ?>s
		<br>
		<section>
			<form method="post" action="rsvp_controller.php" id="contacts-form">
				<label for="firstname">First Name</label><br>
				<input type="text" name="fname" id="firstname" autofocus placeholder="Your first name" required><br>

				<label for="lastname">Last Name</label><br>
				<input type="text" name="lname" id="lastname" placeholder="Your last name" required><br>

				<label for="cell">Cellphone #</label><br>
				<input type="tel" name="cellphone" id="cell" placeholder="Numbers only. No () or -" required><br>

				<label for="emailfield">Email</label><br>
				<input type="email" name="email" id="emailfield" placeholder="An email address" required><br>

				<label for="size">Party Size (including you)</label><br>
				<input type="number" name="partysize" id="size" placeholder="How many coming?" required><br>

				<input type="submit" name="Submit">

				<!-- Display corresponding message on form submission -->
				<div id="form-message"><?php if($_GET['message'] == 'true') {echo "Form Submitted.Thank you!";} else if($_GET['message'] == 'false') {echo "A problem occurred. Please contact Jonathan or Lisvet about this.";} else if($_GET['message'] == 'empty_fields') {echo "Please fill in ALL fields.";} else if($_GET['message'] == 'duplicate') {echo "Cellphone already exists. Enter a new one.";}?></div>
			</form>

			<div id="map"></div>
			<script>
				function initMap() {

					var thallata = {lat: 25.6103, lng: -80.3086};

					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 15,
						center: thallata
					})

					var marker = new google.maps.Marker({
	          position: thallata,
	          map: map
        	});
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5FMDVKR1e7zupgOLrxY8kDuMNy28dhy0&callback=initMap" onerror="googleError()"></script>
		</section>
	</body>
</html>