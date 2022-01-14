<?php
include 'dbconnect.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

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
    </header>

    <main>
        <div class="container">
            <div class="container">
                <h1 class="text-center display-5 fw-bold text-decoration-underline mt-4">OUR STAFF INFO</h1>
                <table class="table table-hover table-striped table-info" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Staff Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Age</th>
                            <th scope="col">designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `EMPLOYEE`";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sno = $sno + 1;
                            echo '  <tr>
                            <th scope="row">' . $sno . '</th>
                            <td>' . $row['FNAME'] . ' ' . $row['LNAME'] . '</td>
                            <td>' . $row['PHONENO'] . '</td>
                            <td>' . $row['SEX'] . '</td>
                            <td>' . $row['AGE'] . '</td>
                            <td>' . $row['DESIGNATION'] . '</td>
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>