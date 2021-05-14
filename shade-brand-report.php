<?php
session_start();
$title = "Shade Brand Report";
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
        <h2 class="text-center pt-3">SHADE ANALYZE REPORT</h2>

        <form class="w-85 m-auto" method="POST">
          <div class="mb-1">
            <label for="buyer" class="form-label">BUYER</label>
            <input type="text" id="buyer" placeholder="BUYER" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="color" class="form-label">COLOR </label>
            <input type="color" id="color" placeholder="Color" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="style" class="form-label">STYLE</label>
            <input type="text" id="style" placeholder="Style" class="form-control" />
          </div>
          <div class="mb-1">
            <label for="fabric-composition" class="form-label"> FABRIC COMPOSITION</label>
            <input type="text" id="fabric-composition" placeholder="Fabric Composition" class="form-control" />
          </div>

        </form>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>SHADE NO</th>
                <th></th>
                <th>SHADE NO</th>
                <th></th>
                <th>SHADE NO</th>
                <th></th>
                <th>SHADE NO</th>
                <th></th>
                <th>SHADE NO</th>
                <th></th>
                <th>SHADE NO</th>
                <th></th>
              </tr>
              <tr>
                <th>ROLL NO</th>
                <th>YDS</th>
                <th>ROLL NO</th>
                <th>YDS</th>
                <th>ROLL NO</th>
                <th>YDS</th>
                <th>ROLL NO</th>
                <th>YDS</th>
                <th>ROLL NO</th>
                <th>YDS</th>
                <th>ROLL NO</th>
                <th>YDS</th>

              </tr>


            </thead>
            <tbody>
              <tr>
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
                <td></td>
              </tr>
              <tr>
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
                <td></td>
              </tr>
              <tr>
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
                <td></td>
              </tr>
              <tr>
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
                <td></td>
              </tr>
              <tr>
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
                <td></td>
              </tr>
              <tr>
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
include 'footer.php'
?>