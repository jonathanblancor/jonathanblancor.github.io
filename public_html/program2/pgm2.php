<!-- ***********************************************************************************
  Page Name  : pgm2.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 2
  Purpose    : Create a custom form for my company/project. Create CSS menus. Introduce PHP.

  Due Date   : 09/26/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan pgm2</title>
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

    <?php include('../includes/menu.php'); ?>

    <form action="Controller2.php" method="post">
      <table width="100%">
        <tr>
          <td>
            <table>
              <tr>
                <td>First name: &nbsp &nbsp</td>
                <td><input type="text" name="fname" value=""></td>
              </tr>
              <tr>
                <td>Last name: </td>
                <td><input type="text" name="lname" value=""></td>
              </tr>
              <tr>
                <td>Cellphone: </td>
                <td><input type="text" name="cell" value=""></td>
              </tr>
              <tr>
                <td >Email: </td>
                <td><input type="text" name="email" value=""></td>
              </tr>
            </table>
            <table>
              <tr>
                <td style="padding-bottom: 12px; padding-top: 5px">Services &nbsp &nbsp &nbsp &nbsp</td>
                <td style="padding-bottom: 12px; padding-top: 5px"><input type="checkbox" name="services1" value="">Website Design &nbsp</td>
                <td style="padding-bottom: 12px; padding-top: 5px"><input type="checkbox" name="services2" value="">Optimization &nbsp</td>
                <td style="padding-bottom: 12px; padding-top: 5px"><input type="checkbox" name="services3" value="">Consultation</td>
              </tr>
              <tr>
                <td style="padding-bottom: 10px">Location </td>
                <td style="padding-bottom: 10px"><input type="radio" name="location" value="">Local</td>
                <td style="padding-bottom: 10px"><input type="radio" name="location" value="">National</td>
                <td style="padding-bottom: 10px"><input type="radio" name="location" value="">International</td>
              </tr>
            </table>
            <table>
              <tr>
                <td style="padding-bottom: 25px">Want it done &nbsp</td>
                <td style="padding-bottom: 25px">
                  <select name="drop-down">
                    <option>Within 3 days</option>
                    <option>Within 6 days</option>
                    <option>Within 10 days</option>
                    <option>No hurry</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td style="vertical-align: text-top;">Requests</td>
                <td>
                  <textarea name="requests" rows="3" cols="40"></textarea>
                </td>
              </tr>
            </table>
            <table width="100%" style="text-align: center; padding-top: 30px;">
              <tr>
                <td>$message</td>
              </tr>
            </table>
            <table width="100%" style="text-align: center; padding-left: 25px; padding-top: 30px;">
              <tr>
                <td>
                  <input type="submit" name="Find" value="Find">
                  <input type="submit" name="Save" value="Save">
                  <input type="submit" name="Modify" value="Modify">
                  <input type="submit" name="Delete" value="Delete">
                  <input type="reset" name="Clear" value="Clear">
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>

    <?php include('../includes/menu.php'); ?>

  </body>
</html>