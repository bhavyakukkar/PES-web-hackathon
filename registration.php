<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
    <title>Registration</title>
</head>
<body>
    <header>
        <div id="nav">
            
        </div>
        <div id="heading"><img src="./pesu logo.jpg" width="60%" height="40%"></div>

   
        
    </header>
   
    <div class="box">
        <ul >  
        <li class='current'>1.Registration</li> 
        <li>2.Campus</li>  
        <li>3.Branch</li>  
        <li>4.Payment</li> 
        <li>5.Verification</li>  
        

      </ul>  
      </div>
 
        
            <div class="login">    
                <form id="login" method="POST" action="./campus.php"> 
                    <label><b> Pessat Id: 
                    </b>    
                    </label>    
                    <input type="text" name="pessat_id" id="pessatid" placeholder="eg:12022">    
                    <br><br>    
                    <label><b> Name:
                    </b>    
                    </label>    
                    <input type="text" name="name" id="name" placeholder="Enter your name">    
                    <br><br>    
                    <label><b>PUC Marks:  
                    </b>    
                    </label>       
                    <input type="number" name="puc_marks" id="pucmarks" placeholder="cgpa/percentage">    
                    <br><br>    
                    <label><b> Mobile:
                    </b>    
                    </label>    
                    <input type="text" name="mobile" id="mobile" placeholder="+91 1234567890">    
                    <br><br>   
                    <label><b> E-mail:
                    </b>    
                    </label>   
                    <input type="email" name="email" id="email" placeholder="123@gmail.com">    
                    <br><br>
                    <input type="submit" id="log" value="Register" > 
                     
                </form>
        </div>
   
    <footer>
        <div id="year">Copyright 2023 ©</div>
        
    </footer>
</body>
</html>