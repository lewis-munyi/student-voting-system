<!DOCTYPE html>
<html>

<head>
    <title>Admin dashboard</title>
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
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue dark">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="#">
                            <?php session_start(); echo ($_SESSION["name"]);?> </a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </nav>
    z</div>
    <script type="text/javascript">
    $(document).ready(function() {
        $.getJSON("fetchregisteredstudents.php", function(return_data){
            $.each(return_data.data, function(key,value){
                $("#student").append(
                    //"<li class="collection-item">"+value.first_name+"  "+value.last_name</option>"
                    "<li class=\"collection-item\">"+value.first_name+" "+value.second_name+"</li>"
                    );
            });
        });
    });
    </script>
    <div class="container">
   <ul class="collection" name= "student" id= "student">
          
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
        </ul>
        </div>
</body>

</html>
