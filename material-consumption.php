<?php
session_start();
$title = "Material consumption";
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
            <h2 class="text-center pt-3">Material consumption</h2>
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
            <form class="w-75 m-auto">
             <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Material Name</th>
                            <th>Construction</th>
                            <th>Order quantity</th>
                            <th>Consumption</th>
                            <th>Sub total</th>
                            <th>Extra %</th>
                            <th>Total</th>
                            <th>Remark</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Shirt</td>
                            <td>1</td>
                            <td>10</td>
                            <td><input type="number" name="consumption" class="form-control form-control-sm"></td>
                            <td>3</td>
                            <td><input type="number" name="extra" class="form-control form-control-sm"></td>

                            <td>2</td>
                            <td><textarea name="remark" class="w-200 form-control form-control-sm" placeholder="remark"></textarea></td>
                        </tr>
                    </tbody>
                </table>
             </div>
              <button type="submit" class="btn bg-primary mb-3">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php 
include "footer.php";
?>
