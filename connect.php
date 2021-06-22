<?php

$servername = "/airport";
$username = "root";
$password = "root";
$dbname = 'airport';

// Create connection
$link = mysqli_connect( $servername, $username, $password, $dbname );
$query = mysqli_query( $link, "SELECT * FROM `airport.planes`" );
if ($query->num_rows > 0) {
  while($row = $query->fetch_assoc()) {
    echo $row["name"] . $row["name"];
  }
}

?>