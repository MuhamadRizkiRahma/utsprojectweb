<?php
    require_once('database.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Daftar Notes</title>
  </head>
  <body>
  <div class="container">
  <div class="card bg-dark text-white" width="150" height="200"><br>
  <ul>
            <div class="row">
            <div class="col-md-3">
                <p>Selamat datang member</p>
            </div>
            <div class="col-md-7">
                <center>
                <h3>Inventaris SMK Bakti Nusantara 666</h3>
                </center>
            </div>
            <a href="login.php" class="bn17">LOGOUT</a><br><br>
            </div>
        </div>
</ul>
</div>
</div>
    <?php
      session_start();
      if($_SESSION['status']!="login"){
          header("location:login.php?pesan=belum_login");
      }else{
        include("navbar.php");
      }
    ?>
    <div class="d-flex justify-content-center">
    <div class="container">
      <div class="card bg-dark text-white">
  <img src="img/blue-energy.jpg" class="card-img" alt=100% width="100" height="400">
  <div class="card-img-overlay"><br>
  <ul>
    <center>
    <h1>This site only can see By Admin</h1>
    </center><br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptas nobis minima dignissimos molestias commodi recusandae temporibus atque debitis aspernatur id dolore possimus, qui distinctio adipisci exercitationem dolorem fuga quo. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo odit repudiandae fugit soluta rem ipsa placeat architecto sequi nisi porro culpa dignissimos reiciendis deserunt dolorum ad, voluptas molestiae facere vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iste illum consequatur mollitia magni fuga tempora cupiditate, quisquam nemo voluptatum obcaecati ipsa asperiores voluptatem similique accusamus esse tenetur eos corrupti.</p>
    </ul>
    </div>
    </div>
    </div>
    </div><br><br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><center>Copyleft@2023 - PT. Iotech Studio</center></a>
      </nav>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>