<!DOCTYPE html>
<html lang="en">
<head>
    <style>

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
    <title>Test yourself</title>
</head>
<body>
<nav><a href="home.php">Home<Programming</a>
    <a href="programming.php">Programming</a>
    <!-- <a href="security.php">Cyber Security</a> -->
    <a href="logout.php" class="logout">Logout</a></nav>
    <form action="" name="test" id="test">
        <div>
            <h4>1. What does the import cv2 statement do?</h4>
            <p><input type="radio" name="question1" value="scipy">A. Imports the SCipy package for numerical processing</p>
            <p><input type="radio" name="question1" value="numpy">B. Imports the NumPy package for numerical processing</p>
            <p><input type="radio" name="question1" value="opencv">C. Imports the OpenCV python binding</p>
            <p><input type="radio" name="question1" value="display">D. Displays an image to the screen</p>
        </div>
        <div>
            <h4>2. Opencv stores RGB pixels in what order?</h4>
            <p><input type="radio" name="question2" value="bgr">A. BGR</p>
            <p><input type="radio" name="question2" value="gbr">B. GBR</p>
            <p><input type="radio" name="question2" value="brg">C. BRG</p>
            <p><input type="radio" name="question2" value="rbg">D. RBG</p>
        </div>
        <div>
            <h4>3. Which code is correct for reading an image?</h4>
            <p><input type="radio" name="question3" value="imgread">A. cv2.imgread</p>
            <p><input type="radio" name="question3" value="imread">B. cv2.imread</p>
            <p><input type="radio" name="question3" value="imageread">C. cv2.imageread</p>
            <p><input type="radio" name="question3" value="srcread">D. cv2.srcread</p>
        </div>
        <div>
            <h4>4. The cv2.line() function requires the following parameters except?</h4>
            <p><input type="radio" name="question4" value="image">A. image</p>
            <p><input type="radio" name="question4" value="start">B. start_point</p>
            <p><input type="radio" name="question4" value="end">D. end_point</p>
            <p><input type="radio" name="question4" value="depth">D. depth</p>
        </div>
        <input type="submit" value="submit" onclick="check()">
    </form>
    <script>
  function check() {
        var c=0;
        var q1=document.test.question1.value;
        var q2=document.test.question2.value;
        var q3=document.test.question3.value;
        var q4=document.test.question4.value;
        if (q1=="opencv") {c++}
        if (q2=="bgr") {c++}
        if (q3=="imread") {c++}
        if (q4=="depth") {c++}
        document.write("Your score is " + c);
    }
    </script>
  
</body>
</html>