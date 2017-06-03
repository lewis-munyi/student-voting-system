<!DOCTYPE html>
<html>

<head>
    <title>Vote page</title>
    <!-- Flipclock CSS -->
    <link rel="stylesheet" href="css/flipclock.css">
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
    <!-- Flipclock JS -->
    <script src="js/flipclock.min.js"></script>
</head>

<body>
    <?php
    session_start();

    $mysqli = mysqli_connect("localhost","root","root","votingSystem");
?>
        <script type="text/javascript">
        $(document).ready(function() {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal({dismissible: false});
            $('#terms').modal('open');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd>=16 && mm >= 6 && yyyy >= 2017) {
    document.getElementById("btnVote").disabled=true;
    Materialize.toast('I am a toast', 4000,'',function(){window.location.href="http://localhost/student-voting-system/student-dashboard.html"});
} 

            $('select').material_select();
        });

        function itemselected(selectItem) {
            if (selectItem == 1) {
                var itemSelected1 = $("#item1 option:selected").text();
                document.getElementById('tr1').innerText = itemSelected1;
            }
            if (selectItem == 2) {
                var itemSelected2 = $("#item2 option:selected").text();
                document.getElementById('tr2').innerText = itemSelected2;
            }
            if (selectItem == 3) {
                var itemSelected3 = $("#item3 option:selected").text();
                document.getElementById('tr3').innerText = itemSelected3;
            }
            if (selectItem == 4) {
                var itemSelected4 = $("#item4 option:selected").text();
                document.getElementById('tr4').innerText = itemSelected4;
            }
            if (selectItem == 5) {
                var itemSelected4 = $("#item5 option:selected").text();
                document.getElementById('tr5').innerText = itemSelected4;
            }
            if (selectItem == 6) {
                var itemSelected4 = $("#item6 option:selected").text();
                document.getElementById('tr6').innerText = itemSelected4;
            }
            if (selectItem == 7) {
                var itemSelected4 = $("#item7 option:selected").text();
                document.getElementById('tr7').innerText = itemSelected4;
            }
            if (selectItem == 8) {
                var itemSelected4 = $("#item8 option:selected").text();
                document.getElementById('tr8').innerText = itemSelected4;
            }
        }
        function dismiss(){
            var $exit = $('<span>Exiting..</span>');
                Materialize.toast($exit, 5000);
            window.location.href="http://localhost/student-voting-system/student-login.html";
        }
        function check() {
            var myvalue1 = document.getElementById('item1').value;
            var myvalue2 = document.getElementById('item2').value;
            var myvalue3 = document.getElementById('item3').value;
            var myvalue4 = document.getElementById('item4').value;
            var myvalue5 = document.getElementById('item5').value;
            var myvalue6 = document.getElementById('item6').value;
            var myvalue7 = document.getElementById('item7').value;
            var myvalue8 = document.getElementById('item8').value;
            if ((myvalue8 === "") || (myvalue7 === "") || (myvalue6 === "") || (myvalue5 === "") || (myvalue4 === "") || (myvalue3 === "") || (myvalue2 === "") || (myvalue1 === "")) {
                var $toastContent = $('<span>Please ensure you select all the fields</span>');
                Materialize.toast($toastContent, 5000);
            } else {
                $('#confirmation').modal('open');
            }
        }
        </script>
        <form action="php/voteprocess.php" method="post">
            <!-- Modal Trigger -->
            <!-- <a class="waves-effect waves-light btn" href="#modal1">Modal</a> -->
            <!-- Modal Structure -->
            <div id="terms" class="modal">
                <div class="modal-content">
                    <h4>Terms and conditions</h4>
                    <h5>By proceeding you hereby agree to the followig terms and conditions:</h5>
                     <ol type="1">
  <li>Only valid UON students are allowed to vote on this portal</li>
  <li>You can only vote for yoor candidates once</li>
  <li>Any irregularities should be imediatly reported to the university administration</li>
  <li>No students should share their login credentials with other people</li>
</ol> 
                </div>
                <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    <a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="dismiss()">Disagree</a>
                </div>
            </div>
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
                <div class="row"></div>
                <div class="row">
                <div class="col s12 m2 2">
                       <h4>Time left:</h4>
                    </div>
                    <div class="col s12 m10 l10">
                        <div class="clock"></div>
                    </div>
                    <script type="text/javascript">
                    var clock = $('.clock').FlipClock(30065 * 24 * 3, {
                        clockFace: 'DailyCounter',
                        countdown: true,
                        onStart: function() {
                            // Do something
                            alert("hello")
                        },
                        // The onStop callback
                        onStop: function() {
                            var $warning = $('<span>Voting has been closed! Redirecting..</span>');
                            Materialize.toast($warning, 5000)
                                // Do something
                                /*document.getElementById('btnVote').disabled = true;
                                var $warning = $('<span>Voting has been closed! Redirecting..</span>');
                                Materialize.toast($warning, 5000,
                                    function() {
                                        window.location.replace("student-dashboard.php");
                                    });*/
                        },
                    });
                    </script>
                </div>
                <div class="row">
                    Select your leader
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item1" name="chairperson" onchange="itemselected(1)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 1";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Chairperson</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item2" name="vice" onchange="itemselected(2)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 2";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Vice Chairperson</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item3" name="treasurer" onchange="itemselected(3)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 5";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Treasurer</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item4" name="academics" onchange="itemselected(4)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 3";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        ?>
                            </select>
                            <label>Academics Secretary</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item5" name="orgsec" onchange="itemselected(5)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 4";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Organizing Secretary</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item6" name="sports" onchange="itemselected(6)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 6";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Sports & Entertainment secretary</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item7" name="gender" onchange="itemselected(7)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 8";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Gender affairs</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item8" name="accom" onchange="itemselected(8)">
                                <option value="" disabled selected>Select representative</option>
                                <?php
                        $sqlSelect="SELECT * FROM contestants WHERE contestantPost = 7";
                        $result = mysqli_query($mysqli,$sqlSelect);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contestantRegistrationNumber'] . "'>" . $row['first_name'] . " " . $row[second_name] . "</option>";
                        }
                        

                        ?>
                            </select>
                            <label>Health & Accomodation secretary</label>
                        </div>
                    </div>
                </div>
                <div id="confirmation" class="modal">
                    <div class="modal-content">
                        <h4>Confirm your selection</h4>
                        <p><span>Please confirm that these are the candiates you wish to elect.</span>
                        </p>
                        <table>
                            <tr>
                                <td><b>Chairperson</b></td>
                                <td id="tr1"></td>
                            </tr>
                            <tr>
                                <td><b>Vice Chairperson</b></td>
                                <td id="tr2"></td>
                            </tr>
                            <tr>
                                <td><b>Treasurer</b></td>
                                <td id="tr3"></td>
                            </tr>
                            <tr>
                                <td><b>Academics secretary</b></td>
                                <td id="tr4"></td>
                            </tr>
                            <tr>
                                <td><b>Organizing secretary</b></td>
                                <td id="tr5"></td>
                            </tr>
                            <tr>
                                <td><b>Sports & Entertainment</b></td>
                                <td id="tr6"></td>
                            </tr>
                            <tr>
                                <td><b>Gender affairs</b></td>
                                <td id="tr7"></td>
                            </tr>
                            <tr>
                                <td><b>Health, Accomodation and Catering secretary</b></td>
                                <td id="tr8"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Proceed</button>
                        <a class="modal-action modal-close waves-effect waves-green btn-flat active">Change</a>
                    </div>
                </div>
                <a class="waves-effect waves-light btn" id="btnVote" onclick="check()">vote</a>
        </form>
</body>

</html>
