<!-- ***********************************************************************************
  Page Name  : help.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 5
  Purpose    : Explain information about how to use the site and what to expect when the
               buttons are pressed.

  Due Date   : 11/16/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<html>
  <head>
    <title>Blanco Jonathan Help</title>
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

    <span>Help</span><br>

    <ul>
      <li>FIND: The find button allows users to, given a cellphone number, obtain all the information about a person.</li><br>
      <li>SAVE: The save button takes all fields of the form and saves them to a database.</li><br>
      <li>MODIFY: The modify button updates a record. First, find the record. Then, input the new information in the fields and press modify. The record now will have new information.</li><br>
      <li>DELETE: The delete button will erase a record. First, find the record. Then, press delete to eliminate the record.</li><br>
      <li>CLEAR: The clear button cleans the fields of the form of information.</li><br>
      <li>HELP: The help button allows the user to find information regarding the features of this website.</li><br>
      <li>ABOUT: The about button describes the purpose of this site and what it is used for.</li><br>
      <li>CONTACT US: The contact us button will save unique data to the contacts table. The user's contact information would go here.</li><br>
      <li>LEADS: The leads button accesses the contacts table, allowing to move and display the records in the following fashion: first next previous last.</li>
    </ul>

    <?php include('menu.php'); ?>
  </body>
</html>