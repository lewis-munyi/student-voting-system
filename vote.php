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

    function check() {
        $('input[name = "checkboxes"]').on('change', function() {
            $('input[name = "checkboxes"]').not(this).prop('checked', false);
        });
        $('input[name = "sonuchairperson"]').on('change', function() {
            $('input[name = "sonuchairperson"]').not(this).prop('checked', false);
        });
        $('input[name = "sonuvicechairperson"]').on('change', function() {
            $('input[name = "sonuvicechairperson"]').not(this).prop('checked', false);
        });
        $('input[name = "sonusecretarygeneral"]').on('change', function() {
            $('input[name = "sonusecretarygeneral"]').not(this).prop('checked', false);
        });
        $('input[name = "sonuorganizingsecretary"]').on('change', function() {
            $('input[name = "sonuorganizingsecretary"]').not(this).prop('checked', false);
        });
        $('input[name = "sonutreasurer"]').on('change', function() {
            $('input[name = "sonutreasurer"]').not(this).prop('checked', false);
        });
        $('input[name = "sonusecretarysportsandentertainment"]').on('change', function() {
            $('input[name = "sonusecretarysportsandentertainment"]').not(this).prop('checked', false);
        });
        $('input[name = "sonuhealthsecretary"]').on('change', function() {
            $('input[name = "sonuhealthsecretary"]').not(this).prop('checked', false);
        });
        $('input[name = "sonugendersec"]').on('change', function() {
            $('input[name = "sonugendersec"]').not(this).prop('checked', false);
        });

    }
    </script>
    <form>
        <!-- Modal Trigger -->
        <!-- <a class="waves-effect waves-light btn" href="#modal1">Modal</a> -->
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
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
                <u><h2>University Level Student leaders (Sonu)</h2></u>
            </div>
            <div class="row">
                <div class="col s12 m6 ">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Chairperson<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuchairperson1" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson1">one</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson2" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson2">two</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson3" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson3">three</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson4" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson4">four </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson5" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson5">four </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Vice Chairperson<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson1" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson1">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson2" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson2">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson3" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson3">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson4" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson4">sonuvicechairperson </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Health & Accomodation<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary1" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary1">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary2" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary2">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary3" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary3">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary4" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary4">sonuhealthsecretary </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary5" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary5">sonuhealthsecretary </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Gender affairs<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonugendersec1" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec1">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec2" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec2">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec3" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec3">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec4" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec4">sonugendersec </label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6 ">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Secretary general<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral1" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral1">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral2" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral2">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral3" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral3">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral4" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral4">sonusecretarygeneral </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Organising Secretary<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary1" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary1">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary2" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary2">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary3" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary3">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary4" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary4">sonuorganizingsecretary </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary5" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary5">sonuorganizingsecretary </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Treasurer<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonutreasurer1" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer1">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer2" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer2">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer3" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer3">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer4" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer4">sonutreasurer </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Sports & Ent. Secretary <i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment2" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment2">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment3" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment3">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment4" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment4">sonusecretarysportsandentertainment </label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <u><h2>College Level Leaders(ONUSS)</h2></u>
            </div>
            <div class="row">
                <div class="col s12 m6 ">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Chairperson<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuchairperson1" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson1">one</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson2" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson2">two</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson3" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson3">three</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson4" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson4">four </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson5" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson5">four </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Vice Chairperson<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson1" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson1">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson2" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson2">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson3" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson3">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson4" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson4">sonuvicechairperson </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Health & Accomodation<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary1" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary1">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary2" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary2">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary3" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary3">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary4" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary4">sonuhealthsecretary </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary5" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary5">sonuhealthsecretary </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Gender affairs<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonugendersec1" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec1">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec2" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec2">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec3" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec3">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec4" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec4">sonugendersec </label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6 ">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Secretary general<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral1" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral1">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral2" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral2">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral3" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral3">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral4" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral4">sonusecretarygeneral </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Organising Secretary<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary1" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary1">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary2" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary2">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary3" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary3">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary4" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary4">sonuorganizingsecretary </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary5" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary5">sonuorganizingsecretary </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Treasurer<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonutreasurer1" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer1">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer2" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer2">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer3" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer3">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer4" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer4">sonutreasurer </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Sports & Ent. Secretary <i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment2" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment2">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment3" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment3">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment4" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment4">sonusecretarysportsandentertainment </label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <u><h2>NUCOMPSA</h2></u>
            </div>
<div class="row">
                <div class="col s12 m6 ">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Chairperson<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuchairperson1" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson1">one</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson2" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson2">two</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson3" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson3">three</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson4" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson4">four </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuchairperson5" name="sonuchairperson" onclick="check();" value="" />
                                    <label for="sonuchairperson5">four </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Vice Chairperson<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson1" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson1">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson2" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson2">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson3" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson3">sonuvicechairperson</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuvicechairperson4" name="sonuvicechairperson" onclick="check();" value="" />
                                    <label for="sonuvicechairperson4">sonuvicechairperson </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Health & Accomodation<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary1" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary1">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary2" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary2">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary3" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary3">sonuhealthsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary4" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary4">sonuhealthsecretary </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuhealthsecretary5" name="sonuhealthsecretary" onclick="check();" value="" />
                                    <label for="sonuhealthsecretary5">sonuhealthsecretary </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Gender affairs<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonugendersec1" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec1">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec2" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec2">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec3" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec3">sonugendersec</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonugendersec4" name="sonugendersec" onclick="check();" value="" />
                                    <label for="sonugendersec4">sonugendersec </label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6 ">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Secretary general<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral1" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral1">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral2" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral2">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral3" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral3">sonusecretarygeneral</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarygeneral4" name="sonusecretarygeneral" onclick="check();" value="" />
                                    <label for="sonusecretarygeneral4">sonusecretarygeneral </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Organising Secretary<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary1" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary1">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary2" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary2">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary3" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary3">sonuorganizingsecretary</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary4" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary4">sonuorganizingsecretary </label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonuorganizingsecretary5" name="sonuorganizingsecretary" onclick="check();" value="" />
                                    <label for="sonuorganizingsecretary5">sonuorganizingsecretary </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Treasurer<i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonutreasurer1" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer1">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer2" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer2">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer3" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer3">sonutreasurer</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonutreasurer4" name="sonutreasurer" onclick="check();" value="" />
                                    <label for="sonutreasurer4">sonutreasurer </label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header waves-effect"><i class="material-icons">person</i>Sports & Ent. Secretary <i class="material-icons right">arrow_drop_down</i></div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment2" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment2">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment3" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment3">sonusecretarysportsandentertainment</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="sonusecretarysportsandentertainment4" name="sonusecretarysportsandentertainment" onclick="check();" value="" />
                                    <label for="sonusecretarysportsandentertainment4">sonusecretarysportsandentertainment </label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">Footer</div>
        </div>
    </form>
</body>

</html>
