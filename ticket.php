<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ticket.css">
    <link rel="stylesheet" href="css/allfiles.css">
    <title>Реєстрація</title>
</head>
<body>
    <div class="container-1">
        <h1 class="text_header">FIND YOUR TICKET</h1>
        <div class="line"></div>
          <form>
            <div class="form_text">
              <p class="p-10">Flight</p>
              <label for="From"></label>
              <select name="from" id="from">
                <?php
        
                $servername = "/airport";
                $username = "root";
                $password = "root";
                $dbname = 'airport';

                // Create connection
                $connection = mysqli_connect("localhost", "root", "root", "airport");
                $query = $connection->query("select name as name from airport.flights" );

                if($connection->connect_error) {
                    echo 'err';
                }

                if ($query->num_rows > 0) {
                    while($row = $query->fetch_assoc()) {

                    echo "<option>" . $row['name'] . "</option>";

                    }
                } else {
                    echo "0 results";
                }

                ?>
            </select>
              
              <p class="p-10">Airline:</p>
              <label for="Airline"></label>
              <select name="from" id="from">
                <?php
        
                $servername = "/airport";
                $username = "root";
                $password = "root";
                $dbname = 'airport';

                // Create connection
                $connection = mysqli_connect("localhost", "root", "root", "airport");
                $query = $connection->query("select company as company from airport.plane" );

                if($connection->connect_error) {
                    echo 'err';
                }

                if ($query->num_rows > 0) {
                    while($row = $query->fetch_assoc()) {

                    echo "<option>" . $row['company'] . "</option>";

                    }
                } else {
                    echo "0 results";
                }

                ?>
            </select>

              <p class="p-10">Place:</p>
              <label for="Place"></label>
              <input type="text" placeholder="Place" name="Place">
            </div>
            <br>
            <div class="container-2">
                <div class="bloc1">
                    <select class="half_select" name="from" id="from">
                    <?php
            
                    $servername = "/airport";
                    $username = "root";
                    $password = "root";
                    $dbname = 'airport';

                    // Create connection
                    $connection = mysqli_connect("localhost", "root", "root", "airport");
                    $query = $connection->query("select arrival_time as arriv from airport.flights" );

                    if($connection->connect_error) {
                        echo 'err';
                    }

                    if ($query->num_rows > 0) {
                        while($row = $query->fetch_assoc()) {

                        echo "<option>" . $row['arriv'] . "</option>";

                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
                    </select>
                    <div class="">
                        <p>adults:</p>
                        <div class="row">
                            <p class="p">2</p>
                            <div class="image">
                                <img class="img plus" src="img/plus.png" alt="">
                                <img class="img minus" src="img/minus.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloc2">
                <select class="half_select" name="from" id="from">
                    <?php
            
                    $servername = "/airport";
                    $username = "root";
                    $password = "root";
                    $dbname = 'airport';

                    // Create connection
                    $connection = mysqli_connect("localhost", "root", "root", "airport");
                    $query = $connection->query("select departure_time as depar from airport.flights" );

                    if($connection->connect_error) {
                        echo 'err';
                    }

                    if ($query->num_rows > 0) {
                        while($row = $query->fetch_assoc()) {

                        echo "<option>" . $row['depar'] . "</option>";

                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
                    </select>
                    <div class="">
                        <p>juvenile:</p>
                        <div class="row">
                            <p class="p">3</p>
                            <div class="image">
                                <img class="img plus" src="img/plus.png" alt="">
                                <img class="img minus" src="img/minus.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="test">
              <button type="submit" class="clear registerbtn">Clear</button>
              <button type="submit" class="search registerbtn">Search for flights</button>
            </div>
         </form>
    </div>
    <script src="js/ticket.js"></script>
</body>
</html>