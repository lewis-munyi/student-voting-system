<!DOCTYPE html>
<html>

<head>
    <title>Verifying..</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="http://localhost/student-voting-system/css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Add jquery CDN -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <!-- Add Local jquery -->
    <script type="text/javascript" src="http://localhost/student-voting-system/js/materialize.min.js"></script>
</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue dark">
                <a href="#" class="brand-logo">University Of Nairobi</a>
            </div>
        </nav>
    </div>
    <div class="container">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      </div>
    <?php 

session_start();

// Get data from form
$reg_no = $_POST['reg_no'];
$password = $_POST['password'];
$salt = 'chemshabongo';
$cryptopassword = (hash(sha256, $salt.$_POST['password']));
$cryptoregno = (hash(sha256, $salt.$_POST['reg_no']));

// Database data
$db_host = "localhost";
$db_name = "votingSystem";
$db_user = "root";
$db_password ="root";   

// Create connection
$connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

function voteStatus($votestatus){
    if ($votestatus == 1) {
        // Close connection
        mysqli_close($connection);
        echo"<script>Materialize.toast('Code verified. Redirecting...', 1000,'',function(){window.location.href = 'http://localhost/student-voting-system/student-dashboard.php';})</script>";
       //header("Location: http://localhost/student-voting-system/student-dashboard.php");
    } else if ($votestatus == 0 || $votestatus = "") {
        // Close connection
        mysqli_close($connection);
        echo"<script>Materialize.toast('Code verified. Redirecting...', 2000,'',function(){window.location.href = 'http://localhost/student-voting-system/php/generatesms.php';})</script>";
        //header("Location: http://localhost/student-voting-system/php/generatesms.php");
        
    }     
    die();
}

$myquery = "SELECT * FROM registeredStudents WHERE studentRegistration = $reg_no";

if ($value = mysqli_query($connection, $myquery)) {
     if (mysqli_fetch_assoc($value)['studentPassword'] == $password){
        $firstname = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['first_name'];
        $secondname = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['second_name'];
        $_SESSION["reg_no"] = $reg_no;
        $_SESSION["name"] = $firstname." ".$secondname;
        
        $votestatus = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['voteStatus'];

        voteStatus($votestatus);
     }
     else{
        echo"<script>Materialize.toast('Incorrect Registration Number or Password!', 5000,'',function(){window.location.href = 'http://localhost/student-voting-system/index.html';})</script>";
     }
} else {
    echo "Error: " . $myquery . "<br>" . mysqli_error($connection);
} 
?>
</div>
</body>

</html>
