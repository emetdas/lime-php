<?php 
session_start();
$title = "Lime";
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
              <h3 class="text-center pt-2"> FABRIC RELAX TIME RECORD</h3>
              <div class="row">
                  <div class="col-md-6">
                      <p>BUYER : <span>____</span></p>
                      <p>STYLE NO : <span>____</span></p>
                      <p>STYLE NAME : <span>____</span></p>
                      <p>FABRICATION  : <span>____</span></p>
                      <p>COLOUR : <span>____</span></p>
                  </div>
                  <div class="col-md-6">
                      <p>DATE : <span>____</span></p>
                      <p>CHECKED : <span>____</span></p>
                      <p>SIZE : <span>____</span></p>
                      <p>PIN NO : <span>____</span></p>
                  </div>
              </div>
            <div class="table-responsive">

                <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th rowspan="2"> DATE </th>
                           <th rowspan="2">FABRIC TYPE</th>
                           <th rowspan="2">ROLL NO</th>
                           <th rowspan="2"> QUANTITY </th>
                           <th colspan="2">RELAX TIME</th>
                           <th rowspan="2">REMARKS</th>
                       </tr>
                   <tr>
                       <th>STATUS</th>
                       <th>ENDS</th>
                   </tr>

                   <tr>
                       <td>02/11/21</td>
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