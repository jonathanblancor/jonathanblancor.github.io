<!-- ***********************************************************************************
  Page Name  : pgm5.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Implementing modify, delete, help, about, and contact us.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan pgm5</title>
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

    <table width="100%">
      <tr>
        <td id="loginTime"></td>
        <td id="currentTime" style="float: right;"></td>
      </tr>
    </table><br>

    <form action="Controller5.php" method="post">
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
              <tr>
                <td >Email: </td>
                <td><input type="text" name="email" value="<?php echo $Email ?>"></td>
              </tr>
            </table>
            <table>
              <tr>
                <td style="padding-bottom: 12px; padding-top: 5px">Services &nbsp &nbsp &nbsp &nbsp</td>
                <td style="padding-bottom: 12px; padding-top: 5px"><input type="checkbox" name="WebsiteDesign" <?php if($WebDesign == "Website Design") echo checked;?> value="Website Design">Website Design &nbsp</td>
                <td style="padding-bottom: 12px; padding-top: 5px"><input type="checkbox" name="Optimization" <?php if($Optimization == "Optimization") echo checked;?> value="Optimization">Optimization &nbsp</td>
                <td style="padding-bottom: 12px; padding-top: 5px"><input type="checkbox" name="Consultation" <?php if($Consultation == "Consultation") echo checked;?> value="Consultation">Consultation</td>
              </tr>
              <tr>
                <td style="padding-bottom: 10px">Location </td>
                <td style="padding-bottom: 10px"><input type="radio" name="location" <?php if($Location == "Local") echo checked; ?> value="Local">Local</td>
                <td style="padding-bottom: 10px"><input type="radio" name="location" <?php if($Location == "National") echo checked; ?> value="National">National</td>
                <td style="padding-bottom: 10px"><input type="radio" name="location" <?php if($Location == "International") echo checked; ?> value="International">International</td>
              </tr>
            </table>
            <table>
              <tr>
                <td style="padding-bottom: 25px">Want it done &nbsp</td>
                <td style="padding-bottom: 25px">
                  <select name="drop-down">
                    <option <?php if($CompletionTime == "Within 3 days") echo selected;?> >Within 3 days</option>
                    <option <?php if($CompletionTime == "Within 6 days") echo selected;?> >Within 6 days</option>
                    <option <?php if($CompletionTime == "Within 10 days") echo selected;?> >Within 10 days</option>
                    <option <?php if($CompletionTime == "No hurry") echo selected;?> >No hurry</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td style="vertical-align: text-top;">Requests</td>
                <td>
                  <textarea name="requests" rows="3" cols="40"><?php echo $Requests; ?></textarea>
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
                  <input type="submit" name="Find" value="Find">
                  <input type="submit" name="Save" value="Save">
                  <input type="submit" name="Modify" value="Modify">
                  <input type="submit" name="Delete" value="Delete">
                  <input type="submit" name="Clear" value="Clear">
                  <input type="hidden" name="found" value="<?php echo $found ?>">
                  <input type="submit" name="Help" value="Help">
                  <input type="submit" name="About" value="About">
                  <input type="submit" name="ContactUs" value="Contact Us">
                  <input type="submit" name="Leads" value="Leads">
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>

    <?php include('menu.php'); ?>
    <script>
      //Display current time, a running clock
      function currentTime()
      {
        var today   = new Date();
        var hour    = today.getHours();
        var minutes = today.getMinutes();
        var sec     = today.getSeconds();

        minutes = checkTime(minutes);
        sec     = checkTime(sec);

        document.getElementById('currentTime').innerHTML = "Current Time: "+hour+":"+minutes+":"+sec;

        setTimeout(function(){ currentTime() }, 500);
      }

      //Add a 0 in front of numbers less than 10
      function checkTime(i)
      {
        if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
      }

      //Display login time
      function loggedInTime( temp )
      {
        var time = new Date();
        var hour    = time.getHours();
        var minutes = time.getMinutes();
        var sec     = time.getSeconds();

        minutes = checkTime(minutes);
        sec     = checkTime(sec);

        var login =  "Login at: " + time.toDateString() + " " +hour+":"+minutes+":"+sec;
        document.getElementById('loginTime').innerHTML = login;
      }

      loggedInTime();
      currentTime();
    </script>
  </body>
</html>