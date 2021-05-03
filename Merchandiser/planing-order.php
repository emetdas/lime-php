<?php
include "header.php";
include "navbar.php"
?>
  <div class="container-fluid m-0">
    <div class="row">
      <div class="col-md-3 p-0">
        <?php include "sidebar.php";?>
      </div>

      <div class="col-md-9">
        <div id="main">
        <h2 class="text-center pt-3">Order planning</h2>
          <form method="post" class="w-50 offset-3">
            <div class="input-group mb-3">
              <span class="input-group-text">All material receved date</span>
              <input type="datetime-local" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Cutting start date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Cutting complete date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Sewing start date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Sewing complete date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Finishing start date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Finishing date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Packing start date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Packing complete date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Inline inspection date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Free final inspection date</span>
              <input type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Final inspection date</span>
              <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn bg-primary mb-3">
              submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
include "footer.php";
?>