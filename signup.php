<?php

    include 'connect.php';

    if(isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $sql = "INSERT INTO details (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "Data Inserted Successfully";
        }
        else{
            echo "Data  not Inserted Successfully";   
        }

    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       
        <div class="content2">
            <div class="header2">
                <h1>Welcome Back!</h1>
            </div>
            <p>To keep connected with us please login with your personal details</p>

            <a href="prog.php" class="btn2">Log In</a>
        </div>

            <div class="login">
                <div class="header">
                    <h1>Create Account</h1>
                </div>
                <form action="signup.php" class="myform2" method="POST">
                    <div class="name">
                        <input type="text" name="fname" id="" placeholder="First Name" required>
                        <input type="text" name="lname" id="" placeholder="Last Name" required>
                    </div>
                    <div class="mail">
                        <input type="text" name="email" id="" placeholder="Email Address or phone number" required>
                    </div>
                    <div class="pass">
                        <input type="password" name="pass" id="" placeholder="New Password" required>
                    </div>
                    <div class="forget">
                        <a href="http://">Forget your password?</a>
                    </div>
    
                    <input type="submit" value="Sign Up" name="submit" class="btn">
    
                </form>
            </div>
            
        
       
    </div>
    
</body>
</html>