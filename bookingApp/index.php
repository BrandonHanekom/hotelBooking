<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hotel Bookings</title>
</head>

<body>
    <!-- As a link -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HotelBookings</a>
            <button type="button" class="btn btn-primary">View Bookings</button>
            <a href="authentication.php" target="_blank">
                <button type="button" class="btn btn-primary">Edit Profile</button>
            </a>
        </div>
    </nav>
    <main>
        <div class="container text-center">
            <div class="row mt-5">
                <?php
                include('connection.php');
                // sql code we want to run
                $sql = 'SELECT * FROM `hotels`';
                // run sql code on connection and save result in var
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) { // Loop through the columns array
                        $hotelName = $row['name'];
                        $hotelDescription = $row['description'];
                        $hotelImage = $row['thumbnail'];
                        $price = $row['pricePerNight'];
                        echo <<<CARD
                <div class="col mt-5">    
                 <div class="card" style="width: 18rem;">
                        <img src="$hotelImage" class="card-img-top" alt="Hotel Image">
                        <div class="card-body">
                            <h5 class="card-title">$hotelName</h5>
                            <p class="card-text">$hotelDescription</p>
                            <a href="hotelSelection.php" target="_blank" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                CARD;
                    }
                } else {
                    echo "Error selecting table " . $conn->error;
                };
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>