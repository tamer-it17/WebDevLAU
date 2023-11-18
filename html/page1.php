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
            My HomePage
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
            <div id="user-welcome">welcome <?php echo "welcome"$_SESSION["username"]; ?></div>
        </div>
        <div class="title">
            <span>HomePage</h1>
        </div>
        <div class="about">
            <p>This is assignment 4 where it is going to be about a dynamic portfolio with a dynamic gallery.</p>
        </div>
</body>
</html>