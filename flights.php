<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/allfiles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/flights.css">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark&display=swap" rel="stylesheet">
    <title>Flights</title>
</head>
<body>
    <div class="container">
        <header>
            <img src="https://image.flaticon.com/icons/png/512/3800/3800026.png" alt="">
            <div class="header_menu">
                <a href="/index.php">MAIN</a>
                <a href="/tourism.php">TOURISM</a>
                <a href="/history.php">HISTORY</a>
            </div>
        </header>
        <div class="flights">
            <div class="wrapper">
                <h1>FLIGHTS</h1>
                <table>
                    <tr>
                        <th>FLIGHT NAME</th>
                        <th>DEPARTURE TIME</th>
                        <th>ARRIVAL TIME</th>
                        <th>PLANE NAME</th>
                        <th>COMPANY</th>
                        <th>SEATS</th>
                      </tr>
                      <?php
    
                        $servername = "/airport";
                        $username = "root";
                        $password = "root";
                        $dbname = 'airport';
    
                        // Create connection
                        $connection = mysqli_connect("localhost", "root", "root", "airport");
                        $query = $connection->query("select flight.name as f_name, flight.departure_time, flight.arrival_time, plane.name, plane.company, plane.seats
                        from airport.flights flight inner join airport.plane_flights p_f on flight.id = p_f.flightsID inner join plane plane on plane.id = p_f.planeID;" );
    
                        if($connection->connect_error) {
                            echo 'err';
                        }
    
                        if ($query->num_rows > 0) {
                            while($row = $query->fetch_assoc()) {
                            echo 
                            "<tr>" .    
                            "<th>" . $row['f_name'] . "</th>" .
                            "<th>" . $row['departure_time'] . "</th>" .
                            "<th>" . $row['arrival_time'] . "</th>" .
                            "<th>" . $row['name'] . "</th>" .
                            "<th>" . $row['company'] . "</th>" .
                            "<th>" . $row['seats'] . "</th>" .
                            "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
    
                        ?>
            </table>
            </div>
        </div>
        <footer>
            <div>
                <div class="footer_info">
                    <div>
                        <img src="https://image.flaticon.com/icons/png/512/3179/3179068.png" alt="">
                        <span>city, street 44</span>
                    </div>
                    <div>
                        <img src="https://image.flaticon.com/icons/png/512/597/597177.png" alt="">
                        <span>000-000-00-00</span>
                    </div>
                    <div>
                        <img src="https://image.flaticon.com/icons/png/512/725/725643.png" alt="">
                        <span>testemail@mail.com</span>
                    </div>
                </div>
                <span class="copyright">
                    © Our last project in SHKM
                </span>
            </div>
        </footer>
    </div>
</body>
</html>