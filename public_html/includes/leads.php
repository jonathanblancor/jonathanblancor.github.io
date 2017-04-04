<!-- ***********************************************************************************
  Page Name  : leads.php
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
    <title>Blanco Jonathan Leads.php</title>
    <style>
      body {
        width: 575px;
        margin: 0 auto;
      }

      table table {
        /*float: left;*/
        padding-bottom: 8px;
      }
    </style>
  </head>
  <body>
    <table width="100%" style="text-align: center; font-size: 30px; color: #8a2be2;">
      <tr>
        <td>JB Solutions</td>
      </tr>
    </table>

    <?php include('menu.php'); ?>

    <form action="leads_controller.php" method="post">
      <table width="100%">
        <tr>
          <td>
            <table>
              <tr>
                <td>First name: &nbsp &nbsp</td>
                <td><input type="text" name="fname" value="<?php echo $FirstName ?>"></td>
              </tr>
              <tr>
                <td>Last name: </td>
                <td><input type="text" name="lname" value="<?php echo $LastName ?>"></td>
              </tr>
              <tr>
                <td>Cellphone: </td>
                <td><input type="text" name="cell" value="<?php echo $Cellphone ?>"></td>
              </tr>
            </table><br>
            <table>
              <tr>
                <td style="vertical-align: text-top;">Requests &nbsp &nbsp &nbsp &nbsp</td>
                <td>
                  <textarea name="requests" rows="3" cols="40"><?php echo $Requests ?></textarea>
                </td>
              </tr>
            </table>
            <table width="100%" style="text-align: center; padding-top: 30px;">
              <tr>
                <td><?php echo "$message"; ?></td>
              </tr>
            </table>
            <table width="100%" style="padding-top: 30px; text-align: center;">
              <tr>
                <td>
                  <input type="submit" name="First" value="First">
                  <input type="submit" name="Next" value="Next">
                  <input type="submit" name="Previous" value="Previous">
                  <input type="submit" name="Last" value="Last">
                  <input type="hidden" name="location" value="<?php echo $location ?>">
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>

    <?php include('menu.php'); ?>

  </body>
</html>