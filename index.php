<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/travel.png" type="image/png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/allfiles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <title>Airport</title>
</head>

<body onload='animateText("text","WELCOME TO AIRPORT",0);'></body>
<div class="container">
    <header>
        <img src="https://image.flaticon.com/icons/png/512/3800/3800026.png" alt="">
        <div class="header_menu">
            <a href="/index.php">MAIN</a>
            <a href="/tourism.php">TOURISM</a>
            <a href="/history.php">HISTORY</a>
        </div>
    </header>

    <div class="parallax">
        <div class="overlay">
            <h1 class="overlay__h1" id="text">WELCOME TO AIRPORT</h1>
            <hr class="overlay__hr">
        </div>
    </div>
    <div class="container__aside">
        <div class="articleaside">
            <h2 class="aside__h2">POPULAR TRIPS</h2>
            <hr>
            <div class="ag-tabs-block">
                <div class="ag-format-container">
                    <div class="ag-tabs_box">
                        <input type="radio" id="tab1" class="ag-tabs_input" name="tabs" checked="">
                        <label for="tab1" class="ag-tabs_label">Potenti mattis</label>

                        <input type="radio" id="tab2" class="ag-tabs_input" name="tabs">
                        <label for="tab2" class="ag-tabs_label">Nostra ex conubia</label>

                        <input type="radio" id="tab3" class="ag-tabs_input " name="tabs">
                        <label for="tab3" class="ag-tabs_label">Lorem ipsum</label>

                        <div class="ag-tabs_item" id="tabs__item-1">
                            <h2 class="ag-tabs_title">Potenti mattis</h2>
                            <div class="ag-tabs_discr">
                                <p class="ag-tabs_text">
                                    Potenti mattis lacus cursus ultrices conubia pharetra penatibus sapien aliquam metus semper ultricies habitant, curabitur aenean varius egestas nec massa mauris dolor a laoreet parturient finibus.
                                </p>
                                <p>
                                    Donec maecenas mi natoque eleifend purus nisl, nullam rhoncus volutpat sem feugiat in. Malesuada facilisi venenatis lacinia suscipit duis feugiat nam donec mi congue cursus maecenas ornare non.
                                </p>
                            </div>
                        </div>

                        <div class="ag-tabs_item" id="tabs__item-2">
                            <h2 class="ag-tabs_title">Nostra ex conubia</h2>
                            <div class="ag-tabs_discr">
                                <p>
                                    Lorem ac semper nec nostra laoreet donec curabitur venenatis, duis erat dictum eros nibh primis aliquam, eu faucibus neque sagittis potenti ultricies tortor. Id sem dictum arcu suscipit purus eros elit massa venenatis maecenas, aliquet pellentesque commodo
                                    ut aliquam iaculis diam dictumst mattis tellus accumsan, dapibus odio natoque est viverra integer cubilia ipsum libero. Nostra ex conubia ad dis tortor porttitor facilisis lobortis, eu fusce ornare phasellus sociosqu
                                    est in dignissim vel,
                                </p>
                            </div>
                        </div>

                        <div class="ag-tabs_item" id="tabs__item-3">
                            <h2 class="ag-tabs_title">Lorem ipsum</h2>
                            <div class="ag-tabs_discr">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit potenti viverra, nascetur lacinia mus eros sollicitudin nisi libero arcu, integer pellentesque fermentum imperdiet ante venenatis dignissim magna. Amet scelerisque tempor sed viverra nisi praesent,
                                    massa aptent mus primis venenatis eget, laoreet vel libero urna adipiscing. Fringilla class auctor velit dapibus mus consequat, penatibus sollicitudin at pulvinar cras, egestas ullamcorper fermentum mauris ac.
                                </p>
                            </div>
                        </div>

                        <div class="ag-tabs_dash"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="window">
            <div class="window__slider">
                <div class="window__slider__img-container window__slider__img-container--opacity">
                    <img src="img/slider_trips1.png" alt="city view from sky" />
                </div>
                <div class="window__slider__img-container">
                    <img src="https://picsum.photos/id/1076/500/400" alt="tall building view from bottom" />
                </div>
                <div class="window__slider__img-container">
                    <img src="https://picsum.photos/id/111/500/400" alt="old model of a car" />
                </div>
                <div class="window__slider__img-container">
                    <img src="https://picsum.photos/id/249/500/400" alt="bridge and city view from one side of river" />
                </div>
                <div class="window__slider__img-container">
                    <img src="https://picsum.photos/id/724/500/400" alt="forest and sky view, aurora borealis in the sky" />
                </div>
            </div>
            <button class="window__slide-left">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="window__slide-right">
              <i class="fas fa-chevron-right"></i>
            </button>
            <div class="window__current-img">
                <button class="window__current-img__btn window__current-img__btn--current"></button>
                <button class="window__current-img__btn"></button>
                <button class="window__current-img__btn"></button>
                <button class="window__current-img__btn"></button>
                <button class="window__current-img__btn"></button>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="table_flights">
            <a style="text-decoration: none; color: black;" href="/flights.php"><h2 class="aside__h2">SCHEDULE</h2></a>
            <hr>
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
        <button><a href="/ticket.php">Buy tickets</a></button>
    </div>
    <div class="achievements">
        <h2>WHY OUR AIRPORT?</h2>
        <hr>
        <div class="bl_achievements">
            <div class="ach_first_row"><img src="img/ach_1.png" alt="">
                <p>Our airport has a convenient location and good structure. It is also the only one in the city, so you have no choice) </p><img src="img/ach_3.png" alt=""></div>
            <div class="ach_second_row">
                <p>We have many different flights and destinations. You can fly to many countries or cities. It is very convinient. </p><img src="img/ach_2.png" alt="">
                <p>We have courteous staff and fast feedback, so you won't go unanswered.</p>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <div class="footer_info">
                <div>
                    <img src="https://image.flaticon.com/icons/png/512/3179/3179068.png" alt="">
                    <span>Ivano-Frankivsk, South Bulvar 5</span>
                </div>
                <div>
                    <img src="https://image.flaticon.com/icons/png/512/597/597177.png" alt="">
                    <span>099-231-15-19</span>
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
    <script src="js/index.js"></script>
    </body>

</html>