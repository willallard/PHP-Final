<?php

include("connection.php");

<ul>
<?php 
    include("connection.php");
    foreach ($MyShapes as $item) {
    echo "<li><img class='image' src='img/media/"
        .$item["image"]
        ."' alt='" 
        . $item["shape"] 
        . "' /> <br> <div class='name'>" 
        . $item["color"]
        . " </div><br><div class='content'>" 
        . $item["shape"]
        . "</div> </li>";
} ?>

</ul>