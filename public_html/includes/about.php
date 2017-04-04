<!-- ***********************************************************************************
  Page Name  : about.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Describe the webpage purpose.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan About</title>
    <style>
      body {
        width: 575px;
        margin: 0 auto;
      }

      table table {
        /*float: left;*/
        padding-bottom: 8px;
      }

      span {
        font-size: 20px;
        color: blue;
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

    <span>About</span><br>

    <p>On this website you will find my bio information, a little bit about me, and what I have done throughout my career at FIU by going to the links under PGM1.</p>

    <p>The form available is an interactive form that will let you find, save, modify, delete, and clear records. You can also iterate through the records and see which records exist.</p>

    <?php include('menu.php'); ?>
  </body>
</html>