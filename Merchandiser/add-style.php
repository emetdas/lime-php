<?php 
include "header.php";
include "navbar.php";
?>

    <div class="container-fluid m-0">
      <div class="row">
        <div class="col-md-4 p-0">
        <?php include "sidebar.php";?>
        </div>

        <div class="col-md-8">
          <div id="main">
            <h2 class="text-center pt-3">Add Style</h2>
            <form class="w-85 m-auto" method="POST">
              <div class="mb-2">
                <label for="order-no" class="form-label">Order No</label>
                <input
                  type="text"
                  id="order-no"
                  placeholder="Order No"
                  class="form-control"
                />
              </div>
              <div class="mb-2">
                <label for="add-style-name" class="form-label"
                  >Add Style Name</label
                >
                <input
                  type="text"
                  id="add-style-name"
                  placeholder="Add Style Name"
                  class="form-control"
                />
              </div>
              <div class="mb-2">
                <label for="po-name" class="form-label">Po no/name</label>
                <input
                  type="text"
                  id="po-name"
                  placeholder="Po no/name"
                  class="form-control"
                />
              </div>
              <div class="mb-2">
                <label for="order-quantity" class="form-label"
                  >Order Quantity</label
                >
                <input
                  type="text"
                  id="order-quantity"
                  placeholder="Order Quantity"
                  class="form-control"
                />
              </div>
              <div class="mb-2">
                <label for="making-quantity" class="form-label"
                  >Making Quantity</label
                >
                <input
                  type="text"
                  id="making-quantity"
                  placeholder="Making Quantity"
                  class="form-control"
                />
              </div>
              <!-- <div class="table-form mb-1">
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
                        <td><input type="number" name="s" /></td>
                        <td><input type="number" name="m" /></td>
                        <td><input type="number" name="l" /></td>
                        <td><input type="number" name="xl" /></td>
                        <td><input type="number" name="xxl" /></td>
                        <td><input type="number" name="xxxl" /></td>
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
                        <td><input type="number" name="s" /></td>
                        <td><input type="number" name="m" /></td>
                        <td><input type="number" name="l" /></td>
                        <td><input type="number" name="xl" /></td>
                        <td><input type="number" name="xxl" /></td>
                        <td><input type="number" name="xxxl" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> -->
              <!-- Button trigger modal -->
              <div class="input-group w-100 my-2">
                <button
                  type="button"
                  class="input-group-text btn bg-primary text-white"
                  data-bs-toggle="modal"
                  data-bs-target="#addcolor"
                >
                <i class="fas fa-plus"></i>
                  Add Color
                </button>
              </div>
              <!-- table dropdown -->
              <ul class="dropdown-table w-100">
                <li
                  class="dropdown-option main-option d-flex justify-content-between"
                >
                  <span class="main-option-select">Select option</span>
                  <i class="fas fa-arrow-up"></i>

                  <ul class="option-dropdown">
                    <li class="dropdown-option" data-dropdown="white">white</li>
                    <li class="dropdown-option" data-dropdown="black">Black</li>
                  </ul>
                </li>
              </ul>

              <div class="dropdown-content-table">
                <div class="dropdown-content dropdown-content-white">
                  <div class="table-form mb-1">
                    <div class="table-sidbar">
                      <span> White colour size wise quantity </span>
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
                            <td><input type="number" name="s" /></td>
                            <td><input type="number" name="m" /></td>
                            <td><input type="number" name="l" /></td>
                            <td><input type="number" name="xl" /></td>
                            <td><input type="number" name="xxl" /></td>
                            <td><input type="number" name="xxxl" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="table-form mb-1">
                    <div class="table-sidbar">
                      <span> White colour size wise making quantity </span>
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
                            <td><input type="number" name="s" /></td>
                            <td><input type="number" name="m" /></td>
                            <td><input type="number" name="l" /></td>
                            <td><input type="number" name="xl" /></td>
                            <td><input type="number" name="xxl" /></td>
                            <td><input type="number" name="xxxl" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="dropdown-content dropdown-content-black">
                  <div class="table-form mb-1">
                    <div class="table-sidbar">
                      <span> Black colour size wise quantity</span>
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
                            <td><input type="number" name="s" /></td>
                            <td><input type="number" name="m" /></td>
                            <td><input type="number" name="l" /></td>
                            <td><input type="number" name="xl" /></td>
                            <td><input type="number" name="xxl" /></td>
                            <td><input type="number" name="xxxl" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="table-form mb-1">
                    <div class="table-sidbar">
                      <span> Black colour size wise making quantity </span>
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
                            <td><input type="number" name="s" /></td>
                            <td><input type="number" name="m" /></td>
                            <td><input type="number" name="l" /></td>
                            <td><input type="number" name="xl" /></td>
                            <td><input type="number" name="xxl" /></td>
                            <td><input type="number" name="xxxl" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <!-- table dropdwon -->
              <div class="mb-2">
                <label for="free-final-inspection" class="form-label"
                  >Free final inspection</label
                >
                <input
                  type="text"
                  id="free-final-inspection"
                  placeholder="Free final inspection"
                  class="form-control"
                />
              </div>
              <div class="mb-2">
                <label for="shipment-date" class="form-label"
                  >Shipment date</label
                >
                <input type="date" id="shipment-date" class="form-control" />
              </div>
              <button type="submit" class="btn bg-primary mb-3">
                Add style
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Add color Modal-start -->
    <form method="post">
        <div
        class="modal fade"
        id="addcolor"
        tabindex="-1"
        aria-labelledby="addcolorLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                Add Color
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="mb-2">
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-plus"></i>
                  </span>
                  <input
                    type="text"
                    name="color-name"
                    placeholder="Add Color"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="mb-1">
                <div class="table-form mb-1">
                  <div class="table-sidbar">
                    <span> White colour size wise quantity </span>
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
                          <td><input type="number" name="s" /></td>
                          <td><input type="number" name="m" /></td>
                          <td><input type="number" name="l" /></td>
                          <td><input type="number" name="xl" /></td>
                          <td><input type="number" name="xxl" /></td>
                          <td><input type="number" name="xxxl" /></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="table-form mb-1">
                  <div class="table-sidbar">
                    <span>
                      White colour size wise making quantity
                    </span>
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
                          <td><input type="number" name="s" /></td>
                          <td><input type="number" name="m" /></td>
                          <td><input type="number" name="l" /></td>
                          <td><input type="number" name="xl" /></td>
                          <td><input type="number" name="xxl" /></td>
                          <td><input type="number" name="xxxl" /></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <input
                type="submit"
                name="add-color"
                class="btn bg-primary text-white"
              />
            </div>
          </div>
        </div>
      </div>
    </form>
 <!-- Add color Modal-end -->
<script src="../js/script.js"></script>
<?php 
include "footer.php";
?>
