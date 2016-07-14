<?php 
include("inc/data.php");

$pageTitle = "Full Catalog";
$section - null;

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "books") {
        $pageTitle = "BOOKS";
    }   else if ($_GET["cat"] == "movies") {
        $pageTitle = "MOVIES";
    }   else if ($_GET["cat"] == "music") {
        $pageTitle = "MUSIC";
    }
}

include("inc/header.php"); ?>
      
      <!-- Content -->
      <div class="container">
        <div class="section catalog page">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center"><?php echo $pageTitle; ?></h1>
          </div>
            <div class="col-md-12">
                 <ul class="items">
                     <?php 
                     foreach($catalog as $item) {
                        echo "<li><a href='#'><img src='" 
                        . $item["img"] . "' alt='"  
                        . $item["title"] . "' />"
                        . "<p>View Details</p>"
                        "</a></li>"; 
                     }
                     ?>
                     
                </ul> 
            </div>
            </div>
          </div>
      </div> 
      
<?php include("inc/footer.php"); ?>