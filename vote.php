<!DOCTYPE html>
<html>

<head>
    <title>Vote page</title>
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

<body>
    <?php
$mysqli = mysqli_connect("localhost","root","root","votingSystem");
?>
        <script type="text/javascript">
        $(document).ready(function() {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
            $('#terms').modal('open');

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
        function check(){
            var myvalue1 = document.getElementById('item1').value;
            var myvalue2 = document.getElementById('item2').value;
            var myvalue3 = document.getElementById('item3').value;
            var myvalue4 = document.getElementById('item4').value;
            var myvalue5 = document.getElementById('item5').value;
            var myvalue6 = document.getElementById('item6').value;
            var myvalue7 = document.getElementById('item7').value;
            var myvalue8 = document.getElementById('item8').value;
            if ((myvalue8 === "") || (myvalue7 === "") || (myvalue6 === "") || (myvalue5 === "") || (myvalue4 === "") || (myvalue3 === "") || (myvalue2 === "") || (myvalue1 === "")){
                 var $toastContent = $('<span>Please ensure you select all the fields</span>');
                 Materialize.toast($toastContent, 5000);
            }
            else{
                $('#confirmation').modal('open');
            }
        }
        </script>
        <form action="index.html" method="post">
            <!-- Modal Trigger -->
            <!-- <a class="waves-effect waves-light btn" href="#modal1">Modal</a> -->
            <!-- Modal Structure -->
            <div id="terms" class="modal">
                <div class="modal-content">
                    <h4>Terms and conditions</h4>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate laboriosam illum praesentium eos repudiandae et autem molestias ex aspernatur perferendis ducimus, fugit consectetur doloribus ipsa cumque possimus tempore dolorum, distinctio!</span>
                        <span>Quis soluta maxime error ullam, sit rem possimus velit labore tenetur repellat nesciunt eos ex, earum praesentium similique laborum consectetur. personat optio earum tempore maxime cupiditate deserunt iusto repellendus vitae.</span>
                        <span>Quam dicta itaque deleniti cupiditate, eligendi, amet, neque sapiente, unde optio sit delectus labore suscipit sunt rem! Quibusdam aspernatur quidem et, cumque eum dolore rem deserunt velit. Ut, voluptates, amet!</span>
                        <span>Maxime in doloribus nobis voluptates architecto eos, veritatis inventore qui odit reprehenderit voluptas debitis blanditiis ratione minus sapiente, recusandae repudiandae sequi. Mollitia consectetur culpa aliquam optio delectus quia qui repellendus.</span>
                        <span>Rerum culpa amet alias et consequatur ipsa fugiat ab, expedita porro! Inventore aperiam quam corporis temporibus a, perferendis delectus laudantium praesentium. Facilis quaerat molestias maxime rerum, eos, ut quasi illum.</span></p>
                </div>
                <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    <a class="modal-action modal-close waves-effect waves-green btn-flat">Disagree</a>
                </div>
            </div>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper blue dark">
                        <a href="#" class="brand-logo">Logo</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <u>
                    <h2>University Level Student leaders (Sonu)</h2>
                </u>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="input-field col s12">
                            <select id="item1" onchange="itemselected(1)">
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
                            <select id="item2" onchange="itemselected(2)">
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
                            <select id="item3" onchange="itemselected(3)">
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
                            <select id="item4" onchange="itemselected(4)">
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
                            <select id="item5" onchange="itemselected(5)">
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
                            <select id="item6" onchange="itemselected(6)">
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
                            <select id="item7" onchange="itemselected(7)">
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
                            <select id="item8" onchange="itemselected(8)">
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
                <a class="waves-effect waves-light btn" onclick="check()">vote</a>
                
                <div class="divider"></div>
                <div class="row">Footer</div>
            </div>
        </form>
</body>

</html>
