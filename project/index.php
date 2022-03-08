<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit; 
}
?>
<!DOCTYPE html>
<style>
     body {
        background: linear-gradient(270deg, black, white, black);
        background-size: cover; 

    } 
    h2 {
        color: white;
        background-color: black;
        margin-right: 70px;
        margin-left: 70px;
        border-radius: 8px;
        padding: 5px;
    }
    form {
        margin-top: 5%;
        padding: 30px;
        text-align: center;
        border-style: outset;
        margin-left: 650px;
        margin-right: 650px;
        height: 45vh;
        border-radius:10px
        background: linear-gradient(45deg, blue, green);
    }
    a{
        text-decoration:none;
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
</style>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index Page</title>

</head>

<body>

<form action="" method="post">
<h2>User Login</h2>

<div class="container">
<label for="email"><b>Email</b></label><br>
<input type="email" placeholder="Enter email" id="email" name="user_email" required><br/><br>

<label for="password"><b>Password</b></label><br>
<input type="password" placeholder="Enter password" id="password" name="user_password" required><br><br>

<button type="submit">Login</button>
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
Don't have an account? <a href="signup.php">Register</</a>
</div>
</form>
</body></html>