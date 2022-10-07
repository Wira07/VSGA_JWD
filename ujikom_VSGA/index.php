<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <?php 
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
          echo "
                <script>
                  alert('Anda Gagal Login');
                </script>
                ";
        } 
        else if($_GET['pesan'] == "logout"){
          echo "Anda telah berhasil logout";
        }
        else if($_GET['pesan'] == "belum_login"){
          echo "Anda harus login untuk mengakses halaman admin";
        }
      }
    ?>

    <div class="container">
    <h1>Login</h1>
    <form action="cek_login.php" method="post">
      <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>