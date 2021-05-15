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
              <h3 class="text-center pt-2"> SPREADING QUALITY CONTROL REPORT</h3>
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
                            <th colspan="2"></th>
                            <th colspan="8">DEFECTS</th>

                        </tr>
                       <tr>
                           <th> DATE </th>
                           <th>CUT NO</th>
                           <th>TABLE MAKING</th>
                           <th>ENDS</th>
                           <th>LEANING</th>
                           <th>TENSION</th>
                           <th>NARROW GOODS</th>
                           <th>REMAINS</th>
                           <th>COUNTS</th>
                           <th>FLY HEIGHT</th>
                           <th>MARKER PLACING</th>
                           <th>FABRIC FAULTS</th>
                           <th>REMARKS</th>

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
                            <td></td>
                        </tr>




                   
                   </thead>
                </table>

            </div>
              <div class="comments">
                  <form>
                      <div class="">
                          <label for="comment">Comment</label>
                          <textarea
                                  id="comment" class="form-control" >

                            </textarea>
                      </div>
                      <button type="submit" class="btn mt-2 btn-success">SUBMIT</button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
<?php 
include "footer.php";
?>