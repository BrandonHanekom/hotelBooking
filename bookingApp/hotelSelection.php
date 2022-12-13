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
    <h2>
        Selected Hotel
        </h1>
        <main>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price</li>
                    <li class="list-group-item">Type</li>
                    <li class="list-group-item">Rooms</li>
                    <li class="list-group-item">Rating</li>
                </ul>
                <div class="card">
                    <h5 class="card-header">Facilities</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="checkInDate">Check In</label>
                            <input type="date" class="form-control" id="checkInDate" aria-describedby="emailHelp"
                                placeholder="Check in date">
                        </div>
                        <div class="form-group">
                            <label for="checkOutDate">Check Out</label>
                            <input type="date" class="form-control" id="checkOutDate" placeholder="Check out date">
                        </div>
                        <a href="checkout.php" target="_blank">
                            <button type="submit" class="btn btn-primary mx-2 my-2">Book</button>
                        </a>
                    </form>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>