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
                                <a href="#">
                                    <?php echo($_SESSION["name"]);?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        <div class="container">
            
            <div class="row">
                <div class="row">
                                    <div class="col s12 m6 l4 ">
                        <h5>Chairperson</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 1";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                 ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m6 l4 ">
                        <h5>Vice Chairperson</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 2";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                         ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m6 l4 ">
                        <h5>Academics Secretary general</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 3";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4 ">
                        <h5>Organising Secretary</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 4";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m6 l4 ">
                        <h5>Treasurer</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 5";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m6 l4 ">
                        <h5>Gender Affairs Secretary</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 8";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4 ">
                        <h5>Sports & Entertainment</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 6";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m6 l4 ">
                        <h5>Health, Accomodation & Catering</h5>
                        <table class = "bordered">
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
                                                        echo "<tr><td>". $row['first_name'] . " " . $row[second_name] . "</td><td>". $num ."</td></tr>";
                                                    }
                                                }
                                                $sqlSelect="SELECT * FROM votes WHERE post_id = 7";
                                                $total = mysqli_query($connection, $sqlSelect);
                                                $total = mysqli_num_rows($total);
                                                echo "<tr><td><i><b>Total votes</b></i></td><td><i><b>". $total."<b><i></td></tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">Footer</div>
        </div>
</body>

</html>
