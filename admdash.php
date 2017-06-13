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
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue dark">
                <a href="#" class="brand-logo">University Of Nairobi</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a class="tooltipped" data-position="bottom" data-delay="0" data-tooltip="Log out" onclick="Materialize.toast('Logging out', 3000,'',function(){window.location.href = 'http://localhost/student-voting-system/php/logout.php';})">
                            <?php echo("Administrator : ".$_SESSION['admin_name']."    ".$_SESSION['email']);?>

                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s3"><a href="#test-swipe-1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test-swipe-2">Test 2</a></li>
        <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
    </ul>
    <div id="test-swipe-1" class="col s12 blue">Test 1</div>
    <div id="test-swipe-2" class="col s12 red">Test 2</div>
    <div id="test-swipe-3" class="col s12 green">Test 3</div>
</body>

</html>
