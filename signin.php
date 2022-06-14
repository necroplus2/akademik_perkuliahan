<script src="asset/sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>

<?php 
session_start();

if(isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}


require 'fungsi.php';

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row["password"])){
      // start session signin login
      $_SESSION["login"] = true;
      // end session

      header("Location: index.php");
      exit;
    }
  }

  $error = true;

}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sign in</title>


    

    <!-- Bootstrap core CSS -->
    <link href="../../perkuliahan/asset/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="../../perkuliahan/asset/icons/font/bootstrap-icons.css">

    <style>
      h1 i {
        font-size: 60pt;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <?php if(isset($error)) : ?>
    <?php  echo "<script>
                  swal(`Username atau Password Salah !!`, `Silahkan Masukkan Username dan Password yang sesuai`, `error`);
                </script>";
  ?>
  <?php endif; ?>
<main class="form-signin">
  <form action="" method="post">
    <h1><i class="bi bi-person-square me-1"></i></h1>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="username" placeholder="name123" name="username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="password">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign In</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>


  </body>
</html>
