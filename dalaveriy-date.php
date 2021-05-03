<?php 
session_start();
$title = "Dalaveriy Date";
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
            <h2 class="text-center pt-3">Dalaveriy Date</h2>
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
                      <th>Si.no</th>
                      <th>Material Name</th>
                      <th>Construction</th>
                      <th>Suplier</th>
                      <th>date</th>
                      <th>remark</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>1</td>
                      <td> <span>Item 1</span> </td>
                      <td>1</td>
                      <td>
                        <input
                          type="text"
                          placeholder="Suplier name"
                          class="form-control form-control-sm w-150"
                        />
                      </td>
                      <td>
                        <input type="date" name="date" class="date" id="date" />
                      </td>
                      <td>
                        <textarea name="remark" class="w-200 form-control form-control-sm" placeholder="remark"></textarea>
                      </td>
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
