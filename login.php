<?php
session_start();
$title = "Login";

include 'header.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === "admin@limedevs.com" || $password === "limeAdmin"){
         $_SESSION['login'] = "true";
         $_SESSION['name'] = "Admin";
       header('Location:index.php');
    }
    else {
        header('Location:login.php');
    }
}
?>
<div class="container">
  <div class="row">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="height-100 form-login m-auto d-flex justify-content-center align-items-center flex-column">
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="email" placeholder=".....@email.com">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="......">
    </div>
    <input type="submit" class="btn bg-primary text-white" value="Submit" name="submit">
  </form>
  </div>
</div>
<?php
include 'footer.php';
?>