<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/my_style.css"> 
        
        
        <title>
            My Gallery
        </title>
    </head>
    <body>
        <div class="row header center-menu" >
            <div id="dropdown">
                <span><i class='icon'></i>MENU</span>            
                <div class="dropdown-content">
                    <ul>
                        <a href="page1.php">
                        <li class="dropdown-item">
                            Page 1
                        </li>
                        </a>
                        <a href="page2.php">
                        <li class="dropdown-item">
                            Page 2
                        </li>
                        </a>
                        <a href="page3.php">
                        <li class="dropdown-item">
                            Page 3
                        </li>
                        </a>
                        <a href="page4.php">
                            <li class="dropdown-item">
                                Page 4
                            </li>
                        </a>
                    </ul>
                </div>
              </div>
        </div>
        <div class="title">
            <span>Gallery</h1>
        </div>
        <div class="gallery">
            <div class="imgs">
                <a href="#img1">
                    <img src="../images/image1.jpeg">
                </a>
            </div>
            <div class="imgs">
                <a href="#img2">
                    <img src="../images/image2.jpeg">
                </a>
            </div>
            <div class="imgs">
                <a href="#img3">
                    <img src="../images/image3.jpeg">
                </a>
            </div>
        </div>
    
        <!--images with x button-->
        <div id="img1" class="overlay">
            <a href="#" class="close-btn">&times;</a>
            <img src="../images/image1.jpeg" class="overlay-img">
        </div>
        <div id="img2" class="overlay">
            <a href="#" class="close-btn">&times;</a>
            <img src="../images/image2.jpeg" class="overlay-img">
        </div>
        <div id="img3" class="overlay">
            <a href="#" class="close-btn">&times;</a>
            <img src="../images/image3.jpeg" class="overlay-img">
        </div>

</body>
</html>