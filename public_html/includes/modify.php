<!-- ***********************************************************************************
  Page Name  : modify.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Modify a record requested by the user.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->
<html>
  <body>
    <?php
      $found = $_POST['found'];

      if ( strlen(trim($found)) > 0 && $found == $Cellphone )
      {
        $query =  "UPDATE ".$customers.
                  " SET FirstName = '$FirstName',
                        LastName = '$LastName',
                        Email = '$Email',
                        WebsiteDesign = '$WebDesign',
                        Optimization = '$Optimization',
                        Consultation = '$Consultation',
                        Location = '$Location',
                        CompletionTime = '$CompletionTime',
                        Requests = '$Requests'
                    WHERE Cellphone = '$Cellphone' ";

        if (mysqli_query($connection, $query))
        {
          $message = "<font color=\"blue\">RECORD $Cellphone MODIFIED.</font>";
        }
        else
        {
          $message = "<font color=\"red\">PROBLEM UPDATING RECORD.</font>";
        }
      }
      else
      {
        $message = "<font color=\"red\">FIND THE RECORD BEFORE MODIFYNG IT.</font>";
      }
    ?>
  </body>
</html>