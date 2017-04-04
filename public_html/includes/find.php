<!-- ***********************************************************************************
  Page Name  : find.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 4
  Purpose    : Find a record on the server it exists, if not inform the user that is does
  						 not exist.

  Due Date   : 10/31/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->
  <html>
	<body>
		<?php
			$query = "SELECT * FROM customers WHERE Cellphone='$Cellphone'";

			$result = mysqli_query($connection, $query);

			if ($result)
			{
				while ( $row = mysqli_fetch_array($result) ) //Get a row
				{
					$FirstName = $row['FirstName'];
		      $LastName = $row['LastName'];
		      $Cellphone = $row['Cellphone'];
		      $Email = $row['Email'];
		      $WebDesign = $row['WebsiteDesign'];
		      $Optimization = $row['Optimization'];
		      $Consultation = $row['Consultation'];
		      $Location = $row['Location'];
		      $CompletionTime = $row['CompletionTime'];
		      $Requests = $row['Requests'];
				}

				// Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);

				//Remove front and back spaces
        $Cellphone = trim($Cellphone);

        if ($rowcount)
        {
          $found = $Cellphone;

        	$message = "<font color=\"blue\">RECORD $Cellphone FOUND.</font>";
        }
        else if (strlen($Cellphone) == 0)
        {
        	$message = "<font color=\"red\">Cellphone CANNOT BE EMPTY.</font>";
        }
        else
        {
        	$message = "<font color=\"red\">RECORD $Cellphone NOT FOUND.</font>";
        }
			}
	  ?>
	</body>
</html>