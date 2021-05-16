<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === "emet@limedevs.com" || $password === "limeAdmin"){
        session_start();
         $_SESSION['login'] = "true";
         $_SESSION['name'] = "Admin";
       header('Location:index.php');
    }
    else {
        header('Location:login.php');
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="height-100 form m-auto w-50 d-flex justify-content-center align-items-center flex-column">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>