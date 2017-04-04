<!-- ***********************************************************************************
  Page Name  : contact_us_controller.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Provide the mechanism for contacts table functionality.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan contact_us_controller</title>
  </head>
  <body>

    <?php

    	//Create connection to MySQL server: host name, user name, password, and database.
    	$connection = mysqli_connect("ocelot.aul.fiu.edu", "fall16_jblan053", "3605645", "fall16_jblan053");

    	if (mysqli_connect_errno()) //Connection failed
    	{
    		echo "Connection to MySQL failed: " . mysqli_connect_error();
    	}
    	else //Connection successful
    	{
    		$db_selected = mysqli_select_db($connection, "fall16_jblan053");

    		if (!$db_selected) //Database does not exist
    		{
    			die("Database does not exist " . mysqli_error());
    		}
    		else //Database exists
    		{
    			//contacts table
    			$contacts = "contacts";

    			//See if table exists
    			$query = mysqli_query($connection, "SELECT * FROM $contacts");

    			//If table does not exist, create it
    			if (!$query)
    			{
    				$sql = "CREATE TABLE " . $contacts . "(
	    				        FirstName VARCHAR(30),
	    				        LastName VARCHAR(30),
	    				        Cellphone VARCHAR(20) NOT NULL,
	    				        Requests VARCHAR(200),
	    				        PRIMARY KEY(Cellphone)
    				        )";

    				$result = mysqli_query($connection, $sql);

    				//Confirm table creation
    				if ($result)
    				{
    				  echo "Table ".$contacts." created.<br>";
    				}
    				else
    				{
    					die("Cannot create ".$contacts.": ".mysqli_error($connection));
    				}
    			}
    		}
    	}

    	//Get the form data
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $Cellphone = $_POST['cell'];
      $Requests = $_POST['requests'];

      if ( $_POST['Save'] )
      {
        include('save_contacts.php');
      }
      else if ( $_POST['Clear'] )
      {
        include('clear.php');
      }
      else
      {
      	 echo "<br><h1>UNKNOWN button pressed.</h1>";
      }

      mysqli_close($connection);

      include('contact_us.php');
    ?>
  </body>
</html>
