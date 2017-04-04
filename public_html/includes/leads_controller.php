<!-- ***********************************************************************************
  Page Name  : leads_controller.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Access the contacts table, allowing to move to and display to the
               following records: FIRST NEXT PREVIOUS LAST.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan leads_controller.php</title>
  </head>
  <body>

    <?php

      //extact variable to track array's location
      $location = $_POST['location'];
      $location = (int)$location;

      //Create connection to MySQL server: host name, user name, password, and database.
      $connection = mysqli_connect("ocelot.aul.fiu.edu", "fall16_jblan053", "3605645", "fall16_jblan053");

      //Take action depending on button pressed.
      if ( $_POST['Last'] )
      {
        $sql = "SELECT * FROM contacts order by Cellphone ASC";

        if ( $results = mysqli_query($connection, $sql) )
        {
          //Find the total number of rows and sets the location to last row.
          $rowcount = mysqli_num_rows($results);
          $location = $rowcount-1;

          //Data_seek command moves the memory pointer in SQL table objects.
          //Location must be INT or LONG.
          mysqli_data_seek($results, $location);

          $row = mysqli_fetch_assoc($results);

          $FirstName = $row['FirstName'];
          $LastName = $row['LastName'];
          $Cellphone = $row['Cellphone'];
          $Requests = $row['Requests'];

        }
      }
      else if ( $_POST['Previous'] )
      {
        $sql = "SELECT * FROM contacts order by Cellphone ASC";

        if ( $results = mysqli_query($connection, $sql) )
        {
          //Decrement location only if it is above the lowest possible value.
          if ($location > 0)
          {
            $location--;
          }

          mysqli_data_seek($results, $location);
          $row = mysqli_fetch_assoc($results);

          $FirstName = $row['FirstName'];
          $LastName = $row['LastName'];
          $Cellphone = $row['Cellphone'];
          $Requests = $row['Requests'];
        }
      }
      else if ( $_POST['Next'] )
      {
        $sql = "SELECT * FROM contacts order by Cellphone ASC";

        if ( $results = mysqli_query($connection, $sql) )
        {
          //Total number of rows for the upper limit of the search function.
          $rowcount = mysqli_num_rows($results);

          //Increment location only if it is below the highest possible value.
          if ($location < $rowcount-1)
          {
            $location++;
          }

          mysqli_data_seek($results, $location);
          $row = mysqli_fetch_assoc($results);

          $FirstName = $row['FirstName'];
          $LastName = $row['LastName'];
          $Cellphone = $row['Cellphone'];
          $Requests = $row['Requests'];

        }
      }
      else //First record
      {
        //Resets location to position 0, and grab the first record in the table.
        $location = 0;
        $sql = "SELECT * FROM contacts order by Cellphone ASC limit 1";

        if ( $result=mysqli_query($connection, $sql) )
        {
          $row = mysqli_fetch_array( $result );

          $FirstName = $row['FirstName'];
          $LastName = $row['LastName'];
          $Cellphone = $row['Cellphone'];
          $Requests = $row['Requests'];
        }
      }

      mysqli_close($connection); //close sql connection

      include('leads.php');
    ?>
  </body>
</html>