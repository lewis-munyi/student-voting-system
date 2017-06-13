<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Mixins-->
    <!-- Pen Title-->
    <div class="pen-title">
        <h1>UNIVERSITY OF NAIROBI</h1>
    </div>
    <div class="container">
        <div class="card"></div>
        <div class="card">
            <h1 class="title">Student Login</h1>
            <form method="POST" action="php/student-login.php">
                <div class="row">
                    <div class="input-container">
                        <input type="Number" id="regno" name="reg_no" required="required">
                        <label for="regno">Registration Number</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="password" name="password" required="required">
                        <label for="password">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="submit"><span>Log in</span></button>
                    </div>
                    <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
            </form>
            </div>
            <div class="card alt">
                <div class="toggle"></div>
                <h1 class="title">
                    Admin
                    <div class="close"></div>
                </h1>
                <form method="POST" action="php/admin-login.php">
                    <div class="row">
                        <div class="input-container">
                            <input type="email" id="email" name="email" required="required">
                            <label for="email">Email</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="password" id="password" name="password" required="required">
                            <label for="password">Password</label>
                            <div class="bar"></div>
                        </div>
                        <div class="button-container">
                            <button type="submit"><span>Log in</span></button>
                        </div>
                        <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
                </form>
                </div>
            </div>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src="js/index.js"></script>
</body>

</html>
