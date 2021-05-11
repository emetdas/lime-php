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
                    <div class="input-group d-flex justify-content-between form-label mb-3">


                        <label for="approval-swatch-strike-off" class="mx-3">Approval Swatch/Strike Off (at least one of “Approval Swatch”item should</label>


                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-strike-off" id="approval-swatch-strike-off-accept" value="accept">
                                <label class="form-check-label" for="approval-swatch-strike-off-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-strike-off" id="approval-swatch-strike-off-fail" value="fail">
                                <label class="form-check-label" for="approval-swatch-strike-off-fail">Fail</label>
                            </div>
                        </div>

                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="approval-swatch-hand-feel-swatch" class="mx-3">Approval Swatch/Hand Feel Swatch</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-hand-feel-swatch" id="approval-swatch-hand-feel-swatch-accept" value="accept">
                                <label class="form-check-label" for="approval-swatch-hand-feel-swatch-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-hand-feel-swatch" id="approval-swatch-hand-feel-swatch-fail" value="fail">
                                <label class="form-check-label" for="approval-swatch-hand-feel-swatch-fail">Fail</label>
                            </div>
                        </div>


                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="approval-swatch-shade-band-swatch" class="mx-3">Approval Swatch/Shade Band Swatch</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-shade-band-swatch" id="approval-swatch-shade-band-swatch-accept" value="accept">
                                <label class="form-check-label" for="approval-swatch-shade-band-swatch-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-shade-band-swatch" id="approval-swatch-shade-band-swatch-fail" value="fail">
                                <label class="form-check-label" for="approval-swatch-shade-band-swatch-fail">Fail</label>
                            </div>
                        </div>

                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="approval-swatch-1st-dye-lot-shipment-sample" class="mx-3">Approval Swatch/1st dye lot / shipment sample</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-1st-dye-lot-shipment-sample" id="approval-swatch-1st-dye-lot-shipment-sample-accept" value="accept">
                                <label class="form-check-label" for="approval-swatch-1st-dye-lot-shipment-sample-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="approval-swatch-1st-dye-lot-shipment-sample" id="approval-swatch-1st-dye-lot-shipment-sample-fail" value="fail">
                                <label class="form-check-label" for="approval-swatch-1st-dye-lot-shipment-sample-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="environment-lighting" class="mx-3">Environment/Lighting</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="environment-lighting" id="environment-lighting-accept" value="accept">
                                <label class="form-check-label" for="environment-lighting-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="environment-lighting" id="environment-lighting-fail" value="fail">
                                <label class="form-check-label" for="environment-lighting-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="environment-requested-light-source" class="mx-3">Environment/Requested Light Source</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="environment-requested-light-source" id="environment-requested-light-source-accept" value="accept">
                                <label class="form-check-label" for="environment-requested-light-source-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="environment-requested-light-source" id="environment-requested-light-source-fail" value="fail">
                                <label class="form-check-label" for="environment-requested-light-source-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="equipment-inspection-machine" class="mx-3">Equipment/Inspection Machine</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-inspection-machine" id="equipment-inspection-machine-accept" value="accept">
                                <label class="form-check-label" for="equipment-inspection-machine-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-inspection-machine" id="equipment-inspection-machine-fail" value="fail">
                                <label class="form-check-label" for="equipment-inspection-machine-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="equipment-standard-light-box" class="mx-3">Equipment/Standard Light Box</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-standard-light-box" id="equipment-standard-light-box-accept" value="accept">
                                <label class="form-check-label" for="equipment-standard-light-box-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-standard-light-box" id="equipment-standard-light-box-fail" value="fail">
                                <label class="form-check-label" for="equipment-standard-light-box-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="equipment-length-counter" class="mx-3">equipment-length-counter</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-length-counter" id="equipment-length-counter-accept" value="accept">
                                <label class="form-check-label" for="equipment-length-counter-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-length-counter" id="equipment-length-counter-fail" value="fail">
                                <label class="form-check-label" for="equipment-length-counter-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">

                        <label for="equipment-weight-scale" class="mx-3">Equipment/Weight Scale</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-weight-scale" id="equipment-weight-scale-accept" value="accept">
                                <label class="form-check-label" for="equipment-weight-scale-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-weight-scale" id="equipment-weight-scale-fail" value="fail">
                                <label class="form-check-label" for="equipment-weight-scale-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="Head" class="mx-3">Equipment/Punch</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-punch" id="equipment-punch-accept" value="accept">
                                <label class="form-check-label" for="equipment-punch-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment-punch" id="equipment-punch-fail" value="fail">
                                <label class="form-check-label" for="equipment-punch-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="shipment-mark-and-chop-shipment-mark" class="mx-3">Shipment Mark and Chop/Shipment Mark</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-shipment-mark" id="shipment-mark-and-chop-shipment-mark-accept" value="accept">
                                <label class="form-check-label" for="shipment-mark-and-chop-shipment-mark-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-shipment-mark" id="shipment-mark-and-chop-shipment-mark-fail" value="fail">
                                <label class="form-check-label" for="shipment-mark-and-chop-shipment-mark-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="shipment-mark-and-chop-face-side-chop" class="mx-3">Shipment Mark and Chop/Face Side Chop</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-face-side-chop" id="shipment-mark-and-chop-face-side-chop-accept" value="accept">
                                <label class="form-check-label" for="shipment-mark-and-chop-face-side-chop-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-face-side-chop" id="shipment-mark-and-chop-face-side-chop-fail" value="fail">
                                <label class="form-check-label" for="shipment-mark-and-chop-face-side-chop-fail">Fail</label>
                            </div>
                        </div>
                    </div>


                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="shipment-mark-and-chop-roll" class="mx-3">Shipment Mark and Chop/Roll head and end chop</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-roll" id="shipment-mark-and-chop-roll-accept" value="accept">
                                <label class="form-check-label" for="shipment-mark-and-chop-roll-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-roll" id="shipment-mark-and-chop-roll-fail" value="fail">
                                <label class="form-check-label" for="shipment-mark-and-chop-roll-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="shipment-mark-and-chop-shade-lot-sticker" class="mx-3">Shipment Mark and Chop/Shade lot sticker on both side of each roll</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-shade-lot-sticker" id="shipment-mark-and-chop-shade-lot-sticker-accept" value="accept">
                                <label class="form-check-label" for="shipment-mark-and-chop-shade-lot-sticker-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="shipment-mark-and-chop-shade-lot-sticker" id="shipment-mark-and-chop-shade-lot-sticker-fail" value="fail">
                                <label class="form-check-label" for="shipment-mark-and-chop-shade-lot-sticker-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="nds-head-ends" class="mx-3">nds/Head Ends</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nds-head-ends" id="nds-head-ends-accept" value="accept">
                                <label class="form-check-label" for="nds-head-ends-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nds-head-ends" id="nds-head-ends-fail" value="fail">
                                <label class="form-check-label" for="nds-head-ends-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="nds-head-ends-grouped-by-lot" class="mx-3">nds/Head ends grouped by lot</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nds-head-ends-grouped-by-lot" id="nds-head-ends-grouped-by-lot-accept" value="accept">
                                <label class="form-check-label" for="nds-head-ends-grouped-by-lot-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nds-head-ends-grouped-by-lot" id="nds-head-ends-grouped-by-lot-fail" value="fail">
                                <label class="form-check-label" for="nds-head-ends-grouped-by-lot-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="head" class="mx-3">Head Ends/Package # of head ends marked on packing list</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="head-ends-package" id="head-ends-package-accept" value="accept">
                                <label class="form-check-label" for="head-ends-package-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="head-ends-package" id="head-ends-package-fail" value="fail">
                                <label class="form-check-label" for="head-ends-package-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="documents-mill-internal-inspection-report" class="mx-3">Documents/Mill internal inspection report</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-mill-internal-inspection-report" id="documents-mill-internal-inspection-report-accept" value="accept">
                                <label class="form-check-label" for="documents-mill-internal-inspection-report-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-mill-internal-inspection-report" id="documents-mill-internal-inspection-report-fail" value="fail">
                                <label class="form-check-label" for="documents-mill-internal-inspection-report-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="documents-mill-internal-test-report" class="mx-3">Documents/Mill internal test report</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-mill-internal-test-report" id="documents-mill-internal-test-report-accept" value="accept">
                                <label class="form-check-label" for="documents-mill-internal-test-report-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-mill-internal-test-report" id="documents-mill-internal-test-report-fail" value="fail">
                                <label class="form-check-label" for="documents-mill-internal-test-report-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="documents-packing-list" class="mx-3">Documents/Packing list</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-packing-list" id="documents-packing-list-accept" value="accept">
                                <label class="form-check-label" for="documents-packing-list-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-packing-list" id="documents-packing-list-fail" value="fail">
                                <label class="form-check-label" for="documents-packing-list-fail">Fail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-between form-label mb-3">
                        <label for="documents-fabric-inspection-booking-form" class="mx-3">Documents/Fabric inspection booking form</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-fabric-inspection-booking-form" id="documents-fabric-inspection-booking-form-accept" value="accept">
                                <label class="form-check-label" for="documents-fabric-inspection-booking-form-accept">Accept</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="documents-fabric-inspection-booking-form" id="documents-fabric-inspection-booking-form-fail" value="fail">
                                <label class="form-check-label" for="documents-fabric-inspection-booking-form-fail">Fail</label>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn bg-primary mb-3">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php'
?>