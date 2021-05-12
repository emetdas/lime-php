<!-- SideBar-start -->
<div id="sideBar">
  <!-- Accrodion-main-part-start -->
  <div class="accordion" id="accordionExample">
    <!-- admin-start -->
    <div class="accordion-item">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#admin" aria-expanded="true" aria-controls="admin">
        Admin
      </button>
      <div id="admin" class="accordion-collapse collapse" aria-labelledby="admin-contain" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="true" aria-controls="user" data-bs-parent="#admin">
            Create user
          </button>
          <div id="user" class="accordion-collapse collapse" aria-labelledby="user-contain" data-bs-parent="#user">
            <a href="#!" class="mt-1 w-100 btn"> Merchandiser </a>

            <a href="#!" class="w-100 btn"> Store </a>

            <a href="#!" class="w-100 btn"> Cutting </a>

            <a href="#!" class="w-100 btn"> Sewing </a>
            <a href="#!" class="w-100 btn"> Finishing </a>
            <a href="#!" class="w-100 btn"> Packing </a>
          </div>
        </div>

        <div class="accordion-body bg-light">
          <div class="accordion-header" id="confirm-order-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#confirm-order" aria-expanded="true" aria-controls="confirm-order">
              Daily report
            </button>
          </div>
          <div id="confirm-order" class="accordion-collapse collapse" aria-labelledby="confirm-order-contain" data-bs-parent="#merchandiser">
            <a href="#!" class="mt-1 w-100 btn"> attendance report </a>

            <a href="#!" class="w-100 btn">
              daily incoming item report
            </a>

            <a href="#!" class="w-100 btn"> daily outgoing report </a>

            <a href="#!" class="w-100 btn">
              daily tiffin bill report
            </a>
            <a href="#!" class="w-100 btn">
              daily factory visiting report
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- admin-end -->
    <!-- Merchandiser-start -->
    <div class="accordion-item">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#merchandiser" aria-expanded="true" aria-controls="merchandiser">
        Merchandiser
      </button>
      <div id="merchandiser" class="accordion-collapse collapse" aria-labelledby="merchandiser-contain" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="accordion-header" id="add-style-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#add-style" aria-expanded="true" aria-controls="add-style">
              Order No.
            </button>
          </div>
          <div id="add-style" class="accordion-collapse collapse" aria-labelledby="add-style-contain" data-bs-parent="#merchandiser">
            <a href="add-style.php" class="mt-1 w-100 btn">
              Add Style
            </a>

            <a href="material-name-unit.php" class="w-100 btn">
              Material name/Unit
            </a>

            <a href="material-consumption.php" class="w-100 btn">
              Material Consumption
            </a>

            <a href="dalaveriy-date.php" class="w-100 btn">
              Delivery Date
            </a>
            <a href="quantity.php" class="w-100 btn">
            Quantity
            </a>
            <a href="summary.php" class="w-100 btn"> Summary</a>
          </div>
        </div>

        <div class="accordion-body bg-light">
          <div class="accordion-header" id="confirm-order-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#confirm-order" aria-expanded="true" aria-controls="confirm-order">
              Confirm Order
            </button>
          </div>
          <div id="confirm-order" class="accordion-collapse collapse" aria-labelledby="confirm-order-contain" data-bs-parent="#merchandiser">
            <a href="#" class="mt-1 w-100 btn"> Add Style </a>

            <a href="#" class="w-100 btn"> Material name/Unit </a>

            <a href="#" class="w-100 btn"> Material Consumption </a>

            <a href="#" class="w-100 btn"> Delivery Date </a>
          </div>
          <a href="planing-order.php" class="accordion-header" id="planning-order-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#planning-order" aria-expanded="true" aria-controls="planning-order">
              Planning Order
            </button>
          </a>
          <a href="running-order.php" class="accordion-header" id="running-order-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#running-order" aria-expanded="true" aria-controls="running-order">
              Running Order
            </button>
          </a>
        </div>
      </div>
    </div>
    <!-- Merchandiser-end -->
    <!-- Sample-start -->
    <div class="accordion-item">
      <div class="accordion-header" id="sample-contain">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sample" aria-expanded="true" aria-controls="sample">
        Sample
        </button>
      </div>
      <div id="sample" class="accordion-collapse collapse" aria-labelledby="sample-contain" data-bs-parent="#sample">
        <div class="accordion-body">
          <div class="link-list">
            <a href="#!" class="mt-1 w-100 btn">
            Add part name
            </a>
            <a href="#!" class="mt-1 w-100 btn">
            Summary 
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Sample-end -->
    <!-- store-start -->
    <div class="accordion-item">
      <div class="accordion-header" id="store-contain">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#store" aria-expanded="true" aria-controls="store">
          Store
        </button>
      </div>
      <div id="store" class="accordion-collapse collapse" aria-labelledby="store-contain" data-bs-parent="#store">
        <div class="accordion-body">
          <div class="link-list">
            <a href="recived_orinted.php" class="mt-1 w-100 btn">
              Received oriented area
            </a>
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quality-check" aria-expanded="true" aria-controls="quality-check" data-bs-parent="#quality-check">
            Quality check
          </button>
          <div id="quality-check" class="accordion-collapse collapse px-4" aria-labelledby="quality-check-contain" data-bs-parent="#quality-check">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quality-inspection" aria-expanded="true" aria-controls="quality-inspection" data-bs-parent="#quality-inspection">
           Quality inspection
          </button>
          <div id="quality-inspection" class="accordion-collapse collapse px-4" aria-labelledby="quality-inspection-contain" data-bs-parent="#quality-inspection">
            <a href="general.php" class="w-100 btn"> General </a>
            <a href="preparation-checklist.php" class="w-100 btn"> Preparation checklist</a>
            <a href="checking-item.php" class="w-100 btn"> Checking item </a>
            <a href="four-point-inspection.php" class="w-100 btn"> Four point inspection system</a>
            <a href="fabric-inspection-summary.php" class="w-100 btn"> Fabric inspection summary sheet </a>
            <a href="overall-result.php" class="w-100 btn"> Overall result</a>
          </div>
            <a href="shrinkage-report.php" class="w-100 btn"> Shrinkage report</a>
            <a href="shade-brand-report.php" class="w-100 btn"> Shade brand report</a>

            <a href="gsm-report.php" class="w-100 btn"> Gsm report</a>
            <a href="store-summary.php" class="w-100 btn"> summary </a>
          </div>

            <a href="received-inventory-area.php" class="w-100 btn">
              Received inventory area
            </a>

            <a href="keeping-area.php" class="w-100 btn">
              Keeping area
            </a>

            <a href="received-recognition.php" class="w-100 btn">
              Received recognition
            </a>
            <a href="store-issue.php" class="w-100 btn">
              Issue
            </a>
            <a href="#!" class="w-100 btn">
              Summary
            </a>
            <a href="#!" class="w-100 btn">
              Stationary 
            </a>
            <a href="store-stock.php" class="w-100 btn">
              Stock
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- store-end -->
    <!-- Cutting-start  -->
    <div class="accordion-item">
      <div class="accordion-header" id="Cutting-contain">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Cutting" aria-expanded="true" aria-controls="Cutting">
          Cutting
        </button>
      </div>
      <div id="Cutting" class="accordion-collapse collapse" aria-labelledby="Cutting-contain" data-bs-parent="#Cutting">
        <div class="accordion-body">
          <div class="link-list">
            <a href="#!" class="mt-1 w-100 btn">
              Create Recognition
            </a>
            <a href="#!" class="mt-1 w-100 btn">
              Cutting planning
            </a>

            <a href="#!" class="w-100 btn">
              Cutting update
            </a>
            <a href="#!" class="w-100 btn">
              Received recognition
            </a>

            <a href="#!" class="w-100 btn">
              Issue
            </a>
            <a href="#!" class="w-100 btn">
              Summary
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Cutting-end -->
    <!-- Sewing-start -->
    <div class="accordion-item">
      <div class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sewing" aria-expanded="true" aria-controls="sewing">
          Sewing
        </button>
      </div>
      <div id="sewing" class="accordion-collapse collapse" aria-labelledby="sewing-contain" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <a href="#!" class="accordion-header" id="create-sewing-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#create-sewing" aria-expanded="true" aria-controls="create-sewing">
              Create sewing line
            </button>
          </a>
          </button>
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#line" aria-expanded="true" aria-controls="line" data-bs-parent="#sewing">
            Sewing line, no-01
          </button>
          <div id="line" class="accordion-collapse collapse" aria-labelledby="line-contain" data-bs-parent="#line">
            <a href="#!" class="mt-1 w-100 btn"> Production planning </a>

            <a href="#!" class="w-100 btn"> Create store recognition </a>

            <a href="#!" class="w-100 btn"> Create cutting recognition </a>

            <a href="#!" class="w-100 btn"> Production update  </a>
            <a href="#!" class="w-100 btn"> summary </a>
          </div>
        </div>

        <div class="accordion-body bg-light">
          <div class="accordion-header" id="Line2-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Line2" aria-expanded="true" aria-controls="Line2">
              sewing Line, no-02
            </button>
          </div>
          <div id="Line2" class="accordion-collapse collapse" aria-labelledby="Line2-contain" data-bs-parent="#Line2">
            <a href="#!" class="mt-1 w-100 btn"> Production planning </a>

            <a href="#!" class="w-100 btn">
              Create store recognition
            </a>

            <a href="#!" class="w-100 btn"> Create cutting recognition </a>

            <a href="#!" class="w-100 btn">
              Production update
            </a>
            <a href="#!" class="w-100 btn">
              Summary
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Sewing-end -->
    <!-- finishing-start -->
    <div class="accordion-item">
      <div class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#finishing" aria-expanded="true" aria-controls="finishing">
          Finishing
        </button>
      </div>
      <div id="finishing" class="accordion-collapse collapse" aria-labelledby="finishing-contain" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <a href="#!" class="accordion-header" id="finishing-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#finishing" aria-expanded="true" aria-controls="finishing">
              Create finishing line
            </button>
          </a>
          </button>
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#finishing-line" aria-expanded="true" aria-controls="finishing-line" data-bs-parent="#finishing">
            Finishing line, no-01
          </button>
          <div id="finishing-line" class="accordion-collapse collapse" aria-labelledby="finishing-line-contain" data-bs-parent="#finishing-line">
            <a href="#!" class="mt-1 w-100 btn"> Production planning </a>

            <a href="#!" class="w-100 btn"> Create store recognition </a>

            <a href="#!" class="w-100 btn"> Create cutting recognition </a>

            <a href="#!" class="w-100 btn"> Production update  </a>
            <a href="#!" class="w-100 btn"> summary </a>
          </div>
        </div>

        <div class="accordion-body bg-light">
          <div class="accordion-header" id="finishing-line2-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#finishing-line2" aria-expanded="true" aria-controls="finishing-line2">
              Finishing line, no-02
            </button>
          </div>
          <div id="finishing-line2" class="accordion-collapse collapse" aria-labelledby="finishing-line2-contain" data-bs-parent="#finishing-line2">
            <a href="#!" class="mt-1 w-100 btn"> Production planning </a>

            <a href="#!" class="w-100 btn">
              Create store recognition
            </a>

            <a href="#!" class="w-100 btn"> Create cutting recognition </a>

            <a href="#!" class="w-100 btn">
              Production update
            </a>
            <a href="#!" class="w-100 btn">
              Summary
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- finishing-end -->
    <!-- packing-start -->
    <div class="accordion-item">
      <div class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#packing" aria-expanded="true" aria-controls="packing">
          Packing
        </button>
      </div>
      <div id="packing" class="accordion-collapse collapse" aria-labelledby="packing-contain" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <a href="#!" class="accordion-header" id="packing-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#packing" aria-expanded="true" aria-controls="packing">
              Create packing line
            </button>
          </a>
          </button>
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#packing-line" aria-expanded="true" aria-controls="packing-line" data-bs-parent="#packing">
            packing line, no-01
          </button>
          <div id="packing-line" class="accordion-collapse collapse" aria-labelledby="packing-line-contain" data-bs-parent="#packing-line">
            <a href="#!" class="mt-1 w-100 btn"> Production planning </a>

            <a href="#!" class="w-100 btn"> Create store recognition </a>

            <a href="#!" class="w-100 btn"> Create cutting recognition </a>

            <a href="#!" class="w-100 btn"> Production update  </a>
            <a href="#!" class="w-100 btn"> summary </a>
          </div>
        </div>

        <div class="accordion-body bg-light">
          <div class="accordion-header" id="packing-line2-contain">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#packing-line2" aria-expanded="true" aria-controls="packing-line2">
              packing line, no-02
            </button>
          </div>
          <div id="packing-line2" class="accordion-collapse collapse" aria-labelledby="packing-line2-contain" data-bs-parent="#packing-line2">
            <a href="#!" class="mt-1 w-100 btn"> Production planning </a>

            <a href="#!" class="w-100 btn">
              Create store recognition
            </a>

            <a href="#!" class="w-100 btn"> Create cutting recognition </a>

            <a href="#!" class="w-100 btn">
              Production update
            </a>
            <a href="#!" class="w-100 btn">
              Summary
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- packing-end -->
    <!-- Inspection-start  -->
    <div class="accordion-item">
      <div class="accordion-header" id="inspection-contain">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#inspection" aria-expanded="true" aria-controls="inspection">
          Inspection
        </button>
      </div>
      <div id="inspection" class="accordion-collapse collapse" aria-labelledby="inspection-contain" data-bs-parent="#inspection">
        <div class="accordion-body">
          <div class="link-list">
            <a href="#!" class="mt-1 w-100 btn">
              Inline inspection
            </a>
            <a href="#!" class="mt-1 w-100 btn">
              Free final inspection
            </a>

            <a href="#!" class="w-100 btn">
              Final inspection
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Inspection-end -->
  </div>
  <!-- Accrodion-main-part-end -->
</div>
<!-- SideBar-end -->