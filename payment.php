<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Payment</title>
</head>
<body>
    <?php
    require 'env.inc';

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //update allotment
    mysqli_query(
        $db,
        "INSERT INTO allotment VALUES (".$_POST['rank'].", '".$_POST['campus']."', '".$_POST['branch']."');"
    );

    //decrement seats left
    mysqli_query(
        $db,
        "UPDATE seat
        SET seats_left = seats_left - 1
        WHERE campus = '".$_POST['campus']."' AND branch = '".$_POST['branch']."'"
    );

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
        <li>3.Branch</li>  
        <li class='current'>4.Payment</li> 
        <li>5.Verification</li>  
        

      </ul>  
      </div>


      <div class="login">    
                <form method="POST" action="./document-verification.php"> 
                    <label><b> DD Number: 
                    </b>    
                    </label>    
                    <input type="text" name="dd_num" id="pessatid" placeholder="eg: 501500">    
                    <br><br>    
                    <label><b> DD Amount:
                    </b>    
                    </label>    
                    <input hidden type="text" name="dd_amt" id="name" value="180000">    
                    <br><br>  
                    <input hidden name='rank' value='<?= $_POST['rank'] ?>'>
                    <input type="submit" id="log" value="Register" > 
                     
                </form>
        </div>
    

    <footer>    
        <div id="year">Copyright 2023 ©</div>
        
    </footer>
</body>
</html>