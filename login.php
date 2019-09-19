<?php 
  include 'header.php';
  error_reporting(0);
    if($_GET['login'] == "sukses"){
    echo "<script>alert('Berhasil Login')</script>";
      }elseif($_GET['login'] == "gagal"){
        echo "<script>alert('Gagal Login')</script>";
      }elseif($_GET['wajib'] == "login"){
        echo "<script>alert('Upss login dahulu..')</script>";
      }

?>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
  
          <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-9">
                <div class="card">
                  <div class="card-header">
                 <img src="../images/cxlogo.png" class="rounded mx-auto d-block" alt="" height="70" width="100"><br>
                  </div>
                    <div class="card" id="sample-login">
                  <form action="login_act.php" method="POST">
                    <div class="card-header">
                      <h4>Login to system CX</h4>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                          <label>Username</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-user"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                              </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                          </div>
                        </div>
                        <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                          <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer pt-">
                      <button type="submit" class="btn btn-primary">Login</button>
                      <a href="#" class="ml-2">Belum punya akun?</a>
                    </div>
                </div>
                </form>
        </section>
      </div>

<?php
include 'footer.php';
?>