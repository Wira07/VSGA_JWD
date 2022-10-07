<?php
	include "koneksi.php";

	extract($_POST);

	$perintah = mysqli_query($db, "insert into produk values('$idproduk','$namaproduk','$jumlah')");
	if($perintah) {
		echo "Data Anggota Berhasil Disimpan";
	}
	else {
		echo "Data Anggota Gagal Disimpan";
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
	<br><br>	
		<a href="produk.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
  </body>
</html>