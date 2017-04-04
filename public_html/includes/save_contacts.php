<!-- ***********************************************************************************
  Page Name  : save_contacts.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Save a record on the server if it does not exists, else, inform the user
  						 that it cannot be added because it exists.

  Due Date   : 10/31/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->
  <html>
    <body>
      <?php

        //Remove front and back spaces
        $Cellphone = trim($Cellphone);

        //Do not accept data if Cellphone does not have a value
        if (strlen($Cellphone) > 0)
        {
          $query = "INSERT INTO contacts (
                      FirstName,
                      LastName ,
                      Cellphone,
                      Requests
                    )
                    VALUES (
                      '$FirstName',
                      '$LastName',
                      '$Cellphone',
                      '$Requests'
                    )";

          //Execute query. If successful, let the user know record was added
          if (mysqli_query($connection, $query))
          {
            $message = "<font color=\"blue\">RECORD $Cellphone ADDED</font>";
          }
          else //Let user know record was not added
          {
            $message = "<font color=\"red\">RECORD $Cellphone ALREADY EXISTS</font>";
          }
        }
        else //Let user know cellphone must have a value
        {
          $message = "<font color=\"red\">RECORD NOT ADDED. Cellphone CANNOT BE EMPTY.</font>";
        }
      ?>
    </body>
  </html>