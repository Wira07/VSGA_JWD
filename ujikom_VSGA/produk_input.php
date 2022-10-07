<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><img src="img/logo.png" height="90px" width="90px">CLUB MOTOR</h1>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="homepage.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="visimisi.php">Visi dan Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
                  <li><a class="dropdown-item" href="event.php">Event</a></li>
                  <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                  <li><a class="dropdown-item" href="klien.php">Klien</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <br><br>
        <h1>TAMBAH PRODUK</h1><br>
        <p class="lead">
          <a href="produk.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
          <br>
        <form method="post" action="produk_simpan.php">
          <div class="mb-3">
            <label for="idproduk" class="form-label">Id Produk</label>
            <input type="text" class="form-control" name="idproduk" id="idproduk" autofocus required>
          </div>
          <div class="mb-3">
            <label for="namaproduk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="namaproduk" id="namaproduk">
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
</form>
      <br><br>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-footer text-muted">
        Copyright 2022. Club Motor
      </div>
    </div>


</body>
</html>