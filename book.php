<?php
include 'dbconnect.php';
// error_reporting(0);
$popup = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showAlert = false;

    include 'dbconnect.php';
    $Fname = $_POST["Fname"];
    $Lname = $_POST["Lname"];
    $phoneno = $_POST["phoneno"];
    $Roomtype = $_POST["RoomType"];
    $Number_of_Rooms = $_POST["NumberofRooms"];
    $Checkin = $_POST["CheckinDATE"];
    $Checkout = $_POST["CheckOutDATE"];

    $sql = "INSERT INTO `customer` ( `FNAME`, `LNAME`, `PHONENO`) VALUES ( '$Fname', '$Lname', '$phoneno');";
    $sql1 = "SELECT `RESERVATION_NO` FROM `CUSTOMER` WHERE `FNAME` = '$Fname' AND `LNAME` = '$Lname';";
    $sql2 = "SELECT `PRICE` FROM AVAIL WHERE `ROOMTYPE` = '$Roomtype';";
    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
    $reservation_no = $row1['RESERVATION_NO'];
    $payment = $row2['PRICE'];
    $sql3 = "UPDATE `CUSTOMER` SET `PAYMENT` = '$payment' WHERE `RESERVATION_NO` = '$reservation_no';";
    $sql4 = "INSERT INTO `book` (`SNO`, `ROOMTYPE`,`RESERVATION_NO`, `NUMBER_OF_ROOMS`, `CHECKIN`, `CHECKOUT`) VALUES (NULL, '$Roomtype','$reservation_no', '$Number_of_Rooms','$Checkin','$Checkout');";
    $result3 = mysqli_query($conn, $sql3);
    $result4 = mysqli_query($conn, $sql4);
    if ($result && $result2 && $result1 && $result3 && $result3) {
        $popup = true;
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!!!!!!!</strong> Submitted Check Your Payment details below
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-primary bg-light">
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
        <div class="container register">

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
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-info bg-opacity-25 bg-gradient ">
                                        <h5 class="modal-title " id="exampleModalLabel">Reservation Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <?php
                                        if ($popup) {
                                            echo '<div class="container h5 mb-3">
                                            Payment : '.$payment.'
                                        </div>
                                        <div class="container h5">
                                            Reservation No : '.$reservation_no.'
                                        </div>
                                        <div class="text-center mt-2">
                                           please note your reservation no for future reference
                                        </div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="/tara_hotel/book.php" method="POST">

                            <h2 class="register-heading">Hotel Tara</h2>
                            <br>
                            <br>
                            <br>
                            <h3 class="register-heading">Reservation Details</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="Fname" id="Fname" class="form-control" placeholder="First Name *" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="Lname" id="Lname" class="form-control" placeholder="Last Name *" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="tel" id="phoneno" name="phoneno" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" required />
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="RoomType" name="RoomType" class="form-control" placeholder="RoomType *" required>
                                            <option selected>Room_Type</option>
                                            <option value="DOUBLE_DELUXE_ROOM">DOUBLE_DELUXE_ROOM</option>
                                            <option value="SINGLE_DELUXE_ROOM">SINGLE_DELUXE_ROOM</option>
                                            <option value="HONEYMOON_SUITE">HONEYMOON_SUITE</option>
                                            <option value="ECONOMY_DOUBLE">ECONOMY_DOUBLE</option>
                                            <option value="SINGLE_ROOM">SINGLE_ROOM</option>
                                            <option value="TRIPLE">TRIPLE</option>
                                            <option value="KINGSIZE_ROOM">KINGSIZE_ROOM</option>
                                            <option value="QUEENSIZE_ROOM">QUEENSIZE_ROOM</option>
                                            <option value="TWIN_ROOM">TWIN_ROOM</option>
                                            <option value="QUAD_ROOM">QUAD_ROOM</option>
                                            <option value="HOLLYWOOD_ROOM">HOLLYWOOD_ROOM</option>
                                            <option value="ECONOMY_DOUBLE">ECONOMY_DOUBLE</option>
                                            <option value="SINGLE">SINGLE</option>
                                            <option value="KING_ROOM">KING_ROOM</option>
                                            <option value="QUEEN_ROOM">QUEEN_ROOM</option>
                                            <option value="SINGLE_ROOM">SINGLE_ROOM</option>
                                            <option value="DOUBLE_ROOM">DOUBLE_ROOM</option>
                                            <option value="SUITE_ROOM">SUITE_ROOM</option>
                                            <option value="KIDS_ROOM">KIDS_ROOM</option>
                                            <option value="HONEYMOON_SUITE_ROOM">HONEYMOON_SUITE_ROOM</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" id="NumberofRooms" name="NumberofRooms" class="form-control" placeholder="Number of Rooms *" required />
                                    </div>
                                    <!-- <div class="input-group mb-3">
                                        <input type="number" id="Reservation_no" name="Reservation_no" class="form-control" placeholder="Reservation_no *"  />

                                </div> -->
                                    <div class="input-group datepicker mb-3">
                                        <input type="text" id="CheckinDATE " name="CheckinDATE" class="form-control" placeholder="Check-in date *" onfocus="(this.type = 'date')" onblur="this.type='text'" required />
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="CheckOutdate" name="CheckOutDATE" class="form-control" placeholder="Check-Out date *" onfocus="(this.type = 'date')" onblur="this.type='text'" required />
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" id="submit" class="btn btn-primary"></input>
                                    <?php
                                    if ($popup) {
                                        echo '<button type="submit" id="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">view your registration no</button>

                                        ';
                                    }
                                    ?>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script>
        $('#myForm').on('submit', function(e) {
            $('#myModal').modal('show');
            e.preventDefault();
        });
    </script> -->
</body>

</html>