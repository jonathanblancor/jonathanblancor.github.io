<!-- ***********************************************************************************
  Page Name  : delete.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Delete a record requested by the user.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->
<html>
  <body>
    <?php
      $found = $_POST['found'];

      $query = "DELETE FROM ".$customers." WHERE Cellphone='$Cellphone'";

      $Cellphone = trim($Cellphone);

      if ( strlen(trim($found)) > 0 && $found == $Cellphone )
      {
        if (mysqli_query($connection, $query))
        {
          $message = "<font color=\"red\">RECORD $Cellphone DELETED.</font>";

          $found = "";
        }
        else
        {
          $message = "<font color=\"red\">ERROR DELETING RECORD: ".mysqli_error($connection)."</font>";
        }
      }
      else
      {
        $message = "<font color=\"red\">RECORD NOT DELETED.</font>";
      }
    ?>
  </body>
</html>