<?php 
session_start();
$title = "Summery";
include "header.php";
include "navbar.php";
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 p-0">
          <?php include "sidebar.php";?>
        </div>
        <div class="col-md-9">
          <div id="main">
               <h3 class="text-center">Summery </h3>
              <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Part Name </th>
                            <th>Cutting No</th>
                            <th>Marker No</th>
                            <th>Marker No Quantity</th>
                            <th>Size Wise Quantity</th>
                            <th>Lay No</th>
                            <th>Size Wise Quantity</th>
                            <th>Balance Lay</th>
                            <th>Size  Wise Balance Quantity</th>
                            <th>Remark</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
include "footer.php";
?>