<?php
session_start();
$title = "Fabric inspection";
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
        <h2 class="text-center pt-3">Fabric Inspection Summary</h2>


        <div class="table-responsive">


          <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="11"> </th>
                <th colspan="2">Overall Result</th>
                <th></th>
              </tr>
              <tr>
                <th> </th>
                <th>Inspect colours/Pattern</th>
                <th>Order Qty.</th>
                <th>Packing Qty.</th>
                <th>Rolls Inspected</th>
                <th>Total Actual Length Inspected</th>
                <th>Percentage inspected</th>
                <th>Percentage of Rolls Failed</th>
                <th>Percentage of Total Length Failed</th>
                <th>Total Dye Lots</th>
                <th>Rejected Dye Lots</th>
                <th>Passed</th>
                <th>Rejected</th>
                <th>Remark</th>
              </tr>
              <tr>
                <td>1</td>
                <td>V.med wash denim</td>
                <td>1950</td>
                <td>1960.5</td>
                <td>4</td>
                <td>290.5</td>
                <td>14.80%</td>
                <td>0.00%</td>
                <td>0.000%</td>
                <td>0</td>
                <td>0</td>
                <td>Accept</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
                <td>V.med wash denim</td>
                <td>1950</td>
                <td>1960.5</td>
                <td>4</td>
                <td>290.5</td>
                <td>14.80%</td>
                <td>0.00%</td>
                <td>0.000%</td>
                <td>0</td>
                <td>0</td>
                <td>Accept</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3</td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>0.00%</td>
                <td>0.000%</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>4</td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>0.00%</td>
                <td>0.000%</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>