<?php
session_start();
$title = "Running order";
include "header.php";
include "navbar.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-0">
            <?php include "sidebar.php"; ?>
        </div>
        <div class="col-md-9 py-2">
            <h2 class="text-center pt-3 header-heading">Running order</h2>
            <div class="row">
                <div class="progress-bar-container">
                    <div class="running-order-progress">
                        <i class="fas fa-home fa-3x"></i>
                        <h4 class="progress-header">Inhouse states</h4>
                        <div class="progress-presenteg">
                            <div class="progess inhouse" data-porgess="70">
                                <span class="persent">70 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="running-order-progress">
                        <i class="fas fa-cut fa-3x"></i>
                        <h4 class="progress-header">Cutting states </h4>
                        <div class="progress-presenteg">
                            <div class="progess cutting" data-porgess="55">
                                <span class="persent">55 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="running-order-progress">
                        <img src="img/sewing-icon.svg" alt="icon" class="sewing-icon">
                        <h4 class="progress-header">Sewing states</h4>
                        <div class="progress-presenteg">
                            <div class="progess sewing" data-porgess="30">
                                <span class="persent">30 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="running-order-progress">
                        <i class="far fa-check-square fa-3x"></i>
                        <h4 class="progress-header">Finishing states</h4>
                        <div class="progress-presenteg">
                            <div class="progess finishing" data-porgess="40">
                                <span class="persent">40 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="running-order-progress">
                        <i class="fas fa-cubes fa-3x"></i>
                        <h4 class="progress-header">Packing states</h4>
                        <div class="progress-presenteg">
                            <div class="progess packing" data-porgess="50">
                                <span class="persent">50 %</span>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>
    var progess = document.querySelectorAll('.progess');
    progess.forEach((e) => {
        e.style.width = e.getAttribute('data-porgess') + '%';
    });
</script>
<?php
include "footer.php";
?>