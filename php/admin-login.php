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
$email = $_POST['email'];
$password = $_POST['password'];
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
$emailstring = (string)$email;
$myquery = "SELECT * FROM admins WHERE email ='$emailstring'";
//$myquery = "SELECT * FROM registeredStudents WHERE studentRegistration = $reg_no";

if ($value = mysqli_query($connection, $myquery)) {
     if (mysqli_fetch_assoc($value)['password'] == $password){
        $name = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['name'];
        $_SESSION["admin_name"] = $name;
        echo($_SESSION["admin_name"]);
        $email = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['email'];
        $_SESSION["email"] = $email;
        echo($_SESSION["email"]);
        echo"<script>Materialize.toast('Redirecting..', 5000,'',function(){window.location.href = 'http://localhost/student-voting-system/admdash.php';})</script>";
     }
     else{
        echo"<script>Materialize.toast('Incorrect Email or Password!', 5000,'',function(){window.location.href = 'http://localhost/student-voting-system/index.html';})</script>";
     }
} else {
    echo "Error: " . $myquery . "<br>" . mysqli_error($connection);
} 
?>
</div>
</body>

</html>
