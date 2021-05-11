<?php
session_start();
$title = "Store summary";
include 'header.php';
include 'navbar.php';
?>
<div class="container-fluid m-0">
  <div class="row">
    <div class="col-md-3 p-0">
      <?php include "sidebar.php"; ?>
    </div>
    <div class="col-md-9">
      <div id="main">
        <h3 class="text-center">Summery report of Fabric Consignment</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th colspan="9">BUYER : </th>
              <th colspan="5">FABRIC RECEIVED DATE: </th>
              <th colspan="4">REPORT DATE:</th>
            </tr>
            <tr>
              <td colspan="9">STYLE:</td>
              <td colspan="5">Type of Wash:</td>
              <td colspan="4">INVOICE NO:</td>
            </tr>
            <tr>
              <td colspan="9">COMPOSITION:</td>
              <td colspan="4">Composition:</td>
              <td colspan="3">ORDER QTY:</td>
              <td>~</td>
              <td>YES</td>
            </tr>
            <tr>
              <td colspan="9">COMPOSITION:</td>
              <td colspan="7">SUPPLIER NAME:</td>
              <td>X</td>
              <td>NO</td>
            </tr>
            <tr>
              <td colspan="9" rowspan="2">COLOR:</td>
              <td rowspan="3">CUT TUBE:</td>
              <td rowspan="3">OK TUBE:</td>
              <td rowspan="3">Shading TUBE:</td>
              <td colspan="5">SHADING:</td>
              <td rowspan="3">Shading %:</td>
            </tr>
            <tr>
              <td colspan="2">WIDTH WISE</td>
              <td colspan="3">LENGTH WISE</td>
            </tr>
            <tr>
              <td colspan="9">FABRIC CODE:</td>
              <td>SIDE TO SIDE</td>
              <td>SIDE TO CENTER</td>
              <td>SIDE</td>
              <td>MEDDLE</td>
              <td>END</td>
            </tr>
            <tr>
              <td colspan="9">Remarks:</td>
              <td>5</td>
              <td>5</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>00.87%</td>
            </tr>
            <tr>
              <td colspan="3">Fabric Inspection Status P/S</td>
              <td colspan="6">PANaLTY POINTS: 44.00%</td>
              <td colspan="6">Wash factory:GERRNT</td>
              <td colspan="3">NO of Shades: 1 to 3</td>

            </tr>
            <tr>
              <td colspan="3">Average Shirinkage</td>
              <td colspan="6">Length Wise...#03:44%... Width Wise.. 44.00%..</td>
              <td colspan="4">SHRINKAGE Template 34 X 34</td>
              <td colspan="5">ROLLS DOCUMENT :49 ROLLS</td>

            </tr>
            <tr>
              <td colspan="2">BULK DATE </td>
              <td colspan="13"> </td>

              <td colspan="3">ROLLS DOCUMENT :49 ROLLS</td>

            </tr>
            <tr>

              <td class="text-center" colspan="15"> SHRINKAGE DETAILS</td>
              <td colspan="3">N</td>

            </tr>
            <tr>
              <td rowspan="2">S.L NO.</td>
              <td rowspan="2">ROLL NO</td>
              <td rowspan="2">QTY (YDS/MTR)</td>
              <td rowspan="2">FABRIC CUTABLE WIDTH</td>
              <td rowspan="2">SHADE LOT</td>
              <td colspan="3">AFTER WISH</td>
              <td colspan="3">AFTER WISH</td>
              <td rowspan="2">AVERAGE LENGTH</td>
              <td rowspan="2">AVERAGE WITH</td>
              <td rowspan="2">LENGTH %</td>
              <td rowspan="2">WITH %</td>
              <td rowspan="2">PATTERN GROUP</td>
              <td rowspan="2">MARKER TYPE</td>
              <td rowspan="2">STATUS</td>
            </tr>
            <tr>
              <td>LENGTH EDGEE</td>
              <td>LENGTH MIDDLE</td>
              <td>LENGTH EDGE 2</td>
              <td>LENGTH EDGEE</td>
              <td>LENGTH MIDDLE</td>
              <td>LENGTH EDGE 2</td>
            </tr>
            <tr>
              <td>1</td>
              <td>6465</td>
              <td>123</td>
              <td>234.87</td>
              <td>A</td>
              <td>23.9</td>
              <td>34</td>
              <td>76.8</td>
              <td>86.8</td>
              <td>799.8</td>

              <td>30.88</td>
              <td>432</td>
              <td>234.7987</td>
              <td>-5.09</td>
              <td>-545</td>
              <td>P-1</td>
              <td>NORMAL</td>
              <td>OK</td>
            </tr>
            <tr>
              <td>2</td>
              <td>6465</td>
              <td>123</td>
              <td>234.87</td>
              <td>A</td>
              <td>23.9</td>
              <td>34</td>
              <td>76.8</td>
              <td>86.8</td>
              <td>799.8</td>

              <td>30.88</td>
              <td>432</td>
              <td>234.7987</td>
              <td>-5.09</td>
              <td>-545</td>
              <td>P-1</td>
              <td>NORMAL</td>
              <td>OK</td>
            </tr>
            <tr>
              <td>3</td>
              <td>6465</td>
              <td>123</td>
              <td>234.87</td>
              <td>A</td>
              <td>23.9</td>
              <td>34</td>
              <td>76.8</td>
              <td>86.8</td>
              <td>799.8</td>

              <td>30.88</td>
              <td>432</td>
              <td>234.7987</td>
              <td>-5.09</td>
              <td>-545</td>
              <td>P-1</td>
              <td>NORMAL</td>
              <td>OK</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>