<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getstarted</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Getstarted.php">
    <!------ Include the above in your HEAD tag ---------->
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
        <body>
            <div class="jumbotron text-center">
            <div class="section_title text-center">
                <h1 class="title_color">Welcome :)</h1>
                <br> 

                <section class="accomodation_area section_gap">
                    <div class="container">
                        <div class="section_title text-center">
                            <h2 class="title_color">Types of Rooms Available</h2>
                            <br>
                            <h3>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast </h3>
                        </div>
                        <br>
                        <a href="book.php" class="btn theme_btn btn-warning">Book Now</a>
                        <br>
                        <br>
                       
                    </div>
                </section>
                <!--================ Accomodation Area  =================-->
                <div class="row accomodation_two ">
                            <div class="col-lg-3 col-sm-6">
                                <div class="accomodation_item text-center">
                                    <div class="hotel_img">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2EEDxPgqGuTwWWa0puG3oPoAeYzTbKR0YNQ&usqp=CAUU" alt="">
                                        <br>
                                        <br>
                                       
                                    </div>

                                    <h4 class="sec_h4">Double Deluxe Room</h4>
                                    <h4 class="sec_h4">Room no:101</h4>

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
                                    </div>

                                    <h4 class="sec_h4">Single Deluxe Room</h4>
                                    <h4 class="sec_h4">Room no:145</h4>

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
                                      
                                    </div>

                                    <h4 class="sec_h4">Honeymoon Suit</h4>
                                    <h4 class="sec_h4">Room no:178</h4>

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
                                       
                                    </div>

                                    <h4 class="sec_h4">Economy Double</h4>
                                    <h4 class="sec_h4">Room no:109</h4>

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
                                       
                                    </div>

                                    <h4 class="sec_h4">Single Room</h4>
                                    <h4 class="sec_h4">Room no:136</h4>

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
                                       
                                    </div>

                                    <h4 class="sec_h4">triple</h4>
                                    <h4 class="sec_h4">Room no:140</h4>

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
                                      
                                    </div>

                                    <h4 class="sec_h4">kingsize Room</h4>
                                    <h4 class="sec_h4">Room no:187</h4>

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
                                       
                                    </div>

                                    <h4 class="sec_h4">Queensize Room</h4>
                                    <h4 class="sec_h4">Room no:192</h4>

                                    <h5>3500/-<small>/night</small></h5>
                                    <br>
                                </div>
                            </div>
                        </div>
        <div class="row accomodation_two">
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2EEDxPgqGuTwWWa0puG3oPoAeYzTbKR0YNQ&usqp=CAUU" alt="">
                        <br>
                        <br>
                       
                    </div>

                    <h4 class="sec_h4">Twin Room</h4>
                    <h4 class="sec_h4">Room no:205</h4>

                    <h5>2500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <br>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpDvmza7AsJAu0cVzaPTu-_3TyaNeR10zVSA&usqp=CAU" alt="">
                        <br>
                        <br>
                        
                    </div>

                    <h4 class="sec_h4">Quad Room</h4>
                    <h4 class="sec_h4">Room no:265</h4>

                    <h5>2000/-<small>/night</small></h5>
                    <br>
                </div>

            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPoir3XDLmkXu17k-cKrJ9H4e2dVzgaiVhbA&usqp=CAU" alt="">
                        <br>
                        <br>
                        
                    </div>

                    <h4 class="sec_h4">Hollywood Twin Room</h4>
                    <h4 class="sec_h4">Room no:246</h4>

                    <h5>7500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScg9REfkdBKB9rT5H9cR0jsr8q5GYJt_U2Bw&usqp=CAU" alt="">
                        <br>
                        <br>
                       
                    </div>

                    <h4 class="sec_h4">Economy Double</h4>
                    <h4 class="sec_h4">Room no:236</h4>

                    <h5>5000/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1TKbIteLShz6ddFUSAoRekbG9-GEPkks0Hw&usqp=CAU" alt="">
                        <br>
                        <br>
                     
                    </div>

                    <h4 class="sec_h4">Single</h4>
                    <h4 class="sec_h4">Room no:259</h4>

                    <h5>2000/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMagbFffDsFSGFBQlqaqAp1AMxcCXcCl6sLw&usqp=CAU" alt="">
                        <br>
                        <br>
                      
                    </div>

                    <h4 class="sec_h4">triple</h4>
                    <h4 class="sec_h4">Room no:240</h4>

                    <h5>2500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRTMBL4BWxkZYhdlaKo5j7oC0eSr31Gv6Lqg&usqp=CAU" alt="">
                        <br>
                        <br>
                      
                    </div>

                    <h4 class="sec_h4">kingsize Room</h4>
                    <h4 class="sec_h4">Room no:288</h4>

                    <h5>3500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3pMlf5u21eEKEi3O80C4LMnLQ1EEvUi45Dw&usqp=CAU" alt="">
                        <br>
                        <br>
                      
                    </div>

                    <h4 class="sec_h4">Queensize Room</h4>
                    <h4 class="sec_h4">Room no:238</h4>

                    <h5>3500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="row accomodation_two">
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ3GFy8NgxJFEaPO2mYzoMBSjGm1JYHC35cg&usqp=CAU" alt="">
                        <br>
                        <br>
                      
                    </div>

                    <h4 class="sec_h4">king Room</h4>
                    <h4 class="sec_h4">Room no:305</h4>

                    <h5>2500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <br>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2TJQJfPctVbborwc1ihqVkxJ7jBqWUVnDfg&usqp=CAU" alt="">
                        <br>
                        <br>
                      
                    </div>

                    <h4 class="sec_h4">Queen Room</h4>
                    <h4 class="sec_h4">Room no:316</h4>

                    <h5>2000/-<small>/night</small></h5>
                    <br>
                </div>

            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ000ZXHRDvZs_40bWxxrM6lkGKcafo8GIKRw&usqp=CAU" alt="">
                        <br>
                        <br>
                       
                    </div>

                    <h4 class="sec_h4">single Room</h4>
                    <h4 class="sec_h4">Room no:355</h4>

                    <h5>7500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0WvT7tC5jsJBfzi0_6zzpuAv5rcXz1WgWlQ&usqp=CAU" alt="">
                        <br>
                        <br>
                     
                    </div>

                    <h4 class="sec_h4">double Room</h4>
                    <h4 class="sec_h4">Room no:378</h4>

                    <h5>5000/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1TKbIteLShz6ddFUSAoRekbG9-GEPkks0Hw&usqp=CAU" alt="">
                        <br>
                        <br>
                     
                    </div>

                    <h4 class="sec_h4">attached Room</h4>
                    <h4 class="sec_h4">Room no:395</h4>

                    <h5>2000/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHNHtsd5s0lpxPg96aoJNVp3FLMFt9eXiakw&usqp=CAU" alt="">
                        <br>
                        <br>
                     
                    </div>

                    <h4 class="sec_h4">Suite Room</h4>
                    <h4 class="sec_h4">Room no:316</h4>

                    <h5>2500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP5DrJSpONTzB87lIjsOOt6Qz4uZFPj-pCtA&usqp=CAU" alt="">
                        <br>
                        <br>
                    
                    </div>

                    <h4 class="sec_h4">kids Room</h4>
                    <h4 class="sec_h4">Room no:308</h4>

                    <h5>3500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF0IpJgz_tQvYWLFwMxFDI4kTHHBuoKtkQnQ&usqp=CAU" alt="">
                        <br>
                        <br>
                        
                    </div>

                    <h4 class="sec_h4">Honeymoon suite Room</h4>
                    <h4 class="sec_h4">Room no:345</h4>

                    <h5>3500/-<small>/night</small></h5>
                    <br>
                </div>
            </div>
        </div>
        <br>
       
                            
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