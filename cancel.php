<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $showAlert = false;

  include 'dbconnect.php';
  $Reservation_no = $_POST["Reservation_no"];
  $sql = "INSERT INTO `book` (`Reservation_no`)VALUES ('$Reservation_no');";

  if ($result) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!!!!!!!</strong> Submitted
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
  } else {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Warning!!!!!!!</strong> Invalid 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
  }
}

?>


<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>tara</title>
  <style>
    body {
      background-image: url('https://r1imghtlak.mmtcdn.com/5df608487b2e11e78f1e0224510f5e5b.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,35&output-format=jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    .jumbotron {
      background-color: gray;
      color: #ffffff;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="book.php">Booking</a>
            </li>
            <li class="nav-item dropdown">

            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cancel.php">Cancel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="staff.php">Our staff</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main>
    <form action="/tara_hotel/cancel.php" method="POST">

      <!-- <br>
    <h2>
      <center>
        <p>Are you sure</p>
        <p> you wanna to cancel this Booking ?</p>
      </center>
    </h2>
    <br>
    <center> -->

      <div class="col-md-6">
        <div class="form-group">
          <div class="row register-form">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" name="Reservation_no" placeholder="Reservation_no *" value="" />
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row mb-4">
          <div class="col text-center">

            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        </center>
    </form>
  </main>
</body>

</html>