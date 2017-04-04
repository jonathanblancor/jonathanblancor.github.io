<!-- ***********************************************************************************
  Page Name  : menu.php
  Author     : Jonathan Blanco
  Your URL   : ocelot.aul.fiu.edu/~jblan053
  Course     : WEB-3
  Program #  : Assignment # 3
  Purpose    : Create a CSS menu.

  Due Date   : 10/24/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........    ..........

  ************************************************************************************** -->

<style>
  a {
    text-decoration: none;
  }

  nav ul {
    background: linear-gradient(top, #03a9f4 -25%, #c8e0ea 100%);
    background: -webkit-linear-gradient(top, #03a9f4 -25%, #c8e0ea 100%);
    background: -moz-linear-gradient(top, #03a9f4 -25%, #c8e0ea 100%);
    background: -ms-linear-gradient(top, #03a9f4 -25%, #c8e0ea 100%);
    list-style: none;
    display: inline-table;
    border-radius: 25px;
    padding: 0;
    font-size: 21px;
    margin-bottom: 15px;
    width: 100%;
  }

  nav ul li {
    float: left;
    padding: 13px 5px;
    width: 70px;
    position: relative;
    text-align: center;
  }

  nav ul li ul {
    position: absolute;
    display: none;
    margin-top: 12px;
    border-radius: 12px;
    font-size: 18px;
    padding-left: 5px;
    margin-left: -8px;
  }

  nav ul li:hover ul{
    display: block;
  }

  nav ul li ul li{
    padding: 10px 8px;
  }
</style>

<nav align="center">
  <ul>
    <li>
      <a href="#">PGM1</a>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../projects/projects.html">Projects</a></li>
        <li><a href="../hobbies/hobbies.html">Hobbies</a></li>
        <li><a href="../contact/contact.html">Contact</a></li>
        <li><a href="../places/places.html">Places</a></li>
      </ul>
    </li>
    <li><a href="../program2/pgm2.php">PGM2</a></li>
    <li><a href="../index.html">Home</a></li>
    <li><a href="../includes/pgm3.php">PGM3</a></li>
    <li><a href="../includes/pgm4.php">PGM4</a></li>
    <li><a href="../includes/pgm5.php">PGM5</a></li>
    <li><a href="../includes/pgm6.php">PGM6</a></li>
  </ul>
</nav>