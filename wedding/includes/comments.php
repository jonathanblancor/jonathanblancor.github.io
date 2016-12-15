<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>Advices & Comments</title>
	</head>
	<body>
		<header>
			<div id="top">Jonathan & Lisvet</div>
		</header>
		<?php include('menu.php'); ?>
		<br>
		<section>
			<form id="comments-form" method="post">
				<label for="commentsfield">Please write any <i>useful</i>, <i>encouraging</i>, and <i>wise</i> advice that we might need for our future lives together. Best wishes and other comments are also welcomed!</label><br>
				<textarea name="comments" autofocus rows="10" cols="80" required spellcheck="true" minlength="10"></textarea>
				<br>

				<input type="submit" name="Submit">
			</form>

		</section>

		<?php

			// if (isset( $_POST['Submit'] )) {
				$conn = mysqli_connect("fdb14.biz.nf", "2256775_wedding", "Wedding@2017", "2256775_wedding");

				// if(mysqli_connect_errno()) {
					// header("Location: rsvp.php?success=false");
				// }
				// else {
					$Comments = $_POST['comments'];
					// echo $Comments;
			    //Do not accept data if field is empty
			    // if (strlen($Comments) > 0)
			    // {
		      $query = "INSERT INTO comments (Comments)
		                VALUES ('$Comments')";

		      //Execute query. If successful, let the user know the record was added
		      if (mysqli_query($conn, $query)) {
		      	// echo "GOOD";
		        // header("Location: rsvp.php?message=true");
		      }
		      else { //Let user know record was not added
		        // header("Location: rsvp.php?message=duplicate");
		        // echo mysqli_error($conn);
		      }
		    // }
		    // else { //Let user know there are empty fields
		    // 	// header("Location: rsvp.php?message=empty_fields");
		    // }

		    mysqli_close($conn);
				// }
			// }

		?>
	</body>
</html>