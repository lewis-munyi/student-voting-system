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
        $(document).ready(function () {            
            //$('select').material_select();
        });
    </script>
    <form>
    <div class="row">
        <div class="col s12 m6 l4">
        <?php
        require "php/config.php"; 
        // Assume $db is a PDO object
$query = $db->query("SELECT * FROM contestants WHERE contestantPost = 1"); // Run your query

//echo '<select name="DROP DOWN NAME">'; // Open your drop down box
echo "<select class=\"browser-default\" name='chairpersonz'>";
// Loop through the query results, outputing the options one by one
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
   echo '<option value="'.$row['contestantRegistrationNumber'].'">'.$row['first_name'].'" "'.$row['second_name'].'</option>';
}

echo '</select>';// Close your drop down box
       // here database details
// mysqli_connect('localhost', 'root', 'root');
// mysqli_select_db('votingSystem');
// echo "munyi";
// $sql = "SELECT * FROM contestants WHERE contestantPost = 1";

// $result = mysqli_query($sql);
// echo json_encode($result);                 

// echo "<select class=\"browser-default\" name='chairpersonz'>";
// while ($row = mysql_fetch_array($result)) {
//     echo "<option value='" . $row['contestantRegistrationNumber'] ."'>" . $row['first_name'] . " " . $row['second_name'] ."</option>";
// }

// echo "</select>";

// here username is the column of my table(userregistration)
//it works perfectly
?>
        </div>
    </div>
    </form>
    
    </body>
    </html>