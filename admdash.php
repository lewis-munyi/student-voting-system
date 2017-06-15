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
<?php session_start();?>

<body>
    <script type="text/javascript">
    $(document).ready(function() {
         $('select').material_select();
        $('.scrollspy').scrollSpy();
        $("side-nav").sideNav();
        $(".button-collapse").sideNav({
            menuWidth: 200, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
    });
    </script>
    <?php
        session_start();
        $db_host = "localhost";
        $db_name = "votingSystem";
        $db_user = "root";
        $db_password ="root";
        $connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);
    ?>
        <div class="row">
            <div class="container blue-grey darken-1">
                <div class="navbar-fixed">
                    <nav>
                        <div class="nav-wrapper blue dark">
                            <a href="#" class="brand-logo">University Of Nairobi</a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li>
                                    <a class="tooltipped" data-position="bottom" data-delay="0" data-tooltip="Log out" onclick="Materialize.toast('Logging out', 3000,'',function(){window.location.href = 'http://localhost/student-voting-system/php/logout.php';})">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- nav bar -->
            <ul id="slide-out" class="side-nav fixed">
                <li>
                    <div class="userView">
                        <div class="background">
                            <img src="https://unsplash.it/200/300?random?blur">
                        </div>
                        <a class="tooltipped " data-position="right" data-delay="0" data-tooltip="Log out" onclick="window.location.href = 'http://localhost/student-voting-system/php/logout.php';"><img class="circle " src="https://unsplash.it/290?random"></a>
                        <a><span class="white-text name"><?php echo($_SESSION['admin_name']);?></span></a>
                        <a><span class="white-text email"><?php echo($_SESSION['email']);?></span></a>
                    </div>
                </li>
                <li><a class="subheader">Categories</a></li>
                <li>
                    <a href="#student"></i>Student</a>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a href="#nominee">Nominees</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a href="#results">Results</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <!-- End of navbar -->
            <div class="container">
                <div class="row">
                    <div class="row selection scrollspy" id="student">
                        <ul id="tabs-swipe-demo" class="tabs">
                            <!-- tab headers -->
                            <li class="tab col s6 blue-grey darken-1"><a href="#viewstudents" class="white-text">View students</a></li>
                            <li class="tab col s6 blue-grey darken-1"><a href="#addstudent" class="white-text">Add student</a></li>
                        </ul>
                        <div id="viewstudents" class="col s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Students</span>
                                    <table class="bordered">
                                        <thead>
                                            <tr>
                                                <th class='center'>ID</th>
                                                <th class='center'>Student Registration</th>
                                                <th class='center'> Name</th>
                                                <th class='center'>Email</th>
                                                <th class='center'>Vote status</th>
                                        </thead>
                                        <tbody>
                                            <?php 

                        $sqlSelect="SELECT * FROM registeredStudents";
                        $result = mysqli_query($connection,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            if ($row['voteStatus'] == 1){
                                 $vote = "Yes";
                                }
                                else{
                                   $vote = "No";
                                }
                        echo "<tr><td class='center'>" . $row['id'] . "</td class='center'><td class='center'>" . $row['studentRegistration'] . "</td class='center'><td>" . $row['first_name'] . ' ' . $row['second_name'] . "</td><td class='center'>" . $row['studentEmail'] . "</td><td class='center'>" . $vote. "</td></tr>";
                        }
                        
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="addstudent" class="col s12">
                            <form class="col s12" action="php/addstudent.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="first_name" type="text" class="validate" name="first_name">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s21 m6">
                                        <input id="last_name" type="text" class="validate" name="last_name">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input  id="reg_no" type="number" class="validate" name="reg_no">
                                        <label for="reg_no">Registration Number</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input  id="phone_no" name="phone_no" type="number" class="validate">
                                        <label for="phone_no">Phone number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input  id="email" type="email" class="validate" name="email">
                                        <label for="reg_no">Email</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="password" name="password" type="password" class="validate">
                                        <label for="phone_no">Password</label>
                                    </div>
                                </div>
                                <div class="row center">
                                    <button type="submit" class="waves-effect waves-light btn">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row selection scrollspy" id="nominee">
                    <ul id="tabs-swipe-demo" class="tabs">
                        <!-- tab headers -->
                        <li class="tab col s6"><a class="active" href="#viewnominees">View nominees</a></li>
                        <li class="tab col s6"><a href="#addnominee">Add nominee</a></li>
                    </ul>
                    <div id="viewnominees" class="col s12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Nominees</span>
                                <table class="bordered">
                                    <thead>
                                        <tr>
                                            <th class='center'>ID</th>
                                            <th class='center'>Student Registration</th>
                                            <th class='center'> Name</th>
                                            <th class='center'>Email</th>
                                            <th>Phone Number</th>
                                            <th class='center'>Representative post</th>
                                    </thead>
                                    <tbody>
                                        <?php 

                        $sqlSelect="SELECT * FROM contestants";
                        $result = mysqli_query($connection,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            switch ($row['contestantPost']) {
                                case 1:
                                    $post = "Chairperson";
                                    break;
                                case '2':
                                    $post = "Vice chaiperson";
                                    break;
                                case '3':
                                    $post = "Academics secretary";
                                    break;
                                case '4':
                                    $post = "Organising secretary";
                                    break;
                                case '5';  
                                    $post = "Treasurer";
                                    break;
                                case '6':
                                    $post = "Sports and Entertainment Sec";
                                    break;
                                case '7':
                                    $post = "Health, Accomodation & catering";
                                    break;
                                default:
                                    $post = "Gender affairs";
                                    break;
                            }
                        echo "<tr><td class='center'>" . $row['id'] . "</td class='center'><td class='center'>" . $row['contestantRegistrationNumber'] . "</td class='center'><td>" . $row['first_name'] . ' ' . $row['second_name'] . "</td><td class='center'>" . $row['contestantEmail'] . "</td><td>0" . $row['phone_number'] . "</td><td>" . $post . "</td></tr>";
                        }
                        
                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="addnominee" class="col s12">
                        <div class="card blue-grey darken-1">
                            <form class="col s12" action="php/addnominee.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="first_name" type="text" class="validate" name="first_name">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s21 m6">
                                        <input id="last_name" type="text" class="validate" name="last_name">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input  id="reg_no" type="number" class="validate" name="reg_no">
                                        <label for="reg_no">Registration Number</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input  id="phone_no" name="phone_no" type="number" class="validate">
                                        <label for="phone_no">Phone number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="email" type="email" class="validate" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="post" id="post">
      <option value="" disabled selected>Select post</option>
      <?php
      $sql = "SELECT * from representativePosts";
      if ($result = mysqli_query($connection, $sql)) {
          while ($data = mysqli_fetch_array($result)) {
              echo "<option value='" . $data['id'] . "'>" . $data['post_title'] . "</option>";
          }
      } else {
          echo ("Unable to connect to db");
      }
      
      ?>
    </select>

                                        
                                        <label for="post">Leadership post</label>
                                    </div>
                                </div>
                                <div class="row center">
                                    <button type="submit" class="waves-effect waves-light btn">submit</a>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row selection scrollspy" id="results"></div>
                <div class="row">
                    <ul id="tabs-swipe-demo" class="tabs">
                        <!-- tab headers -->
                        <li class="tab col s6"><a class="active" href="#viewresults">View results</a></li>
                        <li class="tab col s6"><a href="#controlresults">Add Poll</a></li>
                    </ul>
                    <div class="" id="viewresults">
                        <div class="row card blue-grey darken-1">
                            <div class="row">
                                                        <div class="col s12 m6">
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
                        <div class="col s12 m6">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Vice chairperson</span>
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
                    </div>
                    <div class="row">
                    <div class="col s12 m6">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Organizing Secretary</span>
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
                    <div class="col s12 m6">
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
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Academics secretary general</span>
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
                        <div class="col s12 m6">
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
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Sports and Entertainment</span>
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
                        <div class="col s12 m6">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Health, Accomodation and Catering</span>
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
                    </div>
                    <div class="row">
                    <div id="controlresults" class="col s12">
                        
                    </div>
                    </div>
                    </div>
                    
                </div>
                <!-- section 2 -->
                <div id="controlresults" class="col s12 center">
                    <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Control</span>
                                <a href="#" class="btn waves-effect waves-light">Send results</a>
                            </div>
                        </div>
                </div>

            </div>
        </div>
</body>

</html>
