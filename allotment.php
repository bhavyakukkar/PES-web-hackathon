<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allotment</title>
    <link rel="stylesheet" href="./registration.css">
    <style>
        body { margin: 0; }
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        table {
            margin: 1px solid black;
        }
        .flex-h { display: flex; flex-direction: column; justify-content: stretch; align-items: stretch; }
        .flex-v { display: flex; justify-content: stretch; align-items: stretch; }
    </style>
</head>
<body>
    <header>
        <div id="nav">
            
        </div>
        <div id="heading"><img src="./pesu logo.jpg" width="60%" height="40%"></div>

   
        
    </header>

<h1 style='margin-bottom: auto; text-align: center;'>Student Allotment</h1><br><br>
<main>

<?php
require 'env.inc';

if(empty($_POST['username']) || empty($_POST['password'])) {
    ?>
    <div id="login-form">
        <form action='./allotment.php' method="POST">
            <table>
            <tr><td><label for="username">Admin Username:</label></td>
            <td><input id='username' name='username'></td></tr>

            <tr><td><label for="password">Password:</label></td>
            <td><input id='password' name='password' type='password'></td></tr>

            <tr><td colspan='2'><br></td></tr>
            <tr><td colspan='2'><input type='submit' value='Login'></td></tr>
            </table>
        </form>
    </div>
    <?php
}
else if(strcmp($_POST['username'], 'admin')) {
    echo 'Unauthoized';
}
else {
    
    ?>


    <div class="login">    
        <form id="login" method="POST" action="./allotment.php#output"> 
            <label><b> Campus: 
            </b>    
            </label>    
            <input type="text" name="campus" id="campus" value="<?= !empty($_POST['campus']) ? $_POST['campus'] : '' ?>">    
            <br><br>    
            <label><b> Branch:
            </b>    
            </label>    
            <input type="text" name="branch" id="name" value="<?= !empty($_POST['branch']) ? $_POST['branch'] : '' ?>">    
            <br><br>    
            <input type="submit" id="log" value="Update" > 
             

            <input hidden id="username" name="username" value="<?= $_POST['username'] ?>">
            <input hidden id="password" name="password" value="<?= $_POST['password'] ?>" type="password">
        </form>
    </div>

    <?php

    if(!empty($_POST['campus']) && !empty($_POST['branch'])) {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $data = mysqli_fetch_all(
            mysqli_query(
                $db,
                "SELECT s.rank as rank, s.name as name, ad.paid as paid, ad.dd_num as dd_num, ad.aadhar_num as aadhar_num, s.puc_m as puc_m, s.mobile as mobile, s.email as email
                FROM student s, allotment a, admission ad
                WHERE a.campus = '".$_POST['campus']."' AND a.branch = '".$_POST['branch']."' AND a.rank = s.rank AND ad.rank = s.rank;"
            )
        );
        echo '<div id="output">';
        if(count($data) == 0)
            echo 'No Records Found';
        else {
            echo '<table class="content-t"><thead><tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Paid</th>
            <th>DD Number</th>
            <th>Aadhar Number</th>
            <th>PUC Marks</th>
            <th>Mobile</th>
            <th>Email</th>
            </tr></thead><tbody>';

            foreach($data as $row) {
                echo '<tr>';
                foreach($row as $key => $value) {
                    if(strcmp($key, 'paid'))
                        echo '<td>'.($value == 1 ? 'Yes' : 'No').'</td>';
                    echo '<td>'.$value.'</td>';
                }
                echo '<tr>';
            }
            echo '</tbody></table>';
        }
        echo '</div>';
    }
}

?>

</main>
<br><br><br><br><br><br><br><br><br><br>
<footer>
    <div id="year">Copyright 2023 ©</div>
    
</footer>
</body>
</html>