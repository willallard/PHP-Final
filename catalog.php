<?php 


$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "tab1") {
        $pageTitle = "TAB 1";
        $section = "tab1";
    } else if ($_GET["cat"] == "tab2") {
        $pageTitle = "TAB 2";
        $section = "tab2";
    } else if ($_GET["cat"] == "tab3") {
        $pageTitle = "TAB 3";
        $section = "tab3";
    }
}

include("inc/header.php"); ?>


    
    <div class="container">
        
        
        <div class="row">
<div class="col-md-6 col-md-offset-3">
<h1 class="text-center"><strong><?php echo $pageTitle; ?></strong></h1>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        </div>
        </div>
        
       
        
    </div>


<?php include("inc/footer.php"); ?>