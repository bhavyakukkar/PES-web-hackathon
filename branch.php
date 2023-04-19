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


    //get free branches of campus
    $branches = mysqli_fetch_all(mysqli_query(
        $db,
        "SELECT branch, seats_left FROM seat WHERE campus = '".$_POST['campus']."';"
    ));



    ?>
    <header>
        <div id="nav">
            
        </div>
        <div id="heading"><img src="./pesu logo.jpg" width="60%" height="40%"></div>

   
        
    </header>
   
    <div class="box">
        <ul >  
          <li>1.Registration</li> 
          <li>2.Campus</li>  
          <li class='current'>3.Branch</li>  
          <li>4.Payment</li> 
          <li>5.Verification</li> 
        

      </ul>  
      </div>
        <div class="campus">
        <h3>Choose your branch:</h3>
        <br><br>    
        <div class="select">
          <form action='./payment.php' method="post">
            <select name='branch'>
              <?php
              $i = 1;
              foreach($branches as $branch) {
                if($branch[1] > 0) {
                  echo '<option value="'.$branch[0].'">'.$branch[0].'</option>';
                  $i++;
                }
              }
              ?>

            </select>
          </div>
    
          <input type="submit" id="log" value="Pay" > 
    <input hidden name='campus' value='<?= $_POST['campus'] ?>'>
    <input hidden name='rank' value='<?= $_POST['rank'] ?>'>
        </form>
          
</div>
 
    
    <footer>
        <div id="year">Copyright 2023 ©</div>
        
    </footer>
</body>
</html>