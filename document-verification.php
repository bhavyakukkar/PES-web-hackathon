<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
    <title>Verification</title>
</head>
<body>
    <?php
        require 'env.inc';
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        //update dd in admission
        mysqli_query(
            $db,
            "UPDATE admission
            SET dd_num = '".$_POST['dd_num']."',
            dd_amt = ".$_POST['dd_amt'].",
            paid = 1
            WHERE rank = ".$_POST['rank'].";"
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
        <li>4.Payment</li> 
        <li class='current'>5.Verification</li>  
        

      </ul>  
      </div>
 
        
            <div class="login">    
                <form id="login" method="post" action="./welcome-kit.php" > 
                    <label><b> Aadhaar Number : 
                    </b>    
                    </label>    
                    <input type="number" name="aadhaar_num" id="pessatid" placeholder="eg: 0000-0000-0000-0000">    
                    <br><br>    
                    <label><b> Mobile Number :
                    </b>    
                    </label>    
                    <input type="number" name="mobile" id="name" placeholder="eg: +91 1234567890">    
                    <br><br>
                    <label><b> <a id='otp-button' style="padding: 3px;" onclick="otp()">Send OTP :</a>
                    </b>    
                    </label>    
                    <input type="number" name="mobile" id="mobile" placeholder="eg:000000">    
                    <br><br>     
                    <label for="profile_img"><b>Upload Photo:</b></label>
                    <input type="file" name="profile_img" value="profile_img">
                    <input hidden name='rank' value='<?= $_POST['rank'] ?>'>
                    <br><br>  <br><br>  
                    <input type="submit" id="log" value="Verify" > 
                    <br><br>
                      
                     
                </form>
        </div>
   
    <footer>
        <div id="year">Copyright 2023 ©</div>
        
    </footer>
    <script>
        function otp() {
         alert ("OTP IS SENT");
         setTimeout(() => {
             alert ("OTP HAS BEEN DETECTED")
             document.getElementById("mobile").value=456238;
         }, 2000);
         
        }
    </script>
</body>
</html>