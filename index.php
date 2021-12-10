<!DOCTYPE html>
<html>

<link rel="stylesheet" href="sass/custom.css">
<!--importo los iconos-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'config.php'; ?>
<head>
<?php include 'includes/navbar.php'; ?>
</head>


<body style="background-color:#EFEAEB;">
<div id="carouselExampleControls" class="carousel slide p-3" data-bs-ride="carousel" style="width:75%;margin:auto;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slider1.PNG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slider2.PNG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slider3.PNG" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php include 'includes/footer.php'; ?>

</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>