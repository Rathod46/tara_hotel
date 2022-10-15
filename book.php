<?php
include 'dbconnect.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="book.css">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>


    <main>
        <div class="container register">

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <p>Spend Quality Holidays With Us</p>
                    <img src="https://www.clipartmax.com/png/middle/193-1933973_sheila-raheja-institute-of-hotel-management-hotel-manager-cartoon-chef.png" alt="" />
                    <p>Food Service Facility means any facility engaged in the preparation of food for human consumption and/or serving of meals, short orders, sandwiches, frozen desserts or other edible products.</p>
                    <br>
                    <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiKJJ4SKIT7lJoeSyproaelsj_fT4DMHL1JA&usqp=CAU" alt="" />
                    <p>Room service or in-room dining is a hotel service enabling guests to choose items of food and drink for delivery to their hotel room for consumption. Room service is organised as a subdivision within the food and beverage d</p>
                </div>
                <div class="col-md-9 register-right">


                    <div class="container">

                        <form action="/tara_hotel/book.php" method="POST">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $showAlert = false;

                                include 'dbconnect.php';
                                $Fname = $_POST["Fname"];
                                $Lname = $_POST["Lname"];
                                $Address1 = $_POST["Address1"];
                                $Address2 = $_POST["Address2"];
                                $City = $_POST["City"];
                                $State = $_POST["State"];
                                $Roomno = $_POST["Roomno"];
                                $Pincode = $_POST["Pincode"];
                                $RoomPreference = $_POST["RoomPreference*"];
                                $gender = $_POST["gender"];
                                $email = $_POST["email"];
                                $password = $_POST["password"];
                                $cpassword = $_POST["cpassword"];
                                $phoneno = $_POST["phoneno"];
                                $Question = $_POST["Question"];
                                $answer = $_POST["answer"];
                                $Arrivaldate = $_POST["Arrivaldate"];
                                $checkintime = $_POST["checkintime"];
                                $checkouttime = $_POST["checkouttime"];
                                $Departuretime = $_POST["Departuretime"];
                                $Adults = $_POST["Adults"];
                                $Children = $_POST["Children"];

                                $sql = "INSERT INTO `reservation_details` (`First_name`, `Last_name`, `Address_1`, `Address_2`, `City`, `State`, `Room_no`, `Pin_code`, `Room_preference`, `gender`, `Email_ID`, `Password`, `conferm_Password`, `Phone_no`, `Question`, `Answer`, `Arrival_date`, `Check_in_time`, `Check_out_time`, `Departure_date`, `Adults`, `Children`) VALUES ('$Fname', '$Lname', '$Address1', '$Address2', '$City', '$State', '$Roomno', '$Pincode', '$RoomPreference', '$gender', '$email', '$password', '$cpassword', '$phoneno', '$Question', '$answer', '$Arrivaldate', '$checkintime', '$checkouttime', '$Departuretime', '$Adults', '$Children');";
                                $result = mysqli_query($conn, $sql);
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

                            <h2 class="register-heading">Hotel Tara</h2>
                            <br>
                            <br>
                            <br>
                            <h3 class="register-heading">Reservation Details</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="Fname" id="Fname" class="form-control" placeholder="First Name *">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="Lname" id="Lname" class="form-control" placeholder="Last Name *">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="phoneno" name="phoneno" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="Roomtype" id="RoomType" name="RoomType" class="form-control" placeholder="RoomType *" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="Number of Rooms" id="Number of Rooms" name="Number of Rooms" class="form-control" placeholder="Number of Rooms *" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="Reservation_no" id="Reservation_no" name="Reservation_no" class="form-control" placeholder="Reservation_no *" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="Check-in DATE " id="Check-in DATE " name="Check-in DATE " class="form-control" placeholder="Check-in DATE  *" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="Check-Out date" id="Check-Out date" name="Check-Out date" class="form-control" placeholder="Check-Out date *" />
                                    </div>
                                    <div>
                                    <a class="btn btn-primary" href="index.php" role="button">Submit</a>
                                        <a class="btn btn-warning btnwarning" href="index.php" role="button">Home</a>
                                    </div>


                                    


                                </div>
                            </div>





    </main>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>


<?php

// $fn = $_GET['Firstname'];
// $ln = $_GET['Lastname'];
// $An = $_GET['Address1'];
// $An = $_GET['Address2'];
// $cn = $_GET['city'];
// $sn = $_GET['state'];
// $Rn = $_GET['Roomno'];
// $Pn = $_GET['Pincode'];
// $Rn = $_GET['Roomreferences'];
// $Gn = $_GET['Gender'];
// $En = $_GET['Email'];
// $pwd = $_GET['Password'];
// $Cn = $_GET['Confirmpassword'];
// $pn = $_GET['phone'];
// $fn = $_GET['Question'];
// $Qn = $_GET['Answer'];
// $An = $_GET['Arrivaldate'];
// $cn = $_GET['checkin'];
// $cn = $_GET['checkout'];
// $dn = $_GET['departuredate'];
// $An = $_GET['Adults'];
// $cn = $_GET['children'];

// echo "$fn";
// echo "$ln";
// echo "$An";
// echo "$An";
// echo "$cn";
// echo "$sn";
// echo "$Rn";
// echo "$Pn";
// echo "$Rn";
// echo "$Gn";
// echo "$En";
// echo "$pwd";
// echo "$Cn";
// echo "$Qn";
// echo "$An";
// echo "$cn";
// echo "$cn";
// echo "$dn";
// echo "$An";
// echo "$cn";


// $query = "INSERT INTO RESERVATION_DATAILS VALUES ('$fn','$ln','$An','$An','$cn',$sn','$Rn','$Pn','$Rn','$Gn','$En','$pwd','$Cn','$Qn','$An','$cn','$cn','$dn','$An','$cn')";

// $data = mysqli_query($conn, $query);

// if ($data) {
//     echo "Data inserted into Database";
// } else " Failed to insert Data inserted into Database";
?>