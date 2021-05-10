<?php
session_start();
$title = "Shirnkage Report";
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
            <h2 class="text-center pt-3">Shirnkage Report</h2>
            <div class="table-responsive">
               <table class="table table-bordered">
                   <thead>
                   <tr>
                       <th colspan="3">BUYER</th>
                       <th colspan="2">CATO</th>
                       <th colspan="4">SAMPLE SIZE - 50 CM X 50 CM</th>
                       <th colspan="2">FABRIC WIDTH </th>
                       <th>58"/50"</th>
                   </tr>
                   <tr>
                       <th colspan="3">STYLE NO</th>
                       <th  colspan="2">3477787</th>
                       <th colspan="4">PATTERN SIZE - 35 CM X 35 CM</th>
                       <th colspan="2">COLOR</th>
                       <th>DUNE</th>
                   </tr>
                   <tr>
                       <th colspan="3">FABRIC DESCRIPTION</th>
                       <th colspan="2">100% </th>
                       <th colspan="4">FABRIC : KNITE / WOVEN </th>
                       <th colspan="2">TEST RESULT</th>
                       <th>10%</th>
                   </tr>
                   <tr>
                       <th rowspan="2">SL NO</th>
                       <th rowspan="2">DATE</th>
                       <th rowspan="2">BATCH NO</th>
                       <th rowspan="2">ROLE NO</th>
                       <th rowspan="2">GSM</th>
                       <th colspan="2">BEFORE WASH</th>
                       <th colspan="2">AFTER WASH</th>
                       <th>LENGTH</th>
                       <th>WIDTH</th>
                       <th rowspan="2">REMARKS</th>


                   </tr>
                   <tr>
                       <td>LENGTH</td>
                       <td>WIDTH</td>
                       <td>LENGTH</td>
                       <td>WIDTH</td>
                       <td>LENGTH</td>
                       <td>WIDTH</td>



                   </tr>
                   <tr>
                       <td>1</td>
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
                       <td>2</td>
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
include 'footer.php'
?>