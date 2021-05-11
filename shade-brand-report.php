<?php
session_start();
$title = "Shade Brand Report";
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
        <h2 class="text-center pt-3">G. S. M. RECORD SUMMARY</h2>
        <form class="w-85 m-auto" method="POST">
          <div class="mb-1">
            <label for="order-no" class="form-label">BUYER</label>
            <input type="text" id="order-no" placeholder="BUYER" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="inspector" class="form-label">STYLE NAME</label>
            <input type="text" id="inspector" placeholder="Style name" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="inspector" class="form-label">ORDER NO</label>
            <input type="text" id="inspector" placeholder="Order no" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="inspector" class="form-label">ITEM DESCRIPTION</label>
            <input type="text" id="inspector" placeholder="Item Description" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="inspector" class="form-label">DATE</label>
            <input type="date" id="inspector" class="form-control" />
          </div>
        </form>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>DESCRIPTION</th>
                <th>REQUIRED G.S.M (WEIGHT)</th>
                <th>ACTUAL G.S.M (WEIGHT)</th>
                <th>AVERAGE G.S.M (WEIGHT)</th>
                <th>REQUIRED HEIGHT </th>
                <th>ACTUAL HEIGHT </th>
                <th>HEIGHT AVERAGE </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="5"> </td>
                <td rowspan="5"> </td>
                <td></td>
                <td rowspan="5"> </td>
                <td rowspan="5"> </td>
                <td></td>
                <td rowspan="5"> </td>

              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="5"> </td>
                <td rowspan="5"> </td>
                <td></td>
                <td rowspan="5"> </td>
                <td rowspan="5"> </td>
                <td></td>
                <td rowspan="5"> </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="5"> </td>
                <td rowspan="5"> </td>
                <td></td>
                <td rowspan="5"> </td>
                <td rowspan="5"> </td>
                <td></td>
                <td rowspan="5"> </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>