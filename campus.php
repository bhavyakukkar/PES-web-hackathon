<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="campus.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
</head>
<body>
    <?php
    require 'env.inc';

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //update student
    mysqli_query(
        $db,
        "UPDATE student
        SET puc_m = ".$_POST['puc_marks'].",
        mobile = '".$_POST['mobile']."',
        email = '".$_POST['email']."'
        WHERE pessat_id = ".$_POST['pessat_id'].";"
    );

    //insert to admission
    $rank = mysqli_fetch_assoc(mysqli_query($db, "SELECT rank FROM student WHERE pessat_id = ".$_POST['pessat_id'].";"))['rank'];
    mysqli_query(
        $db,
        "INSERT INTO admission (rank) VALUES (".$rank.");"
    );

    //get free campuses
    $rr_seats = mysqli_fetch_assoc(mysqli_query(
        $db,
        "SELECT SUM(s.seats_left) as seats FROM seat s WHERE campus = 'RR';"
    ))['seats'];
    $ec_seats = mysqli_fetch_assoc(mysqli_query(
        $db,
        "SELECT SUM(s.seats_left) as seats FROM seat s WHERE campus = 'EC';"
    ))['seats'];


    ?>
    <header>
        <div id="nav">
            
        </div>
        <div id="heading"><img src="./pesu logo.jpg" width="60%" height="40%"></div>

   
        
    </header>
   
    <div class="box">
        <ul >  
          <li>1.Registration</li> 
          <li class='current'>2.Campus</li>  
          <li>3.Branch</li>  
          <li>4.Payment</li> 
          <li>5.Verification</li> 
        

      </ul>  
      </div>
        <div class="campus">
        <h3>Choose your Campus:</h3>
        <br><br>    
        <div class="select">
          <form action='./branch.php' method='post'>
            <select name="campus">
              if($rr_seats > 0)
                echo '<option value="RR">RR Campus</option>';
              if($ec_seats > 0)
              echo '<option value="EC">Electronic City Campus</option>';

            </select>
            
          </div>
    <input hidden name='rank' value='<?= $rank ?>'>
            <input type="submit" id="log" value="Next" > 
    </form>
          
</div>
 
    
    </form>
    <footer>
        <div id="year">Copyright 2023 ©</div>
        
    </footer>
</body>
</html>