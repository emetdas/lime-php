<?php 
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
            <h2 class="text-center pt-3">Quantity</h2>

            <ul class="dropdown-table mb-3 w-75 m-auto">
              <li
                class="dropdown-option main-option d-flex justify-content-between"
              >
                <span class="main-option-select"> Select Style </span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-arrow-down"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"
                  />
                </svg>

                <ul class="option-dropdown">
                  <li class="dropdown-option" data-dropdown="1111">1111</li>
                  <li class="dropdown-option" data-dropdown="2222">2222</li>
                </ul>
              </li>
            </ul>

            <form class="w-75 m-auto">
              <div class="dropdown-content-table">
                <div class="dropdown-content dropdown-content-1111">
                  <h4 class="text-center">Style for 1111</h4>

                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div
                        class="card text-dark bg-light mb-3"
                        style="max-width: 18rem"
                      >
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Light card title</h5>
                          <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                          </p>
                        </div>

                        <div class="card-footer">
                          <small class="text-muted"
                            >Last updated 3 mins ago</small
                          >
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div
                        class="card text-white bg-dark mb-3"
                        style="max-width: 18rem"
                      >
                        <div class="card-header">
                          Black <code class="text-end">#ffff</code>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Dark card title</h5>
                          <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                          </p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"
                            >Last updated 3 mins ago</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div
                        class="card text-dark bg-info mb-3"
                        style="max-width: 18rem"
                      >
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Info card title</h5>
                          <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                          </p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"
                            >Last updated 3 mins ago</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This card has
                            even longer content than the first to show that
                            equal height action.
                          </p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"
                            >Last updated 3 mins ago</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This card has
                            even longer content than the first to show that
                            equal height action.
                          </p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"
                            >Last updated 3 mins ago</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This card has
                            even longer content than the first to show that
                            equal height action.
                          </p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"
                            >Last updated 3 mins ago</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dropdown-content dropdown-content-2222">
                  <h4 class="text-center">Style for 2222</h4>

                  <div class="mb-2">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="fas fa-plus"></i>
                      </span>
                      <input
                        type="text"
                        placeholder="Create a Unit"
                        class="form-control"
                      />
                    </div>
                  </div>

                  <div class="mb-2">
                    <div class="material_name_unit_table table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>SI/No</th>
                            <th>Material Name</th>
                            <th>Unit</th>
                            <th>Remark</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>2</td>
                            <td>
                              <input
                                type="text"
                                placeholder="Material Name"
                                class="w-150 form-control form-control-sm"
                              />
                            </td>
                            <td>
                              <select
                                name="material_name_unit"
                                class="w-200 form-select form-select-sm"
                              >
                                <option disabled selected>
                                  Select Material Unit
                                </option>
                                <option value="2021">Kg</option>
                                <option value="2002">m</option>
                                <option value="202">s</option>
                              </select>
                            </td>
                            <td>
                              <textarea
                                name="remark"
                                class="w-200 form-control form-control-sm"
                                placeholder="remark"
                              ></textarea>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="d-block">
                    <button class="float-end add-btn" title="Add Row">
                      <i class="fas fa-plus-circle rounded-circle"></i>
                    </button>
                  </div>
                  <button type="submit" class="btn bg-primary mb-3">
                    submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<script src="../js/script.js"></script>
<?php 
include "footer.php";
?>


