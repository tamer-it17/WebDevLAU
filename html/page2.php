<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/my_style.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <title>
            My CV
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

        <div class="main">
            <div class="left">
                
                   
    
                <div class="box-1">
                    <div class="heading">
                        <div class="titleCV"> 
                            <h1>Tamer Itani</h1>
                            <p>Web Developer</p>
                            
                        </div>
                    </div>
                    <div class="box-1p">
                    <p class="p1"><i class="fa fa-user" aria-hidden="true"></i>  Male</p>
                    <p class="p1"><i class="fa fa-calendar" aria-hidden="true"></i>  May 17, 2003</p>
                    <p class="p1"><i class="fa fa-phone" aria-hidden="true"></i>  +961-76790063</p>
                    <p class="p1"><i class="fa fa-envelope" aria-hidden="true"></i>  tamer.itani@lau.edu</p>
                    <p class="p1"><i class="fa fa-location-arrow" aria-hidden="true"></i>  Beirut,Lebanon</p>
                    </div>
                </div>
            
                <hr/>
    
                <div class="box-2">
                    <div class="heading">
                        <h3>Skills</h3>
                    </div>
                    <div class="skill-list">
                        <ul>
                            <li>Computer</li>
                            <p class="skill-p">-Python,Java,Html,CSS,C</p>
                            <li>Languages</li>
                            <p class="skill-p">-Arabic,English</p>
                        </ul>
                    </div>
    
                </div>
                <hr/>
    
                <div class="box-3">
                    <div class="heading">
                        <h3>Honors</h3>
                    </div>
                    <p>Distinction list in 3rd semester 2022-2023 and 4th smester 2022-2023.</p>
                </div>
                <hr/>
    
                <div class="box-4">
                    <div class="heading">
                        <h3>Interests</h3>
                    </div>
                    <p>-I like football,music,gym...</p>
                </div>
            </div>
            <div class="right">
                <div class="AboutCV">
                    <div class="headerr">
                        <h2>About </h2>
                        <hr />
                    </div>
                    <p>A Senior Computer Science student thriving to leverage the skills and knowledge gained throughout university<br/>
                        courses and internships and looking forward to apply these in my future endeavors.
                        
                    </p>
                </div>
                <div class="Education">
                    <div class="headerr">
                        <h2>Education</h2>
                        <hr/>
                    </div>
                    <ul>
                        <li>LAU University<span>(2021 - 2024)</span></li>
                        <p>Major: Computer Science </p>
                        <p> -GPA:3.25</p>
                    </ul>
                </div>
                <div class="Experience">
                    <div class="headerr">
                        <h2>Experience</h2>
                        <hr/>
                    </div>
                    <ul>
                        <li>Twister Technologies<span>(3 months internship July - Septemper 2023) </span></li>
                        <p>Web development </p>
                        <p id="exp">-Write and develop SQL queries for multiple databases.
                            <br/>-Create Webpages for various clients.
                        </p>
                    </ul>
                    
                </div>
            </div>
        </div>
       
</body>
</html>