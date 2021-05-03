<?php
session_start();
$title = "Received oriented area";
include "header.php";
include "navbar.php";
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 p-0">
      <?php include "sidebar.php"; ?>
    </div>
    <div class="col-md-9">
      <h2 class="text-center pt-3">Received oriented area </h2>
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
                <th>Quantity</th>
                <th class="cursor">received Quantity</th>
                <th>Balncing</th>
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
                    <option value="recived-quantity-toogle">open modale</option>
                  </select>
                </td>
                <td>110</td>
                <td>110</td>
              </tr>
            </tbody>
          </table>
        </div>
        <form onsubmit="my(); return false">
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
<div class="overlay"></div>
<script>
var clickicon = document.querySelector('#recived-quantity');
var recived_active = document.querySelector('.recived-quantity-content');
var overlay = document.querySelector('.overlay');
var closeIcon = document.querySelector('.close');
clickicon.addEventListener('change',()=>{
  var value = clickicon.value;
  if (value === 'recived-quantity-toogle') {
      recived_active.classList.add('active');
      overlay.classList.add('active');
  }
});
closeIcon.addEventListener('click',()=>{
       recived_active.classList.remove('active');
      overlay.classList.remove('active');
});
window.addEventListener('click',(e)=>{
  if (e.target === overlay) {
       recived_active.classList.remove('active');
      overlay.classList.remove('active');
  }
});
// console.log(clickicon.options[clickicon.selectedIndex].value);
</script>

<?php
include "footer.php";
?>