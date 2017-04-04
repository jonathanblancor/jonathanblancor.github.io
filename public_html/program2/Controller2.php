<!-- ***********************************************************************************
  Page Name  : Controller2.php
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
    <title>Blanco Jonathan Controller2.php</title>
    <style>
      body {
        width: 474px;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>

    <?php
      include('../includes/menu.php');

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

      echo "<p>The $buttonClicked button was pressed</p>";
    ?>

  </body>
</html>