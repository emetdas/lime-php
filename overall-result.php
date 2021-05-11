<?php
session_start();
$title = "Overall Result";
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
        <h2 class="text-center pt-3">Overall Result</h2>

        <form action="post" class="m-auto pt-3">

          <div class="input-group d-flex justify-content-between form-label mb-3">
            <label for="overall-result" class="mx-3">Overall Result :</label>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="overall-result" id="overall-result-pass" value="pass">
              <label class="form-check-label" for="overall-result-pass">Pass</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="overall-result" id="overall-result-fail" value="fail">
              <label class="form-check-label" for="overall-result-fail">Fail</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="overall-result" id="overall-result-pending" value="fail">
              <label class="form-check-label" for="overall-result-pending">Pending</label>
            </div>
          </div>
          <textarea placeholder="Remark:" class="form-control" id="" name="" rows="8" cols="100">
          </textarea>
          <div class="mt-3">
            <button type="submit" class="btn bg-primary mb-3">
              Submit
            </button>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>