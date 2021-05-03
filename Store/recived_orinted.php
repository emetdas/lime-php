<?php 
include "header.php";
include "navbar.php";
?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 p-0">
          <?php include "sidebar.php";?>
          </div>
          <div class="col-md-9">
            <h2 class="text-center pt-3">Received oriented area </h2>
            <form class="m-auto">
                <div class="table-responsive">
                    <span class="badge bg-primary">Style</span>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Si.no</th>
                        <th>Item Name</th>
                        <th>Color</th>
                        <th>Invoice no</th>
                        <th>Size wise received </th>
                        <th>Quantity</th>
                        <th>Balancing</th>
                        <th>Remark</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>1</td>
                        <td>Shirt</td>
                        <td>1</td>
                        <td>100</td>
                        <td>40</td>
                        <td>110</td>
                        <td>10</td>
                        <td>89</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-responsive">
                    <span class="badge bg-info">Size wise received</span>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Quantity</th>
                        <th>Received quantity</th>
                        <th>Size</th>
                        <th>S</th>
                        <th>M</th>
                        <th>L</th>
                        <th>XL</th>
                        <th>XXL</th>
                        <th>XXXL</th>
                        <th>Remark</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>20</td>
                        <td>1</td>
                        <td>100</td>
                        <td>40</td>
                        <td>110</td>
                        <td>10</td>
                        <td>89</td>
                        <td>10</td>
                        <td>89</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <button class="btn bg-primary mb-3 text-white">
                  <i class="fas fa-print"></i>
                  Print
                </button>
                <button class="btn bg-primary mb-3 text-white">
                  <i class="far fa-file-pdf"></i>
                  pdf
                </button>
              </form>
          </div>
        </div>
      </div>
      <?php 
include "footer.php";
?>

  