<!-- ***********************************************************************************
  Page Name  : Controller3.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 3
  Purpose    : Use the login time and current time, and pass actual data to this controller.

  Due Date   : 10/24/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan Controller3.php</title>
    <style>
      body {
        width: 474px;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>

    <?php
      include('../includes/menu.php'); //css menu

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
    ?>

    <table>
      <tr>
        <td>First Name</td>
        <td><?php echo "$FirstName";?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php echo "$LastName";?></td>
      </tr>
      <tr>
        <td>Cellphone</td>
        <td><?php echo "$Cellphone";?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo "$Email";?></td>
      </tr>
      <tr>
        <td>Services</td>
        <td><?php echo "$WebDesign &nbsp $Optimization &nbsp $Consultation";?></td>
      </tr>
      <tr>
        <td>Location</td>
        <td><?php echo "$Location";?></td>
      </tr>
      <tr>
        <td width="127px">Completion Time &nbsp&nbsp</td>
        <td><?php echo "$CompletionTime";?></td>
      </tr>
      <tr valign="top">
        <td>Requests</td>
        <td><?php echo "$Requests";?></td>
      </tr>
    </table>

    <?php
      //Check for the button pressed
      if ( $_POST['Find'] )
      {
        $buttonClicked = $_POST['Find'];
      }
      else if ( $_POST['Save'] )
      {
        $buttonClicked = $_POST['Save'];
      }
      else if ( $_POST['Modify'] )
      {
        $buttonClicked = $_POST['Modify'];
      }
      else if ( $_POST['Delete'] )
      {
        $buttonClicked = $_POST['Delete'];
      }
      else if ( $_POST['Clear'] )
      {
        $buttonClicked = $_POST['Clear'];
      }

      echo "<p>This is the controller3 page, the $buttonClicked button was pressed.</p>";
    ?>
  </body>
</html>
