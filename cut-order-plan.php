<?php 
session_start();
$title = "Cut Order Plan";
include "header.php";
include "navbar.php";
?>
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-md-3 p-0">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-md-9">
                <div id="main">
            <h2 class="text-center">Cut Order Plan</h2>
              <div class="table-responsive">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                         <th>Marker</th>
                         <th>Piles</th>
                         <th>lays</th>
                         <th>Break-up</th>
                         <th>XS</th>
                         <th>S</th>
                         <th>M</th>
                         <th>L</th>
                         <th>XL</th>
                         <th>XXL</th>
                         <th>3XL</th>

                     </tr>
                     </thead>
                      <tbody>
                      <tr>
                          <td>marker-1</td>
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
                          <td>marker-2</td>
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
                          <td>marker-3</td>
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



                      </tbody>


                  </table>
              </div>
          </div>
        </div>
      </div>
    </div>
<?php 
include "footer.php";
?>