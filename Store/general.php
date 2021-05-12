<?php
session_start();
$title = "General";
include 'header.php';
include 'navbar.php';
?>
<div class="container-fluid m-0">
  <div class="row">
    <div class="col-md-3 p-0">
      <?php include "sidebar.php"; ?>
    </div>
    <div class="col-md-9">
      <div id="main">
        <h2 class="text-center pt-3">General</h2>
        <form class="w-85 m-auto" method="POST">
          <div class="mb-2">
            <label for="order-no" class="form-label">Order No</label>
            <input type="text" id="order-no" placeholder="Order No" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="inspector" class="form-label">Inspector</label>
            <input type="text" id="inspector" placeholder="Inspector" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="date" class="form-label">Date</label>
            <input type="date" id="date" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="vendor" class="form-label">Vendor </label>
            <input type="text" id="vendor" placeholder="Vendor" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="style" class="form-label">Style </label>
            <input type="text" id="style" placeholder="Style" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="inspection-location" class="form-label">Inspection Location </label>
            <input type="text" id="inspection-location" placeholder="Inspection Location" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="job" class="form-label">Job</label>
            <input type="text" id="job" placeholder="Job" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="construction" class="form-label">Construction </label>
            <input type="text" id="construction" placeholder="Construction" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="order-qty" class="form-label">Order Qty. </label>
            <input type="number" id="order-qty" placeholder="Order Qty." class="form-control" />
          </div>
          <div class="mb-2">
            <label for="content" class="form-label">Content </label>
            <input type="text" id="content" placeholder="Content" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="garment-wash" class="form-label">Garment wash </label>
            <input type="text" id="garment-wash" placeholder="Garment wash" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="width" class="form-label">Width</label>
            <input type="text" id="width" placeholder="Width" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="garment-factory" class="form-label">Garment Factory</label>
            <input type="text" id="garment-factory" placeholder="Garment Factory" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="weight-B-W" class="form-label">Weight B/W </label>
            <input type="text" id="weight-B-W" placeholder="Weight B/W" class="form-control" />
          </div>
          <div class="mb-2">
            <label for="buyer-code" class="form-label"> Buyer Code </label>
            <input type="text" id="buyer-code" placeholder="Buyer Code" class="form-control" />
          </div>

          <button type="submit" class="btn bg-primary mb-3">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>