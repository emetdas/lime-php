<?php
session_start();
$title = "Keeping area";
    include 'header.php';
    include 'navbar.php';
?>
 <div class="container-fluid m-0">
      <div class="row">
        <div class="col-md-3 p-0">
        <?php include "sidebar.php";?>
        </div>
        <div class="col-md-9">
          <div id="main">
            <h2 class="text-center pt-3">Store keeping area</h2>
            <form class="m-auto">
        <div class="table-responsive">
          <span class="badge bg-primary">Style</span>
          <table class="table">
            <thead>
              <tr class="text-center">
                <th>Si.no</th>
                <th>Item Name</th>
                <th>Construction</th>
                <th>Color</th>
                <th>Invoice no</th>
                <th>Size wise keeping</th>
                <th>Quantity</th>
                <th>Warehouse name </th>
                <th>Line no</th>
                <th>Rack no</th>
                <th>Block no</th>
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
                <td>40</td>
                <td>110</td>
                <td>110</td>
                <td>Red</td>
                <td>20 ounce</td>
                <td>110</td>
                <td>10 </td>
              </tr>
            </tbody>
          </table>
        </div>
        <button class="btn bg-primary mb-3 text-white">
        <i class="far fa-file-excel"></i>
          Excel
        </button>
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
include 'footer.php'
?>