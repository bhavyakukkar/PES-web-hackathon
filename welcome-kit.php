<html>
<?php
require 'env.inc';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//update aadhar in admission
mysqli_query(
    $db,
    "UPDATE admission
    SET aadhar_num = ".$_POST['aadhar_num']."
    WHERE rank = ".$_POST['rank'].";"
);


?>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="registration.css">
  <link rel="stylesheet" href="kit.css">
  </head>
  <body>

    <div class="hero">
      <h1><center><b>PES UNIVERSITY WELCOMES YOU!!!</b></center></h1>
      <div class="nav-bar">

      <div class="nav-links">
        <ul>
          <center><a href=""><li>WE ARE HAPPY TO HAVE YOU..</li></a></center>
          <a href="content.html"><li></li></a>
          <a href="contact.html"><li></li></a>
          </ul>

          </div>
          </div>
          <div class="contain">
        <div class="gallery">
          <img src="bag.jpg">
          <div class="desc">BAG</div>
          </div>
          <div class="gallery">
          <img src="bottle.jpg" >
          <div class="desc">BOTTLE
          </div>
          </div>
          <div class="gallery">
          <img src="tshirt.jpg">
          <div class="desc">T-SHIRT
          </div>
          </div>
          
          

          </div>



          </div>






          <footer>
        <div id="year">Copyright 2023 ©</div>
        
    </footer>
  </body>
  </html>
