<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Gallery';
    include ('head.php');
    ?>
    <script src="js/gallery.js"></script>
    <!-- Swiper from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
</head>
<body>
<?php
    // Pictures in order
    $pics = [
        "images/File_000.jpeg",
        "images/File_001.jpeg",
        "images/File_002.jpeg",
        "images/File_006.jpeg",
        "images/File_004.jpeg",
        "images/File_005.jpeg",
        "images/File_003.jpeg",
        "images/File_007.jpeg",
        "images/File_011.jpg",
        "images/File_009.jpg",
    ];
?>

<!-- The Modal -->
<div id="cbcModal" class="modal">
    <!-- The Close Button -->
    <span class="close">&times;</span>
    <!-- Modal Content (The Image) -->
    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
                $galleryHtml = '';
                $count = 0;
                foreach ($pics as $pic) {
                    $galleryHtml .= "<div class='swiper-slide'><img src='$pic' alt='Slide ".($count + 1)."'></div>";
                    $count += 1;
                }
                echo $galleryHtml;
            ?>
        </div>
        <!-- If we need pagination
        <div class="swiper-pagination"></div>-->

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<div class="view gallery">
    <?php include_once("nav.php"); ?>
    <div class="main">
        <h2 class="title">Gallery</h2>
        <div class="flexWrap content">
            <?php
                $html = '';
                $count = 0;
                foreach ($pics as $pic) {
                    $html .= "<div class='galImg' id='$count'>".
                    "<div class='cover no-select'><p>View</p></div><img src='$pic' alt='Gallery ".($count + 1)."'></div>";
                    $count += 1;
                }

                echo $html;
            ?>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
</body>
</html>
