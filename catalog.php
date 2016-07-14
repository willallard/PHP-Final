<?php 
$pageTitle = "Full Catalog";

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
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center"><?php echo $pageTitle; ?></h1>
          </div>
          </div>
      </div> 
      
<?php include("inc/footer.php"); ?>