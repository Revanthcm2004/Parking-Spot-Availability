<?php
include('home_header.php');
?>
<style>
  body {
    background-color: #f8f9fa;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
  .main-content {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 40px;
    padding-bottom: 40px;
  }
 .login-card {
  background-color: #eef6fb; /* Light pastel blue */
  box-shadow: 0 6px 24px 0 rgba(0,0,0,.09);
  border-radius: 16px;
  padding: 2rem;
  min-width: 350px;
  max-width: 100%;
}
  /* Motion and focus */
  .login-card,
  .navbar,
  footer {
    animation: fadeIn 1s ease forwards;
    opacity: 0;
  }
  @keyframes fadeIn { to { opacity: 1; } }
  .btn-success {
    transition: background-color 0.3s, box-shadow 0.3s;
  }
  .btn-success:hover {
    background-color: #28a745cc;
    box-shadow: 0 4px 8px rgba(40,167,69,.5);
  }
  input:focus {
    border-color: #28a745;
    box-shadow: 0 0 8px #28a745a1;
    outline: none;
  }
  a.text-decoration-none {
    transition: color 0.3s, text-decoration 0.3s;
  }
  a.text-decoration-none:hover {
    color: #28a745;
    text-decoration: underline;
  }
  footer {
    background: transparent;
  }
  @media (max-width: 991px) {
    .main-content {
      flex-direction: column;
      gap: 2rem;
    }
  }
</style>

<!-- Header/Navbar -->

<!-- Main Content (centered image + login card) -->
<div class="container main-content">
  <div class="row w-100 align-items-center justify-content-center">
    <div class="col-lg-6 col-md-7 mb-3 mb-md-0 d-flex justify-content-center">
      <img src="img/1.jpeg" class="img-fluid rounded shadow" alt="Parking Image" style="max-width: 500px;">
    </div>
    <div class="col-lg-5 col-md-5 d-flex justify-content-center">
      <div class="login-card">
        <h3 class="text-center mb-4">User Login</h3>
        <form action="" method="post" enctype="multipart/form-data" novalidate>
          <div class="mb-3 row align-items-center">
            <label for="uname" class="col-4 col-form-label">User Name</label>
            <div class="col-8">
              <input type="text" class="form-control" id="uname" name="uname" required placeholder="Enter your username">
            </div>
          </div>
          <div class="mb-4 row align-items-center">
            <label for="pass" class="col-4 col-form-label">Password</label>
            <div class="col-8">
              <input type="password" class="form-control" id="pass" name="pass" required placeholder="Enter your password">
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-8 offset-4">
              <input type="submit" value="Login" class="btn btn-success shadow-none w-100" name="save">
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <a href="customer_register.php" class="text-decoration-none">Sign Up</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer / Copyright -->
<footer class="container-fluid">
  <div class="d-flex justify-content-end px-3 py-2">
    <span class="text-secondary">Copyright © 2025</span>
  </div>
</footer>

<?php
include('home_footer.php');
include('config.php');
if(isset($_POST["save"]))
{
    session_start();

    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $sql = mysqli_query($mysqli, "select * from customer where uname='$uname' and pass='$pass'");
    if ($rs = mysqli_fetch_array($sql)) {
        $_SESSION["name"] = $rs['name'];
        $_SESSION["uid"] = $rs['id'];
        $_SESSION["uname"] = $rs['uname'];
        $_SESSION["email"] = $rs['email'];

        echo "<script> window.location.href='user_slot_display.php' </script>";
    }
    else{
        echo("<script> alert('Login Failed'); </script>");
    }
}
?>
