<?php
session_start();
$title = "Summary";
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
                    <h1 class="text-center"> Summary </h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>ITEM NAME</th>
                                <th>TOTAL PURCHASE QUANTITY </th>
                                <th>TOTAL ISSUE</th>
                                <th>BALANCE</th>
                                <th> REMARKS </th>
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
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