<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
    if (isset($_GET["logout"])) {
        session_destroy();
        header("location:../index.php");
    }
    function readGalleryFile($filename){
    $gallery = [];
    if (file_exists($filename)) {
        $gallery = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    return $gallery;
    }

    $galleryFileName = "../txtfiles/gallery.txt";
    $galleryImages = readGalleryFile($galleryFileName);
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/my_style.css"> 
        
        
        <title>
            My Gallery
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
            <span>Gallery</h1>
        </div>
        <div class="gallery">
        <?php foreach ($galleryImages as $image) : ?>
            <div class="imgs">
                <a href="#<?php echo $image; ?>">
                    <img src="../images/<?php echo $image; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php foreach ($galleryImages as $image) : ?>
        <div id="<?php echo $image; ?>" class="overlay">
            <a href="#" class="close-btn">&times;</a>
            <img src="../images/<?php echo $image; ?>" class="overlay-img">
        </div>
    <?php endforeach; ?>

</body>
</html>