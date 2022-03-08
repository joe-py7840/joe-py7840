<!DOCTYPE html>
<html lang="en">
<head>
    <style>
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
        
        nav a{
            margin: 25px;
            text-decoration: none;
            color: crimson;
            padding: 10px;
            font-size: 30px;
            width: 300px;
            background-color: transparent;
            transition: ease-out .4s;
            box-shadow: inset 0 0 0 0 orange;
        }
        nav  a:hover{
            box-shadow: inset 300px 0 0 0 crimson;
            color: white;
            border-radius: 8px;
        }
        h2{
            text-align: center;

        }
        .redirect {
            color: crimson;
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav><a href="home.php">Home</a>
    <a href="programming.php">Introduction</a>
    <a href="tests.php">Tests</a>
    </nav>
    <h2>Face detection </h2>
    <p>After going through the basics of opencv, now you should be comfortable with detecting people's faces by drawing shapes around them.</p>
    <p>This can be done in two ways:<br/>
    <ul>
        <li>We can train a model to detect faces.</li>
        <li>Use a model that contains pre-trained data</li>
    </ul>
For this demonstration, we will use the second option which is much easier. 
We will download the <strong>haarcascade</strong> model and use it.  <br>

<ul>
<li>
Head over to this <a href="https://github.com/opencv/opencv/tree/master/data/haarcascades" class="redirect" target="_blank">github page</a> and download the <strong>haarcascade_frontalface_default.xml</strong> file and place it in your current working directory. <br>

</li>
<li>
Now take any picture of a person and insert into the same directory.
</li>
We import opencv as usual 

</ul>
<pre>
import cv2
</pre>
<br>
next we read the image <br>
<pre>
image = cv2.imread('barack.webp') 
</pre>
<br>
now we display the image <br>
<pre>
cv2.imshow('Barack', image)
</pre>
<br>
and of course don't forget to add the waitKey otherwise it will disappear immediately after displaying <br>
<pre>cv2.waitKey(0)</pre>
</p>
See!!! That was easy.
<p>Unfortunately you can see that the image is large and thus cannot be viewed properly</p>
<p>Therefore we apply the resize() fucntion</p>
<pre>
<p>The full code will look something like this:</p>
<pre>
import cv2
image = cv2.imread('barack.webp')
resized = cv2.resize(image,(700,700))
cv2.imshow('Barack', resized)
cv2.waitKey(0)
</pre>
</pre>
<center>
    <img src="resized.png" width="700" height="700" alt="">
</center>

<p>Now let us convert to gray scale after cv2.imread() is called.</p>
<pre>
gray = cv2.cvtColor(image,cv2.COLORBGR2GRAY)
</pre>
<p>This will allow for the haarcascade to read the image as it has been trained in gray scale.</p>
<p>After doing this, now we can comfortably introduce the xml file.</p>
<p>To do this, write the following code immediately after "import cv2"</p>
<pre>
face_cascade = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")
</pre>
<p>Then after this you have to write the following immediately after the cv2.cvtColor() function</p>
<pre>
faces = face_cascade.detecMultiSCale(gray, 1.1, 4)
</pre>
<p>
1.1 stands for scale factor and 4 is the number of minNeighbours

</p>
<p>Now we detect the face and draw a rectangle on it:</p>
<pre>
for (x, y, w, h) in faces:
    cv2.rectangle(img, (x, y), (x+w, y+h), (255, 0, 0), 2)
</pre>

</body>
</html>