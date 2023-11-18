<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
    if (isset($_GET["logout"])) {
        session_destroy();
        header("location:../index.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/my_style.css"> 
        
        
        <title>
            My Contact
        </title>
    </head>
    <body>
        <div class="row header rtl-menu" >
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
              <div id="logout">
                <a href="?logout=true">Logout</a>
            </div>
              <div id="user-welcome">welcome <?php echo $_SESSION["username"]; ?></div>
        </div>
        <div class="title">
            <span>Contact Info</h1>
        </div>
        <div class="box-1p">
            <p class="p1">Gender: Male</p>
            <p class="p1">Date of Birth: May 17, 2003</p>
            <p class="p1">Phone: +961-76790063</p>
            <p class="p1">Email: tamer.itani@lau.edu</p>
            <p class="p1">Address: Beirut,Lebanon</p>
            </div>
        </div>
</body>
</html>