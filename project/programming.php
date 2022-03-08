<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html{
            background-size: cover;
            background: linear-gradient(135deg,white,whitesmoke, lightblue,lightgreen, yellow, orange);

        }
        .comp{
            background-color: crimson;
            color: white;
            padding:12px;
        }
        .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.video {
    text-align: center;
}

.dropdown:hover .dropdown-content {
  display: block;
}
        .chal{
            text-align: center;
        }
        body {
            background-size: cover;
            background: linear-gradient(135deg,white,whitesmoke, lightblue,lightgreen, yellow, orange);

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
        .play{
            text-align: center;
        }
        h2{
            text-align: center;
        }
        #frme{
            display: block;  
            margin-left: auto;  
            margin-right: auto;   
            padding: 5px;  
        }
        #img {
            display: block;  
            margin-left: auto;  
            margin-right: auto;    
            padding: 5px;  
        }
        pre {
            display: inline-block; 
            padding: 10px !important;
            margin: 0 0 10px;
            font-size: 16px !important;
            color: #fff !important;
            background-color: #2c2c2c !important;
            border: 1px solid #d8d8d8 !important;
            border-radius: 8px !important;
        }
        .face {
            textdecoration: none;
            background-color: lightyellow !important;
            padding: 4px;
            border-radius: 8px !important;
            color: crimson;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav><a href="home.php">Home</a>
    <a href="tests.php">Tests</a>
    </nav>
    <h2>Introduction</h2>
    <p>Hi, and welcome to this opencv python self-paced learning platform.</p>
    <p>OpenCV was started at Intel in 1999 by Gary Bradsky, and the first release came out in 2000. </p> 
    <p>Vadim Pisarevsky joined Gary Bradsky to manage Intel's Russian software OpenCV team. In 2005, OpenCV was used on Stanley, the vehicle that won the 2005 DARPA Grand Challenge. </p> Later, its active development continued under the support of Willow Garage with Gary Bradsky and Vadim Pisarevsky leading the project. OpenCV now supports a multitude of algorithms related to Computer Vision and Machine Learning and is expanding day by day.</p>
    <h2>Opencv-Python</h2>
    <p>

OpenCV-Python is a library of Python bindings designed to solve computer vision problems.</p>
<p>Prior knowledge of Python and Numpy is recommended as they won't be covered in this guide. Proficiency with Numpy is a must in order to write optimized code using OpenCV-Python.</p>

<h2>Getting Started</h2>
<p>We start by installing OpenCV-Python in our system with the following code:</p>
<pre>pip install opencv-python</pre>
<p>This command will install OpenCV and the necessary libraries such as numpy and matplotlib</p>

<h2>Importing opencv</h2>
<p>Now open your favorite text editor and type the following command:</p>
<pre>import cv2</pre>
<p>This command is used to import the OpenCV library</p>
<p>One important skill to have when dealing with OpenCV is knowing how to draw shapes.</p>
<p>so let us draw a line first</p>

<pre>
import numpy as np
blank_image = np.zeros((250, 250, 3), dtype = "np.uint8")
</pre>
<p>np.zeros will create a blank image which we will use to draw our shapes</p>
<p>The numbers in brackets i.e (250, 250, 3) stand for width, height and color channels(blue, green and red) respectively.</p>
<p>The data type uint8 is an 8-bit integer that represents values from 0-255. Note that each color channel has variations from 0-255.</p>
<p>To draw a line, we'll use the cv2.line() method</p>
<pre>
line = cv2.line(blank_image,(0, 0), (250, 250), (255, 0, 0), 2)
</pre>
<p>This will draw a blue line diagonally from (0, 0) to (250, 250). This line will have a thickness of 2.</p>
<p>To display the line, all we have to do is type:</p>
<pre>cv2.imshow("Line", line)</pre>
and then pass a <pre>cv2.waitKey(0)</pre> to give it unlimited duration.</p>
<p>Full code:</p>
<pre>
import cv2
import numpy as np

blank_image = np.zeros((250, 250, 3), dtype="uint8")
line = cv2.line(blank_image, (0, 0), (250, 250), (255, 0 , 0), 2)
cv2.imshow("Line", line)
cv2.waitKey(0)
</pre>
<img src="scr1.png" alt="" id="img">
<span class="play"><p>You can play around with the values to create different lines</p>
</span>

<br><br><br>
<p>Now that you know how to create a line, it should be pretty simple to draw a rectangle</p>
<p>you should have the basic knowledge of the properties of a rectangle such</p>
<p>If you encounter any difficulties, I have a video on the same </p>
<center><video src="0001-5000.mp4" controls width="1000px"  class="video" poster="index.png"></video>
</center>
<h2>Rectangle</h2>
    <p>Now let us look at draw a rectangle</p>
<P>by now you are familiar with drawing a line so a reactangle should be easy enough</P>
<pre>
import cv2
import numpy as np

blank_image = np.zeros((250, 250, 3), dtype="uint8")
rectangle = cv2.rectangle(blank_image, (0, 0), (125, 125), (0, 255, 0), 2)
cv2.imshow('Rectangle', rectangle)
cv2.waitKey(0)

</pre>
<p>and the image will be as follows:</p>
<img src="rect.png"id="img" alt="">

<p><strong>Note that you should know the properties of these shapes so that you can draw them.</strong></p>
<p>That's all for drawing a rectangle.</p>
<br><br>
<h2>Circle</h2>
<p>To draw a circle you'll need the blank image which we'll draw the circle on, the centre co-ordinates-which in our case we'll use 125-, the radius of the circle,<br> the color channel and the thickness.</p>
<pre>
import cv2
import numpy as np

blank_image = np.zeros((250, 250, 3), dtype="uint8")
circle = cv2.circle(blank_image,(125, 125), 100,(0, 0, 255), 2)
cv2.imshow('circle', circle)
cv2.waitKey(0)
</pre>
<img src="circle.png" id ="img"alt="">
<span class="play"><p>We have used a radius of 100 units.</p>

</span>
<p>Note that you can also fill the circle by inserting a -1 thickness, for example:</p>

<pre>
import cv2
import numpy as np

blank_image = np.zeros((250, 250, 3), dtype="uint8")
circle = cv2.circle(blank_image,(125, 125), 100,(0, 0, 255), -1)
cv2.imshow('circle', circle)
cv2.waitKey(0)
</pre>
<img src="filled.png" id="img" alt="">
<p>The same can be done for a rectangle</p>
<br><br>
<p class="chal"><strong>Are you up for your first challenge?</strong></p>
<p>Try and draw an ellipse and then compare with the one provided down below.</p>
<center><div class="dropdown">
  <span class="comp"><italic>Compare here</italic></span>
  <div class="dropdown-content">
    <pre>
    import cv2
    import numpy as np

    blank_image = np.zeros((250, 250, 3), dtype="uint8")
    ellipse = cv2.ellipse(blank_image,(125, 125),(100, 50), 45, 0, 360, (0, 255, 255), 2)
    cv2.imshow('ellipse', ellipse)
    cv2.waitKey(0)
    </pre>
    <img src="ellipse.png" id="img" alt="">
  </div>
</div></center>
<br><br><br>

<p>Were you able to draw an ellipse?</p>
<p>If you were successful, congratulations! You can now start <a href="face.php" class="face">the next chapter</a> on face detection.<br>If not, please spend some time doing some reviews on the same before proceeding</p>

</body>
</html>