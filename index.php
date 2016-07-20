<?php 
$pageTitle = "Personal Media Library";

include("inc/header.php");

?>

      <!-- Content -->
      <div class="container">
          

<div class="row">
<div class="col-md-6 col-md-offset-3">
<h1 class="text-center"><strong>HERE ARE SOME SHAPES</strong></h1>
<h5 class=text-center>THEY ARE COMING FROM A DATABASE</h5>
</div> 





<?php 
    include("connection.php");
        
    foreach ($MyShapes as $item) {
    echo "<div class='col-md-6 col-md-offset-3 img-responsive text-center'> <img class='image' src='img/media/"
        .$item["image"]
        ."' alt=' " 
        . $item["shape"] 
        . "' /> </div>
        <div class='col-md-6 col-md-offset-3 text-center'> " 
        . $item["color"]
        . " </div>
        <div class ='col-md-6 col-md-offset-3 text-center'> " 
        . $item["shape"]
        . " </div>";
} ?>

          </div>






<h1 class="text-center bottompush"><strong>HOW COOL IS THAT?!</strong></h1>





      </div>          
      
<?php include("inc/footer.php"); ?>