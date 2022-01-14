<?php
include 'dbconnect.php';
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tara</title>
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
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>

            </div>

        </section>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <br>
                <br>
                <h1>
                    <center>Relax your Mind </center>
                </h1>
                <br>
                </>
            </div>
            <div class="container">
                <div class="banner_content text-center">
                </div>

                <style>
                    body {
                        background-image: url('images/Display.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                    }

                    .jumbotron {
                        background-color: gray;
                        color: #ffffff;
                    }
                </style>

                <body>
                    <div class="jumbotron text-center">

                        <ul>
                            <h1> STYLISHLY DESIGNED WITH
                                <br>
                                YOUR COMFORT IN MIND
                            </h1>
                        </ul>
                    </div>
            </div>

            <center><a class="btn btn-primary bg-opacity-50" aria-current="page" href="Getstarted.php" role="button"> Click Here For More Rooms And Booking</a></center>
            <br>
            <section class="accomodation_area section_gap">
                <div class="container">
                    <div class="section_title text-center">
                        <h2 class="title_color">Normal Accomodation</h2>
                        <h3>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</h3>
                    </div>
                    <div class="row accomodation_two">
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2EEDxPgqGuTwWWa0puG3oPoAeYzTbKR0YNQ&usqp=CAUU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Double Deluxe Room</h4>
                                </a>
                                <h5>2500/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoIMQm9C1m9IJkTl2kx_lpSShG1-HOBK3o4Q&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Single Deluxe Room</h4>
                                </a>
                                <h5>2000/-<small>/night</small></h5>
                                <br>
                            </div>

                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSicWciM14dkNibMmSsv4Jv83vXEJf3LbOs1Q&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Honeymoon Suit</h4>
                                </a>
                                <h5>7500/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZLyyWnV-gDOhD7yBxhXhP504A5aFmzj7cIg&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Economy Double</h4>
                                </a>
                                <h5>5000/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN3qfg4_3_SspNhSFFAXN6OhF2lBDObruA1w&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Single</h4>
                                </a>
                                <h5>2000/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3NNyqYnr1W0XhMPyhe_0CkAm8ChJ4JvwfYw&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">triple</h4>
                                </a>
                                <h5>2500/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrS7M1cRuSaOhL5RT6qOZ63_kgBR1HBZ3bPw&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">kingsize Room</h4>
                                </a>
                                <h5>3500/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQifpwaA4r43Py6j_9QzgciAPDP-FC4i6K0FA&usqp=CAU" alt="">
                                    <br>
                                    <br>
                                    <a href="#" class="btn theme_btn btn-warning">Book Now</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Queensize Room</h4>
                                </a>
                                <h5>3500/-<small>/night</small></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ Accomodation Area  =================-->
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>