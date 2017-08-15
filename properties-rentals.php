<?php
$properties = [];
array_push($properties, array("name" => "First Property", "address" => "123 Main St", "available" => true));
array_push($properties, array("name" => "Second Property", "address" => "456 Niam Ave", "available" => false));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Properties & Rentals';
    include_once('head.php');
    ?>
</head>
<body>
<div class="view properties-rentals">
    <?php include_once("nav.php"); ?>
    <div class="main">
        <h2 class="title">Properties &amp; Rentals</h2>
        <div class="flexWrap">
            <?php
            $html = "";
            foreach ($properties as $prop) {
                $html .= "<div class='property'>";
                $html .= "<h3>$prop[name]</h3>";
                $html .= "<p class='largeText'>$prop[address]</p>";
                if ($prop['available']) {
                    $html .= "<div class='available avail'><p>Available</p></div>";
                } else {
                    $html .= "<div class='unavailable avail'><p>Unavailable</p></div>";
                }
                $html .= "</div>";
            }
            echo $html;
            ?>
        </div>
    </div>

    <?php include_once("footer.php"); ?>
</div>
</body>
</html>
