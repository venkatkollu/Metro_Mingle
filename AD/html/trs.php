<?php
     session_start();

     include("db.php");

     if($_SERVER['REQUEST_METHOD'] == "POST")
     {
        $username =$_POST ['uname'];
        $address =$_POST ['address'];
        $Gender =$_POST ['gender'];
        $Dateofbirth =$_POST ['dob'];
        $Email =$_POST ['Email'];
        $password =$_POST ['pass'];

        if(!empty($Email)&& !empty($password)&& !is_numeric($Email))
        {
            $query = "insert into form(uname,address,gender,dob,Email,pass) values ('$username','$address','$Gender','$Dateofbirth','$Email','$password' )";

            mysqli_query($con,$query);

            echo "<script typr = 'text/javascript'> alret('Sucessfully Registered')</script>";
        }
        else 
        {
            echo "<script typr = 'text/javascript'> alret('please enter valid information')</script>";
        }
     }
?>



<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            width: 350px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }
        input[type=text], input[type=password], input[type=email], input[type=date] {
            width: 90%;
            padding: 12px;
            margin: 3px 0 20px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=submit] {
            background-color: #96f8f5;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register here</h1>
    <form method="POST">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required>

        <label for="gender"><b>Gender</b></label>
        <input type="text" placeholder="Enter Gender" name="gender" required>

        <label for="dob"><b>Date of Birth</b></label>
        <input type="date" name="dob" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="Email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>

        

        <input type="submit" value="sda1">
    </form>
        <span>if registration done</span>
        <a href="loginpage.php">login here</a>
      
</body>
</html>