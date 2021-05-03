<?php
session_start();
$title = "Received inventory area";
    include 'header.php';
    include 'navbar.php';
?>
 <div class="container-fluid m-0">
      <div class="row">
        <div class="col-md-3 p-0">
        <?php include "sidebar.php";?>
        </div>
        <div class="col-md-9">
          <div id="main">
            <h2 class="text-center pt-3">Received inventory area </h2>
            <form class="m-auto">
        <div class="table-responsive">
          <span class="badge bg-primary">Style</span>
          <table class="table">
            <thead>
              <tr class="text-center">
                <th>Si.no</th>
                <th>Item Name</th>
                <th>Color</th>
                <th>Invoice no</th>
                <th>Size wise inventory</th>
                <th class="cursor">received Quantity</th>
                <th class="cursor">Inventory quantity</th>
                <th>quantity</th>
                <th>Send information</th>
                <th>Remark</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>1</td>
                <td>Shirt</td>
                <td>1</td>
                <td>100</td>
                <td>40</td>
                <td>
                  <select name="recived-quantity form-select form-select-sm" id="recived-quantity">
                    <option value="111">111</option>
                    <option value="recived-quantity-toogle">Recived modal</option>
                  </select>
                </td>
                <td>
                  <select name="inventory-quantity form-select form-select-sm" id="inventory-quantity">
                    <option value="200">200</option>
                    <option value="inventory-quantity-toogle">Inventory modal</option>
                  </select>
                </td>
                <td>110</td>
                <td>110</td>
                <td>110</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- popup-one-start -->
        <form onsubmit="return false;">
        <div class="mb-2 recived-quantity-content">
          <div class="closes">
          <i class="far fa-times-circle close"></i>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Size</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>XXXL</th>
              </tr>
              <tr>
                <th>Quantity</th>
                <td>100</td>
                <td>90</td>
                <td>90</td>
                <td>84</td>
                <td>09</td>
                <td>21</td>
              </tr>
              <tr>
                <th>Received quantity</th>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
              </tr>
              <tr>
                <td>Balncing</td>
                <td>2</td>
                <td>3</td>
                <td>5</td>
                <td>52</td>
                <td>2</td>
                <td>9</td>
              </tr>
            </thead>
          </table>
          <button class="btn bg-primary mb-3 text-white">
            Submit
          </button>
        </div>
        </form>
        <!-- popup-one-end -->
        <!-- popup-two-start -->
        <form onsubmit="return false;">
        <div class="mb-2 inventory-quantity-content">
          <div class="closes">
          <i class="far fa-times-circle close2"></i>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Size</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>XXXL</th>
              </tr>
              <tr>
                <th>Quantity</th>
                <td>100</td>
                <td>90</td>
                <td>90</td>
                <td>84</td>
                <td>09</td>
                <td>21</td>
              </tr>
              <tr>
                <th>Inventory quantity</th>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
              </tr>
              <tr>
                <td>Balncing</td>
                <td>2</td>
                <td>3</td>
                <td>5</td>
                <td>52</td>
                <td>2</td>
                <td>9</td>
              </tr>
            </thead>
          </table>
          <button class="btn bg-primary mb-3 text-white">
            Submit
          </button>
        </div>
        </form>
        <!-- popup-two-end -->
        <button class="btn bg-primary mb-3 text-white">
        <i class="far fa-file-excel"></i>
          Excel
        </button>
        <button class="btn bg-primary mb-3 text-white">
          <i class="fas fa-print"></i>
          Print
        </button>
        <button class="btn bg-primary mb-3 text-white">
          <i class="far fa-file-pdf"></i>
          pdf
        </button>
      </form>
          </div>
        </div>
      </div>
 </div>
 <div class="overlay"></div>
<script>
var recived_btn = document.querySelector('#recived-quantity');
var inventory_btn = document.querySelector('#inventory-quantity');
var recived_active = document.querySelector('.recived-quantity-content');
var inventory_active = document.querySelector('.inventory-quantity-content');
var overlay = document.querySelector('.overlay');
var closeIcon = document.querySelector('.close');
var closeTwo = document.querySelector('.close2');

var Form = document.querySelector('form');
Form.addEventListener('submit',(e)=>{
  e.preventDefault();
});
var recived_model = ()=>{
    var value = recived_btn.value;
    if (value === 'recived-quantity-toogle') {
        recived_active.classList.add('active');
        overlay.classList.add('active');
    }
}
var inventory_model = ()=>{
    var value = inventory_btn.value;
    if (value === 'inventory-quantity-toogle') {
        inventory_active.classList.add('active');
        overlay.classList.add('active');
    }
}
recived_btn.addEventListener('change',recived_model);
inventory_btn.addEventListener('change',inventory_model);
closeIcon.addEventListener('click',()=>{
       recived_active.classList.remove('active');
      overlay.classList.remove('active');
});
closeTwo.addEventListener('click',()=>{
      inventory_active.classList.remove('active');
      overlay.classList.remove('active');
})
window.addEventListener('click',(e)=>{
  if (e.target === overlay) {
       recived_active.classList.remove('active');
       inventory_active.classList.remove('active');
      overlay.classList.remove('active');
  }
});
// console.log(clickicon.options[clickicon.selectedIndex].value);
</script>
<?php
include 'footer.php'
?>