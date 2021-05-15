<?php
session_start();
$title = "Summary";
include "header.php";
include "navbar.php";
?>
<div class="container-fluid m-0">
    <div class="row">
        <div class="col-md-3 p-0">
            <?php include "sidebar.php"; ?>
        </div>
        <div class="col-md-9">
            <div id="main">

            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>