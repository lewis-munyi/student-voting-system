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
    <script type="text/javascript">
    $(document).ready(function() {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
        $('#modal1').modal('open');
    });
    </script>
    <!-- Modal Trigger -->
    <!-- <a class="waves-effect waves-light btn" href="#modal1">Modal</a> -->
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Terms and conditions</h4>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate laboriosam illum praesentium eos repudiandae et autem molestias ex aspernatur perferendis ducimus, fugit consectetur doloribus ipsa cumque possimus tempore dolorum, distinctio!</span>
            <span>Quis soluta maxime error ullam, sit rem possimus velit labore tenetur repellat nesciunt eos ex, earum praesentium similique laborum consectetur. Placeat optio earum tempore maxime cupiditate deserunt iusto repellendus vitae.</span>
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
    <div class="conatainer">
        <div class="row">
            <u><h2>Main candidates</h2></u>
            <div class="col s6">
                <h2>President</h2>
                
            </div>
            <div class="col s6	">
                <h2>Vice President</h2>
            </div>
        </div>
        <div class="row">
            <u><h2>School candidates</h2></u>
        </div>
        <div class="row">
            <h2>
    			<u><h2>class candidates</h2></u>
            </h2>
        </div>
        <div class="row"></div>
        <div class="row"></div>
    </div>
</body>

</html>
