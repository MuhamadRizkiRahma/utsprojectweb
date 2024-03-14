<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

<?php
      session_start();
      if($_SESSION['status']!="login"){
        header("location:login.php?msg=belum_login");
      }
    ?>
<ul>
<div class="card bg-dark text-white">
  <img src="img/2075695.jpg" class="card-img" width="150" height="130">
  <div class="card-img-overlay">
        <div class="container"><br>
            <div class="row">
            <div class="col-xl-2">
                <img src="img/smpl.png" width=50 heigth=100>
            </div>
            <div class="col-md-8">
                <center>
                <h3>Inventaris SMK Bakti Nusantara 666</h3>
                </center>
            </div>
            <a href="/" class="bn17">LOGOUT</a>
            </div>
        </div>
</div>
</div>
</div>
</ul>
<div class="d-flex justify-content-center">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="homemember.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="peminjaman.php">Peminjaman</a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="pengembalian.php">Pengembalian</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="kontak.php">kontak</a>
      </li>
    </ul>
  </div>
</nav>
  </div>
</div>
</div><br>
<div class="container">
  <div class="row">
  <div class="card text-light bg-dark" alt=100%>
  <div class="col-md-12">
    <ul><u>
      <h2><center>Pengembalian Toolss</center></h2></u>
      <h3>SMK Bakti Nusantara 666</h3></u>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat minima quisquam magnam dicta illo similique labore aliquam error voluptas rerum, cupiditate distinctio! Explicabo laboriosam pariatur deserunt. Deleniti officiis animi eligendi!</p>
    </ul>
  </div>
</div>
</div>
</div><br>
<div class="container">
  <div class="row">
    <div class=col-md-12>
  <div class="card text-dark" alt=100%>
    <ul><br>
    <form action="/url" method="GET">
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NoTelp</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tanggal Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-dark btn-lg btn-block"><a class="link" href="kembalikan.php">Kembalikan</button>
    </form>
</ul>
</div>
</div>
</div>
</div><br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><center>Copyleft@2023 - PT. Iotech Studio</center></a>
      <a href="login.php"><button>LOGOUT</button></a>
      
      </nav>
      </div>
</body>
</html>