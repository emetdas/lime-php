<?php
session_start();
$title = "Checking Item";
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
        <h2 class="text-center pt-3"> Checking Item </h2>
        <form action="" class="m-auto pt-3">

          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="one-head-to-end-shade" class="mx-3">1B Head to end shade</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="one-head-to-end-shade" id="one-head-to-end-shade-accept" value="accept">
                <label class="form-check-label" for="one-head-to-end-shade-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="one-head-to-end-shade" id="one-head-to-end-shade-fail" value="fail">
                <label class="form-check-label" for="one-head-to-end-shade-fail">Fail</label>
              </div>
            </div>

          </div>

          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="oneC-side-to-side-shade" class="mx-3">1C Side to side shade</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="oneC-side-to-side-shade" id="oneC-side-to-side-shade-accept" value="accept">
                <label class="form-check-label" for="oneC-side-to-side-shade-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="oneC-side-to-side-shade" id="oneC-side-to-side-shade-fail" value="fail">
                <label class="form-check-label" for="oneC-side-to-side-shade-fail">Fail</label>
              </div>
            </div>

          </div>

          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="oneD-roll-to-roll-shade" class="mx-3">1D Roll to Roll shade </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="oneD-roll-to-roll-shade" id="oneD-roll-to-roll-shade-accept" value="accept">
                <label class="form-check-label" for="oneD-roll-to-roll-shade-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="oneD-roll-to-roll-shade" id="oneD-roll-to-roll-shade-fail" value="fail">
                <label class="form-check-label" for="oneD-roll-to-roll-shade-fail">Fail</label>
              </div>
            </div>

          </div>
          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="appearance" class="mx-3">Appearance</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="appearance" id="appearance-accept" value="accept">
                <label class="form-check-label" for="appearance-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="appearance" id="appearance-fail" value="fail">
                <label class="form-check-label" for="appearance-fail">Fail</label>
              </div>
            </div>

          </div>
          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="width" class="mx-3">Width </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="width" id="width-accept" value="accept">
                <label class="form-check-label" for="width-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="width" id="width-fail" value="fail">
                <label class="form-check-label" for="width-fail">Fail</label>
              </div>
            </div>

          </div>

          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="shortage" class="mx-3">Shortage </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="shortage" id="shortage-accept" value="accept">
                <label class="form-check-label" for="shortage-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="shortage" id="shortage-fail" value="fail">
                <label class="form-check-label" for="shortage-fail">Fail</label>
              </div>
            </div>

          </div>
          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="skewing-bowing" class="mx-3">Skewing&Bowing </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skewing-bowing" id="skewing-bowing-accept" value="accept">
                <label class="form-check-label" for="skewing-bowing-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="skewing-bowing" id="skewing-bowing-fail" value="fail">
                <label class="form-check-label" for="skewing-bowing-fail">Fail</label>
              </div>
            </div>

          </div>

          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="hand-feel" class="mx-3">Hand Feel </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hand-feel" id="hand-feel-accept" value="accept">
                <label class="form-check-label" for="hand-feel-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hand-feel" id="hand-feel-fail" value="fail">
                <label class="form-check-label" for="hand-feel-fail">Fail</label>
              </div>
            </div>

          </div>
          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="smell" class="mx-3"> Smell</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="smell" id="smell-accept" value="accept">
                <label class="form-check-label" for="smell-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="smell" id="smell-fail" value="fail">
                <label class="form-check-label" for="smell-fail">Fail</label>
              </div>
            </div>

          </div>
          <div class="input-group d-flex justify-content-between  form-label mb-3">
            <label for="uneven-plaid" class="mx-3">Uneven plaid </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="uneven-plaid" id="uneven-plaid-accept" value="accept">
                <label class="form-check-label" for="uneven-plaid-accept">Accept</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="uneven-plaid" id="uneven-plaid-fail" value="fail">
                <label class="form-check-label" for="uneven-plaid-fail">Fail</label>
              </div>
            </div>
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