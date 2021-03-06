<!DOCTYPE html>

<head>
    <title>Courses</title>
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
<?php
	if (isset($_GET['btnSubmit'])) {
	    $course_title = $_GET['course_title'];
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

		// Sql Query
		$sql = "INSERT INTO courses(course_title) VALUES ('$course_title')";

		if (mysqli_query($connection, $sql)) {
		    echo $course_title." created successfully";
		} 
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}
	} 
	?>
    <div class="container">
        <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
        </script>
	
            <form class="col s12" method="GET" action="register2.php">
                <div class="row">
                    <div class="input-field col s6">
                        <a class="" active>Course title</a>
                        <select name="course_title">
                            <optgroup label="Select course">
                                <option value="Agriculture, Education and Extension">Agriculture, Education and Extension</option>
                                <option value="Agribusiness Management">Agribusiness Management</option>
                                <option value="Food Science, Nutrition & Dietetics">Food Science, Nutrition & Dietetics</option>
                                <option value="Climate Change & Development">Climate Change & Development</option>
                                <option value="Agricultural Economics">Agricultural Economics</option>
                                <option value="Agricultural Education And Extension">Agricultural Education And Extension</option>
                                <option value="Agriculture animal Science Major">Agriculture animal Science Major</option>
                                <option value="Fisheries And Aquaculture Management">Fisheries And Aquaculture Management</option>
                                <option value="Wildlife Management And Conservation">Wildlife Management And Conservation</option>
                                <option value="Food Science And Technology">Food Science And Technology</option>
                                <option value="Food Nutrition And Dietetics">Food Nutrition And Dietetics</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Range Management">Range Management</option>
                                <option value="Management Of Agroecosystems & Environment">Management Of Agroecosystems & Environment</option>
                                <option value="Horticulture">Horticulture</option>
                                <option value="Bio-medical Technology">Bio-medical Technology</option>
                                <option value="Wildlife Management">Wildlife Management</option>
                                <option value="Veterinary Medicine">Veterinary Medicine</option>
                                <option value="Wildlife Management And Conservation">Wildlife Management And Conservation</option>
                                <option value="Environmental Chemistry">Environmental Chemistry</option>
                                <option value="Analytical Chemistry">Analytical Chemistry</option>
                                <option value="Industrial Chemistry">Industrial Chemistry</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Petroleum Geoscience">Petroleum Geoscience</option>
                                <option value="Actuarial Science">Actuarial Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Statistics">Statistics</option>
                                <option value="Meteorology">Meteorology</option>
                                <option value="Atmospheric Science">Atmospheric Science</option>
                                <option value="Microprocessor Technology & Instrumentation">Microprocessor Technology & Instrumentation</option>
                                <option value="In Astronomy And Astrophysics">In Astronomy And Astrophysics</option>
                                <option value="Physics">Physics</option>
                                <option value="Bed Science Physics">Bed Science Physics</option>
                                <option value="Biology">Biology</option>
                                <option value="Microbiology And Biotechnology">Microbiology And Biotechnology</option>
                                <option value="Environmental Conservation And Natural Resource Management">Environmental Conservation And Natural Resource Management</option>
                                <option value="Computer Science</option>">Computer Science</option>
                                <option value="Industrial Chemistry">Industrial Chemistry</option>
                                <option value="Distance Learning">Distance Learning</option>
                                <option value="Geology Distance Learning">Geology Distance Learning</option>
                                <option value="Education Science">Education Science</option>
                                <option value="Analytical Chemistry">Analytical Chemistry</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Food Science & Technology">Food Science & Technology</option>
                                <option value="Design">Design</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Environmental And Biosystems Engineering">Environmental And Biosystems Engineering</option>
                                <option value="Electrical And Electronic Engineering">Electrical And Electronic Engineering</option>
                                <option value="Surveying">Surveying</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>
                                <option value="Geospatial Engineering">Geospatial Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Construction Management">Construction Management</option>
                                <option value="Quantity Surveying">Quantity Surveying</option>
                                <option value="Urban & Regional Planning">Urban & Regional Planning</option>
                                <option value="Commerce By Distance">Commerce By Distance</option>
                                <option value="Artsdistance">Artsdistance</option>
                                <option value="Education Arts, Distance">Education Arts, Distance</option>
                                <option value="Education Arts (History And Geography)">Education Arts (History And Geography)</option>
                                <option value="62">Education Arts (History And Cre)</option>
                                <option value="63">Education Arts (Geography And Mathematics)</option>
                                <option value="64">Education Arts (Double Mathematics)</option>
                                <option value="65">Education Arts (Mathematics And Business Studies)</option>
                                <option value="66">Education Arts (Geography And Environmental Studies And Business Studies)</option>
                                <option value="67">Education Arts (English And Literature)</option>
                                <option value="68">Education Science In Physics And Geography And Environmental Studies</option>
                                <option value="69">Education Science In Double Mathematics</option>
                                <option value="70">Physics</option>
                                <option value="71">Analytical Chemistry</option>
                                <option value="72">Industrial Chemistry</option>
                                <option value="73">Geology</option>
                                <option value="74">Meteorology</option>
                                <option value="75">Pure Mathematics</option>
                                <option value="76">Applied Mathematics</option>
                                <option value="77">Zoology</option>
                                <option value="78">Botany</option>
                                <option value="79">Geography And Environmental Studies</option>
                                <option value="80">Arts (History)</option>
                                <option value="81">Arts (Tourism)</option>
                                <option value="82">Arts (English Language)</option>
                                <option value="83">Arts (Literature)</option>
                                <option value="84">Arts (Kiswahili)</option>
                                <option value="85">Arts (Communication)</option>
                                <option value="86">Arts (Arabic Studies)</option>
                                <option value="87">Arts Sociology And Social Work</option>
                                <option value="88">Arts Christian Religious Studies</option>
                                <option value="89">Arts (Philosophy)</option>
                                <option value="90">Arts (Psychology)</option>
                                <option value="91">Arts (Guidance And Counseling)</option>
                                <option value="92">Arts (Geography And Environmental Studies)</option>
                                <option value="93">Commerce (Accounting)</option>
                                <option value="94">Commerce (Finance)</option>
                                <option value="95">Commerce (Marketing)</option>
                                <option value="96">Commerce (Human Resource Management)</option>
                                <option value="97">Commerce (Insurance And Management)</option>
                                <option value="98">Commerce (Procurement And Purchasing And Supplies)</option>
                                <option value="99">Commerce (Operations Management)</option>
                                <option value="100">Commerce (Business Information Systems)</option>
                                <option value="101">Arts In Political Science And Public Administration</option>
                                <option value="102">Science By Distance Learning</option>
                                <option value="103">Education Arts</option>
                                <option value="104">Arts External Studies</option>
                                <option value="105">Science External Studies</option>
                                <option value="106">Education Arts</option>
                                <option value="107">Education Science</option>
                                <option value="108">Early Childhood Education</option>
                                <option value="109">Education Early Childhood</option>
                                <option value="110">Bahelor Of Education Ict</option>
                                <option value="111">Arts By Distance Learning.</option>
                                <option value="112">Arts By Distance Learning</option>
                                <option value="113">Science By Distance Learning</option>
                                <option value="114">Project Planning And Management</option>
                                <option value="115">Education Science</option>
                                <option value="116">Education Ict</option>
                                <option value="117">Education Physical Education</option>
                                <option value="118">Biochemistry</option>
                                <option value="119">Human Anatomy</option>
                                <option value="120">Medical Laboratory Sciences And Technology Mlst</option>
                                <option value="121">Medical Laboratory Science And Technology</option>
                                <option value="122">Tercalated Honors In Medical Physiology</option>
                                <option value="123">Human Anatomyintercalated</option>
                                <option value="124">Medicine And Surgery</option>
                                <option value="125">Medical Physiology</option>
                                <option value="126">Nursing</option>
                                <option value="127">Dental Surgery</option>
                                <option value="128">Pharmacy</option>
                                <option value="129">Arts (Gender And Development)</option>
                                <option value="130">Arts (Anthropology)</option>
                                <option value="131">Economics</option>
                                <option value="132">Economics & Statistics</option>
                                <option value="133">Commerce - Finance Option</option>
                                <option value="134">Commerce- Accounting Option</option>
                                <option value="135">German Studies</option>
                                <option value="136">Arts In International Studies</option>
                                <option value="137">Arts In International Studies</option>
                                <option value="138">Arts Broadcast Production</option>
                                <option value="139">Arts Journalism & Media Studies</option>
                                <option value="140">Kiswahili</option>
                                <option value="141">Arts Degree In Korean Studies</option>
                                <option value="142">Communication Skills</option>
                                <option value="143">Law</option>
                                <option value="144">Arts (Literature)</option>
                                <option value="145">Arts (Performing Arts)</option>
                                <option value="146">Commerce</option>
                                <option value="147">Artsdistance</option>
                                <option value="148">Education Arts, Distance</option>
                                <option value="149">Science By Distance Learning</option>
                                <option value="150">Education Arts,</option>
                                <option value="151">Psychology Counselling</option>
                                <option value="152">Arts (Psychology)</option>
                                <option value="153">Arts (Social Work)</option>
                                <option value="154">Arts (Sociology)</option>
                                <option value="155">Criminology And Criminal Justice</option>
                                <option value="156">Education Science</option>
                                <option value="157">In Education Ict</option>
                                <option value="158">Project Planning And Management</option>
                                <option value="159">Commerce</option>
                                <option value="160">Project Planning And Management</option>
                                <option value="161">Economics</option>
                                <option value="162">Economics & Statistics</option>
                                <option value="163">Education Arts</option>
                                <option value="164">Education Science</option>
                                <option value="165">Education Early Childhood</option>
                                <option value="166">Bahelor Of Education Ict</option>
                                <option value="167">Education Arts - External Studies</option>
                                <option value="168">Arts</option>
                                <option value="169">Commerce</option>
                                <option value="170">Project Planning And Management</option>
                            </optgroup>
                        </select>
                        <input type="submit" value="Register" name="btnSubmit" class="waves-effect waves-light btn" id="btnSubmit">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    </div>
                </div>
            </form>
    
    </div>
</body>

</html>
