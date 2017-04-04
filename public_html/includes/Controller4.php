<!-- ***********************************************************************************
  Page Name  : Controller4.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 4
  Purpose    : Connecting to a web server where the website is hosted and to the SQL server.
               Also, create a table if not previously create it, load data into PHP
               variables, and implement the submit buttons pressed and load corresponding
               program.

  Due Date   : 10/31/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan Controller4.php</title>
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
    			//Customers table
    			$customers = "customers";

    			//See if table exists
    			$query = mysqli_query($connection, "SELECT * FROM $customers");

    			//If table does not exist, create it
    			if (!$query)
    			{
    				$sql = "CREATE TABLE " . $customers . "(
	    				        FirstName VARCHAR(30),
	    				        LastName VARCHAR(30),
	    				        Cellphone VARCHAR(20) NOT NULL,
	    				        Email VARCHAR(30),
	    				        WebsiteDesign VARCHAR(14),
	    				        Optimization VARCHAR(12),
	    				        Consultation VARCHAR(12),
	    				        Location VARCHAR(13),
	    				        CompletionTime VARCHAR(14),
	    				        Requests VARCHAR(200),
	    				        PRIMARY KEY(Cellphone)
    				        )";

    				$result = mysqli_query($connection, $sql);

    				//Confirm table creation
    				if ($result)
    				{
    				  echo "Table ".$customers." created.<br>";
    				}
    				else
    				{
    					die("Cannot create ".$customers.": ".mysqli_error($connection));
    				}
    			}
    		}
    	}

    	//Get the form data
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $Cellphone = $_POST['cell'];
      $Email = $_POST['email'];
      $WebDesign = $_POST['WebsiteDesign'];
      $Optimization = $_POST['Optimization'];
      $Consultation = $_POST['Consultation'];
      $Location = $_POST['location'];
      $CompletionTime = $_POST['drop-down'];
      $Requests = $_POST['requests'];

    	if ( $_POST['Find'] )
      {
        include('find.php');
      }
      else if ( $_POST['Save'] )
      {
        include('save.php');
      }
      else if ( $_POST['Modify'] )
      {
        include('modify.php');
      }
      else if ( $_POST['Delete'] )
      {
        include('delete.php');
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

      include('pgm4.php');
    ?>
  </body>
</html>
