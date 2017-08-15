<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Gallery';
    include ('head.php');
    ?>
    <script src="js/gallery.js"></script>
</head>
<body>

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <img src="images/File_000.jpeg" alt="Pic 1">
      </div>
      <div class="arrow left" id="leftArrow"></div>
      <div class="arrow right" id="rightArrow"></div>
    </div>
</div>

<div class="view gallery">
    <?php include_once("nav.php"); ?>
    <div class="main">
        <h2 class="title">Gallery</h2>
        <div class="flexWrap content">
            <div class="galImg" id="0"><div class="cover no-select"><p>View</p></div><img src="images/File_000.jpeg" alt="Gallery 1"></div>
            <div class="galImg" id="1"><div class="cover no-select"><p>View</p></div><img src="images/File_001.jpeg" alt="Gallery 2"></div>
            <div class="galImg" id="2"><div class="cover no-select"><p>View</p></div><img src="images/File_002.jpeg" alt="Gallery 3"></div>
            <div class="galImg" id="3"><div class="cover no-select"><p>View</p></div><img src="images/File_006.jpeg" alt="Gallery 4"></div>
            <div class="galImg" id="4"><div class="cover no-select"><p>View</p></div><img src="images/File_004.jpeg" alt="Gallery 5"></div>
            <div class="galImg" id="5"><div class="cover no-select"><p>View</p></div><img src="images/File_005.jpeg" alt="Gallery 6"></div>
            <div class="galImg" id="6"><div class="cover no-select"><p>View</p></div><img src="images/File_003.jpeg" alt="Gallery 7"></div>
            <div class="galImg" id="7"><div class="cover no-select"><p>View</p></div><img src="images/File_007.jpeg" alt="Gallery 8"></div>
            <div class="galImg" id="8"><div class="cover no-select"><p>View</p></div><img src="images/File_011.jpg" alt="Gallery 9"></div>
            <div class="galImg" id="9"><div class="cover no-select"><p>View</p></div><img src="images/File_009.jpg" alt="Gallery 10"></div>
            <div class="galImg" id="10"><div class="cover no-select"><p>View</p></div><img src="images/File_010.jpg" alt="Gallery 11"></div>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</div>
</body>
</html>
