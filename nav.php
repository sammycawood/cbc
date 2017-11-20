<?php
    define('Site_Url', 'http://cawoodbuildingco.com/');
    $links = [
        Site_Url . '#top',
        Site_Url . '#ourStory',
        Site_Url . '#buildingProcess',
        Site_Url . 'gallery',
    ]
?>

<header>
    <nav id="mainNav">
        <h1 class="logo left"><a href="http://cawoodbuildingco.com/"><img src="graphics/CBCLogo.png" alt="Cawood Building Co."></a></h1>
        <ul class="menu right">
            <a href="<?php echo $links[0]; ?>"><li id="topMenu" <?php if ($page_title == 'Home') echo "class='active'"; ?>>Home</li></a>
            <a href="<?php echo $links[1]; ?>"><li id="ourStoryMenu">Our Story</li></a>
            <a href="<?php echo $links[2]; ?>"><li id="buildingProcessMenu">Building Process</li></a>
            <a href="<?php echo $links[3]; ?>"><li <?php if ($page_title == 'Gallery') echo "class='active'"; ?>>Gallery</li></a>
        </ul>
        <p class="mobileIconContainer right"><a href="javascript:void(0);" id="mobileIcon"><i class="material-icons">menu</i></a></p>
    </nav>
</header>
<nav class="nav" id="mobileNav">
    <div id="mobileNavContainer">
        <ul class="menu">
            <a href="<?php echo $links[0]; ?>"><li id="topMenu" <?php if ($page_title == 'Home') echo "class='active'"; ?>>Home</li></a>
            <a href="<?php echo $links[1]; ?>"><li id="ourStoryMenu">Our Story</li></a>
            <a href="<?php echo $links[2]; ?>"><li id="buildingProcessMenu">Building Process</li></a>
            <a href="<?php echo $links[3]; ?>"><li <?php if ($page_title == 'Gallery') echo "class='active'"; ?>>Gallery</li></a>
            <hr>
            <a href="tel:517-349-9450"><li><i class="material-icons">phone</i> 517-349-9450</li></a>
            <a href="mailto:CawoodBuilding@att.net"><li><i class="material-icons">email</i> CawoodBuilding@att.net</li></a>
        </ul>
    </div>
</nav>
