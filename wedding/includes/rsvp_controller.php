<?php
	$conn = mysqli_connect("fdb14.biz.nf", "2256775_wedding", "Wedding@2017", "2256775_wedding");

	if(mysqli_connect_errno()) {
		header("Location: rsvp.php?success=false");
	}
	else {
		$FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Cellphone = $_POST['cellphone'];
    $Email = $_POST['email'];
    $PartySize = $_POST['partysize'];

    $Cellphone = trim($Cellphone);

    //Do not accept data if any field is empty
    if (strlen($FirstName) > 0 && strlen($LastName) > 0 && strlen($Cellphone) > 0 && strlen($Email) > 0 && strlen($PartySize) > 0)
    {
      $query = "INSERT INTO contacts (
                  FirstName, LastName, PhoneNumber, Email, PartySize
                )
                VALUES (
                  '$FirstName', '$LastName', '$Cellphone', '$Email', '$PartySize'
                )";

      //Execute query. If successful, let the user know the record was added
      if (mysqli_query($conn, $query)) {
        header("Location: rsvp.php?message=true");
      }
      else { //Let user know record was not added
        header("Location: rsvp.php?message=duplicate");
      }
    }
    else { //Let user know there are empty fields
    	header("Location: rsvp.php?message=empty_fields");
    }

    mysqli_close($conn);
	}
?>