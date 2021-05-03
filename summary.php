<?php 
session_start();
$title = "Summary";
include "header.php";
include "navbar.php";
?>
    <div class="container-fluid m-0">
      <div class="row">
        <div class="col-md-3 p-0">
        <?php include "sidebar.php";?>
        </div>
        <div class="col-md-9">
          <div id="main">
            <h2 class="text-center pt-3">Summary</h2>
            <form method="GET" class="w-75 m-auto">
              <div class="mb-2 d-flex align-items-center">
                <select name="material_name_unit" class="w-10 form-select form-select-sm">
                  <option value="style" disabled selected>Style</option>
                  <option value="2021">2021</option>
                  <option value="2002">2002</option>
                  <option value="202">202</option>
                </select>
                <div class="search d-flex align-items-center">
                  <input type="search">
                 <button type="submit"><i class="fas fa-search"></i></button> 
                </div>
              </div>
            </form>
            <form class="m-auto">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Si.no</th>
                      <th>Material Name</th>
                      <th>Construction</th>
                      <th>Order quantity</th>
                      <th>Consumption</th>
                      <th>Sub total</th>
                      <th>Extra%</th>
                      <th>Total</th>
                      <th>supplier</th>
                      <th>Delivery date</th>
                      <th>Remark</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>1</td>
                      <td>Shirt</td>
                      <td>1</td>
                      <td>90</td>
                      <td>100</td>
                      <td>40</td>
                      <td>110</td>
                      <td>10</td>

                      <td>Asrif Uddin</td>
                      <td>
                        <span class="badge bg-secondary">10/3/2099</span>
                      </td>
                      <td>
                        <span> Lorem ipsum... </span>
                      </td>
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
    </div>
    <?php 
include "footer.php";
?>