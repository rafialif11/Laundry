<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-info text-white text-center">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
</div>

<br>
<center>

    <div class="col-lg-4 col-9">
        <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>Rp 20.000</h3>
                 <p>Saldo </p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
</div>

<div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  <h3>Rp 20.000</h3>
                  
                  <p>Saldo </p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div>
        
    </center>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url()?>assets/img/img4.jpg" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url()?>assets/img/img2.png" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url()?>assets/img/img3.jpg" class="d-block w-100" alt="Image 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<div class="container">
    <div class="row p-5">
        <div class="col-md-6">
            <img src="<?php echo base_url()?>assets/img/img1.jpg" class="img-fluid"/>
        </div>
        <div class="col-md-6">
            <h1>Laundry 1</h1>
            <p>Laundry.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row p-5">
        <div class="col-md-6">
            <h1>Laundry 2</h1>
            <p>Laundry.</p>
        </div>
        <div class="col-md-6">
            <img src="<?php echo base_url()?>assets/img/img1.jpg" class="img-fluid"/>
        </div>
    </div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>

<div class="mb-3">
  <label for="basic-url" class="form-label">Your vanity URL</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="container-fluid p-5 bg-success text-white text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5816632777905!2d106.74191281476965!3d-6.318551395427213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efea65d10015%3A0xf855c6c6ce2fbdbb!2sSMK%20Muhammadiyah%203%20Tangsel!5e0!3m2!1sid!2sid!4v1663410173422!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="container-fluid p-5 bg-dark text-white text-center">
    <p>Copyright 2022</p>
</div>

</body>
</html>
