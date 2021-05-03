<?php
session_start();
$title = "Preparation checklist";
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
                <h2 class="text-center pt-3">Preparation checklist</h2>
                <form action="" class="m-auto">
                    <div class="input-group form-label mb-3">
                        <label for="Head" class="mx-3">Head-ends checked</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chose" id="accept" value="accept">
                            <label class="form-check-label" for="accept">Accept</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chose" id="fail" value="fail">
                            <label class="form-check-label" for="fail">Fail</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php'
?>