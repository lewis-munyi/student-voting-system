<!DOCTYPE html>
<html>

<head>
    <title>Error!</title>
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
    <?php 	
 
	echo"<script>Materialize.toast('Error sending SMS. Redirecting...', 5000,'',function(){window.location.href = 'http://localhost/student-voting-system/index.php';})</script>";
?>
    </div>
</body>

</html>
