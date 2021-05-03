<?php
session_start();
$title = "Size Wise Quantity";
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
          <h2 class="text-center pt-3">Size Wise Quantity</h2>
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
                <div class="table-form mb-1">
                  <div class="table-sidebar">
                    <span> Size Wise Quantity </span>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S</th>
                          <th>M</th>
                          <th>L</th>
                          <th>XL</th>
                          <th>XXL</th>
                          <th>XXXL</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>10</td>
                          <td>0</td>
                          <td>20</td>
                          <td>29</td>
                          <td>10</td>
                          <td>30</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="table-form mb-1">
                  <div class="table-sidbar">
                    <span> Size Wise Making Quantity </span>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S</th>
                          <th>M</th>
                          <th>L</th>
                          <th>XL</th>
                          <th>XXL</th>
                          <th>XXXL</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         <td>10</td>
                          <td>0</td>
                          <td>20</td>
                          <td>29</td>
                          <td>10</td>
                          <td>30</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
include "footer.php";
?>