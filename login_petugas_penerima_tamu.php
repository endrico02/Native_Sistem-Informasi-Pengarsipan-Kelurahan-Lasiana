<?php include "koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/bootstrap-login-form.min.css" />
</head>

<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5" align="center">
            
            <img src="assets/logo.png" class="img-fluid" width="300px" alt="Sample image">
            <h4>Sistem Informasi Pengarsipan <br> Kelurahan Lasiana</h4>
            
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Selamat Datang <b>Petugas Penerima Tamu</b></p>
            </div>

            <div class="divider d-flex align-items-center my-4"></div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" class="form-control form-control-lg"
                placeholder="Enter a valid username" />
              <label class="form-label" for="form3Example3">Username</label>
            </div>



            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="password" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- <div class="d-flex justify-content-between align-items-center">
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div> -->

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <a href="index.php" class="btn btn-info btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Kembali</a>
              <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                  class="link-danger">Register</a></p> -->
            </div>

          </form>
        </div>
      </div>
    </div>
   
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>
<?php 
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];

    $query1   = mysqli_query($conn, "SELECT username, password FROM users WHERE username='$username' LIMIT 1");
    $cek1     = mysqli_num_rows($query1);
    if($cek1){
      // echo $password;
      $data   = mysqli_fetch_assoc($query1);
      if (password_verify($password, $data['password'])) {
        // echo 'Password is valid!';
      } else {
          // echo 'Invalid password.';
      }
    }
  }
?>