<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Add jquery CDN -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Add Local jquery -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
</head>

<body>
    <?php
        session_start();
        $db_host = "localhost";
        $db_name = "votingSystem";
        $db_user = "root";
        $db_password ="root";
        $connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);
    ?>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue dark">
                    <a href="#" class="brand-logo">University Of Nairobi</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="tooltipped" data-position="bottom" data-delay="0" data-tooltip="Log out" onclick="Materialize.toast('Logging out', 3000,'',function(){window.location.href = 'http://localhost/student-voting-system/php/logout.php';})">
                                <?php echo($_SESSION["name"]);?>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row center">
                <h3>RESULTS</h3>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Chairperson</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 1";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 1";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                 ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Vice Chairperson</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 2";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 2";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Academics Secretary general</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 3";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 3";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Organising Secretary</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 4";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 4";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Treasurer</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 5";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 5";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Gender Affairs Secretary</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 8";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 8";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Sports & Entertainment</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 6";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td class= 'center'>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 6";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Health, Accomodation & Catering</span>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Contestant</th>
                                        <th>Number of votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                
                                    $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 7";
                                                $result = mysqli_query($connection,$sqlSelect);
                                                while ($row = mysqli_fetch_array($result))
                                                { 
                                                     $contestant = $row['contestantRegistrationNumber'];
                                                    $getfrequency = "SELECT * From votes WHERE contestant_id = ".$contestant;
                                                    if ($success = mysqli_query($connection, $getfrequency)) {
                                                        $num = mysqli_num_rows($success);
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td class='center'>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 7";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td class= 'center'><i><b>Total votes</b></i></td><td class= 'center'><i><b>". $total."<b><i></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                
                </div>
            </div>
    
                <div class="row right">
                    <a data-position="top" data-delay="0" data-tooltip="Export results" class=" tooltipped btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
        </div>
        </div>
        <div class="row">Footer</div>
        </div>
</body>

</html>
