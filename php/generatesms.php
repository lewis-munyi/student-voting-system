<?php 
	session_start();
    $min = 1000;
    $max = 9999;
    $code = (random_int(  $min , $max ));
    
    //echo '<script type="text/javascript">',
    //'mysms();',
    //'</script>';
    header("Location:   https://africastalking-lewismunyi.c9users.io/sms.php?code=$code");   
    
    // Close connection
    //mysqli_close($connection);
    // Close connection
    mysqli_close($connection);
 ?>