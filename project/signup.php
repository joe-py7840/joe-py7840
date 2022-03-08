<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        form {
            text-align: center;
            margin-top: 5%;
            border-radius:10px;
            border-style: outset;
            margin-right: 650px; 
            margin-left: 650px;
            height: 45vh;
            padding-top: 2%
            
    
        }
        button {
        cursor: pointer;
        width: 70px;
        height: 30px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 0 0 yellow;
        transition: ease-out .3s;
        box-shadow: inset 0 0 0 yellow;

    }
    button:hover {
        box-shadow: inset 70px 0 0 0 crimson;
    }
        success_message{
            color: green;
        }
    </style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Form</title>

</head>

<body>
    

<form action="" method="post">


<div class="container">
<label for="username"><b>Username</b></label><br>
<input type="text" placeholder="Enter username" id="username" name="username" required><br><br>

<label for="email"><b>Email</b></label><br>
<input type="email" placeholder="Enter email" id="email" name="user_email" required><br><br>

<label for="password"><b>Password</b></label><br>
<input type="password" placeholder="Enter password" id="password" name="user_password" required><br><br>

<button type="submit">Sign Up</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" >
Already have an account? <a href="index.php">Login</a>
</div>
</form>
</body></html>