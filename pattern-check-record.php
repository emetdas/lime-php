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
              <h3 class="text-center pt-2"> PATTERN CHECK RECORD</h3>
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
                           <th rowspan="2">POINT OF MEASUREMENT</th>
                           <th rowspan="2">SPEC</th>
                           <th rowspan="2">PATTEN</th>
                           <th rowspan="2">DEF</th>
                           <th rowspan="2">ADVICE</th>
                           <th colspan="2">ADDED SHRINKAGE%</th>
                           <th colspan="2">FABRIC SHRINKAGE%</th>
                           <th rowspan="2">REMARKS</th>
                       </tr>
                   <tr>
                       <th>LENGTHS</th>
                       <th>WIDTHS</th>
                       <th>LENGTHS</th>
                       <th>WIDTHS</th>


                   </tr>

                   <tr>
                       <td>wdqwd</td>
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
                       <td>wdqwd</td>
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