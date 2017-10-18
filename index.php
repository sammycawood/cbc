<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Home';
    include ('head.php');
    ?>
    <script src="js/home.js"></script>
    <!-- Swiper from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
</head>
<body>
<div class="view home" id="top">
    <?php include ("nav.php"); ?>
    <div class="main">
        <div id="slider">
            <div class="swiper">
                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="images/File_009.jpg" alt="Slide 1"></div>
                        <div class="swiper-slide"><img src="images/File_006.jpeg" alt="Slide 2"></div>
                        <div class="swiper-slide"><img src="images/File_004.jpeg" alt="Slider 3"></div>
                        <div class="swiper-slide"><img src="images/File_001.jpeg" alt="Slider 4"></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <a href="gallery.php"><div class="button"><p>View Gallery</p></div></a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <section id="ourStory">
            <div class="content">
                <h2>Our Story</h2>
                <div class="image img-shadow-effect"><img src="images/EXAMPLE1.jpg" alt="pic1"></div>
                <p>Cawood Building Co was established in 1985 but its roots began many years earlier.
Bill Cawood, President, is a fourth generation building following his father, grandfather
and great-grandfather. After graduating from Michigan State University in Building Construction
Management in 1984, he joined his brother and father in business building custom homes in the greater
Lansing area. Bill continues to build custom homes and renovations today, incorporating the values
instilled from his family: Honesty, Integrity and Quality</p>
            </div>
        </section>
        <section id="cbcNumbers">
            <div>
                <p class="largeText">Proudly serving the Greater Lansing Community</p>
                <div class="stat">
                    <h2 id="companyYears">96</h2>
                    <p class="largeText">Years</p>
                </div>
                <div class="stat">
                    <h2>4</h2>
                    <p class="largeText">Generations</p>
                </div>
            </div>
        </section>
        <div class="divider"></div>
        <section id="buildingProcess">
            <div class="content">
                <h2>Building Process</h2>
                <div class="image img-shadow-effect"><img src="images/EXAMPLE1.jpg" alt="pic1"></div>
                <p>Cawood Building Co. strives to create an enjoyable, hassle-free
                    journey for the vision of your home by paying close attention to
                     detail and providing boundless possibilities of customization
                     during the planning process. We want to incorporate your
                     lifestyle needs into the design.<br><br>
                 Bill maintains a manageable workload to provide his clients with
                     an intimate and fine-tuned experience, guaranteeing the personal touch. He
                     is on site consistently throughout the process, monitoring the project’s
                     development until its completion.<br><br>
                 To create our homes, we use reputable subcontractors with
                     longstanding relationships to our company. Alongside this, we
                     use premium-level materials in all of our work, whether it’s a
                     remodel, an addition, or a new home build. We want to create
                     the utmost best outcome for you.</p>
             </div>
        </section>
    </div>
    <?php include ("footer.php"); ?>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
</body>
</html>
