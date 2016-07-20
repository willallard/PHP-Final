<?php 
$pageTitle = "Personal Media Library";

include("inc/header.php");

?>

      <!-- Content -->
      <div class="container">
          


 



<div class="row">

<?php 
    include("connection.php");
        
    foreach ($MyShapes as $item) {
    echo "<div class='col-md-6 col-md-offset-3 img-responsive text-center'> <img class='image' src='img/media/"
        .$item["image"]
        ."' alt=' " 
        . $item["shape"] 
        . "' /> </div>
        <br><div class='col-md-6 col-md-offset-3 text-center'> " 
        . $item["color"]
        . " </div>
        <br><div class ='col-md-6 col-md-offset-3 text-center'> " 
        . $item["shape"]
        . " </div>";
} ?>

          </div>










      </div>          
      
<?php include("inc/footer.php"); ?>