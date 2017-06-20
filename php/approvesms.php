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
    <script type="text/javascript">
    
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('#sms').modal('open');
    
  });

    </script>
    
  <!-- Modal Structure -->
  <div id="sms" class="modal">
  <form action = "verify.php" method="POST">
    <div class="modal-content">
      <h4>SMS Verification</h4>
      <p>Enter the code here<?php echo($_SESSION['code']); ?></p>
      <input type="password" name="code" id="code" autofocus>
    </div>
    <div class="modal-footer">
                <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Verify</button>
                <a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="dismiss()">Disagree</a>
    </div>
    </form>
  </div>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue dark">
                <a href="#" class="brand-logo">University Of Nairobi</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a class="tooltipped" data-position="bottom" data-delay="0" data-tooltip="Log out" onclick="Materialize.toast('Logging out', 1000,'',function(){window.location.href = 'http://localhost/student-voting-system/php/logout.php';})">
                            <?php session_start(); echo($_SESSION["name"]);?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
    
        </div>
        
</body>

</html>
