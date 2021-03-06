<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Jonathan & Lisvet's Wedding</title>
	</head>
	<body>
		<header>
			<div id="top">Jonathan & Lisvet</div>
			<div id="middle">March 13th 2017</div>
			<div class="time">
				<div id="clock"></div>
				<div id="days">days to the big day!</div>
			</div>
		</header><br><br>
		<?php include('includes/menu.php'); ?>
		<br>
		<section>
			<!-- <div id="slideshow">
				<div class="slide">
					<img src="images/DSC_0672.jpg">
				</div>
				<div class="slide">
					<img src="images/DSC_0685.jpg">
				</div>
				<div class="slide">
					<img src="images/DSC_0774.jpg">
				</div>
			</div> -->
		</section>

		<!-- CLOCK CODE -->
		<script>
			var weddingDay = 'March 13 2017 17:00:00 GMT-0500'; // end date
			var weddingDayMs = Date.parse(weddingDay); // time in milliseconds
			var clockId = document.getElementById('clock');

			//Get time remaining from today to a future day
			function getRemainingTime(endTime) {
				var remainingTime = endTime - Date.now(); //Time in ms

				//Get days															 ms    sec  min  hr
				var days = Math.floor( remainingTime / (1000 * 60 * 60 * 24) );

				 return {
				 	'total' : remainingTime,
				 	'days' : days
				 }
			}

			//Start the clock and display the time in the given HTML element
			function runClock(element, endTime) {

				function updateClock() {
					var timeObject = getRemainingTime(endTime);

					element.innerHTML = timeObject.days;

					if (timeObject.total <= 0)
					{
						clearInterval(timeInterval);
					}
				}

				updateClock();
				var timeInterval = setInterval(updateClock, 1000);
			}

			runClock(clockId, weddingDayMs);
		</script>
		<!-- jQuery -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- SLIDESHOW CODE -->
		<!-- <script>
			var index = 0,
					items = $('#slideshow div'),
					itemAmount = items.length;

			function displayImage() {
				var item = items.eq(index);//$('#slideshow div')

				items.hide();

				item.css('display', 'inline-block');
			}

			setInterval(function() {
				index += 1;

				if (index > itemAmount - 1)
				{
					index = 0;
				}

				displayImage();
			}, 5000);

			displayImage();
		</script> -->
	</body>
</html>