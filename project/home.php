<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .logout {
            text-decoration: none;
            color: crimson;
            padding: 10px;
            font-size: 30px;
            width: 135px;
            background-color: transparent;
            transition: ease-out .4s;
            box-shadow: inset 0 0 0 0 yellow;
        }
        .logout:hover {
            box-shadow: inset 135px 0 0 0 green;
            color: white;
        }
        .content {
            margin left: 20%;
        }
        h1, h3 {
  
            font-family: sans-serif;
            margin-top: 3.5%;
            text-align: center;
        }
        span  {
            border-radius: 8px;
            padding: 4px;
            color: white;
            background-color: black;

        }
     body {
            margin-top: 1.5%;
            background: lightblue;
            animation: mymove 5s infinite;
        }
        @keyframes mymove {
  from {background-color: skyblue;}
  to {background-color: lightgreen;}

}
        nav a{
            margin: 25px;
            text-decoration: none;
            color: crimson;
            padding: 10px;
            font-size: 30px;
            width: 300px;
            background-color: transparent;
            transition: ease-out .4s;
            box-shadow: inset 0 0 0 0 yellow;
        }
        nav  a:hover{
            box-shadow: inset 300px 0 0 0 green;
            color: white;
            border-radius: 8px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav><a href="programming.php">Programming<Programming</a>
    <a href="tests.php">Tests</a>
 <a href="contact.php">Contact us</a>
   </nav>
    <h1>Welcome to <span class="welcome">TechRepublic</span></h1>
    <h3>Your perfect programming partner</h3>

<div class="content">
    <h2>Requirements:</h2>
    <ul>
        <li>Basics of python programming</li>
        <li>PC</li>
        <li>Commitment</li>
    </ul>
    <h2>What you'll learn:</h2>
    <ul>
        <li>In depth learning of Open Source Computer Vision in python</li>

        <li>Tests to examine what you've learnt</li>
    </ul>

</div><br><br><br><br>
<div class="logout">
    <a href="logout.php">Logout</a>
</div>


</body>
</html>