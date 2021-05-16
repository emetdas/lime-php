<?php 
session_start();
$title = "Lime";
include "header.php";
include "navbar.php";
if (isset($_SESSION['login']) == 'true') {
    $wellcome = "WellCome ".$_SESSION['name'];
}
else{
    header("Location:login.php");
}
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 p-0">
          <?php include "sidebar.php";?>
        </div>
        <div class="col-md-9">
          <div id="main">
          <h2 class="heading text-center p-3"><?php echo $wellcome;?></h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Adipisci, consequuntur cumque debitis et explicabo fugit iure
              magni molestias natus perferendis placeat praesentium quasi quis
              quos saepe sed totam voluptas voluptatem!
            </p>
          </div>
        </div>
      </div>
    </div>
<?php 
include "footer.php";
?>