<?php
    define('Site_Url', 'http://cawoodbuildingco.com/');
    $links = [
        Site_Url . '#top',
        Site_Url . '#ourStory',
        Site_Url . '#buildingProcess',
        Site_Url . 'gallery',
        Site_Url . 'properties-rentals'
    ]
?>

<header>
    <nav id="mainNav">
        <h1 class="logo left"><a href="http://cawoodbuildingco.com/"><img src="graphics/CBCLogo.png" alt="Cawood Building Co."></a></h1>
        <ul class="right">
            <a href="<?php echo $links[0]; ?>"><li <?php if ($page_title == 'Home') echo "class='active'"; ?>>Home</li></a>
            <a href="<?php echo $links[1]; ?>"><li>Our Story</li></a>
            <a href="<?php echo $links[2]; ?>"><li>Building Process</li></a>
            <a href="<?php echo $links[3]; ?>"><li <?php if ($page_title == 'Gallery') echo "class='active'"; ?>>Gallery</li></a>
            <a href="<?php echo $links[4]; ?>"><li <?php if ($page_title == 'Properties & Rentals') echo "class='active'"; ?>>Properties &amp; Rentals</li></a>
        </ul>
        <p class="mobileIconContainer right"><a href="javascript:void(0);" id="mobileIcon">&#9776;</a></p>
    </nav>
</header>
<nav class="nav" id="mobileNav">
    <div id="mobileNavContainer">
        <ul>
            <a href="<?php echo $links[0]; ?>"><li <?php if ($page_title == 'Home') echo "class='active'"; ?>>Home</li></a>
            <a href="<?php echo $links[1]; ?>"><li>Our Story</li></a>
            <a href="<?php echo $links[2]; ?>"><li>Building Process</li></a>
            <a href="<?php echo $links[3]; ?>"><li <?php if ($page_title == 'Gallery') echo "class='active'"; ?>>Gallery</li></a>
            <a href="<?php echo $links[4]; ?>"><li <?php if ($page_title == 'Properties & Rentals') echo "class='active'"; ?>>Properties &amp; Rentals</li></a>
        </ul>
    </div>
</nav>
