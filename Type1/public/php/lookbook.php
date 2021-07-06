<?php
session_start();
include("../html/links.html");
require("connect_db.php");

 ?>

  <head>
    <link rel="stylesheet" href="../css/lookbook.css">
    <title> Type 1 | LookBook </title>
  </head>

  <body style="font-family: citizen,sans-serif;font-weight: 700; font-style: normal;" class="noselect">

  <div class="w3-container w3-center w3-animate-opacity">

  <div style="float:left; font-size:28px; padding-top:40px; padding-left:15px;">
    <a href="../html/home.html"> <i class="fas fa-arrow-left"></i> </a>
  </div>

  <div class="large" style="text-align:center; padding-top:80px;">
      lookbook.
  </div>

  </div>



  <div class="capsules"  style="font-family: citizen,sans-serif;">
      <label for="my_checkbox" style="cursor:pointer;">Capsule 1 - Achromatic -2020 Collection </label>
  </div>
  <input type="checkbox" id="my_checkbox" style="display:none;">

  <div id="hidden">
    <ul class="image-list-small">
    <?php
      $q = "SELECT * FROM  `lookbook` WHERE Capsule = '1'";
      $r = mysqli_query( $link, $q );
      if ( mysqli_num_rows( $r ) > 0 )
      {
      while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
      {
       echo '<li><img id="myImg" src="../images/background.png" alt="' . $row['Product'] .'" width="150" height="150" style="margin-bottom:20px;"></li>
            ';
      }

      }
      else
      {
      echo "Error: This Lookbook Dropping Soon <br>";
      }

     ?>
   </ul>


  </div>



  <div class="capsules"  style="font-family: citizen,sans-serif;">
    <label for="my_checkbox2">Capsule 2 -2020 Collection </label>
  </div>

  <input type="checkbox" id="my_checkbox2" style="display:none;">

  <div id="hidden">
    <ul class="image-list-small">
    <?php
      $q = "SELECT * FROM  `lookbook` WHERE Capsule = '2'";
      $r = mysqli_query( $link, $q );
      if ( mysqli_num_rows( $r ) > 0 )
      {
      while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
      {
       echo '<li><img id="myImg" src="../images/background.png" alt="' . $row['Product'] .'" width="150" height="150" style="padding-bottom:20px;"></li>
            ';
      }

      }
      else
      {
      echo "Error: This Lookbook Dropping Soon <br>";
      }

     ?>
   </ul>


  </div>

<div class="zoom"></div>


<script src="../js/fade.js"></script>
