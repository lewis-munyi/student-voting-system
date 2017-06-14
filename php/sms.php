    <?php
    session_start();
    $code = $_GET['code'];
    echo $code;
    // Be sure to include the file you've just downloaded
    require_once('AfricasTalkingGateway.php');
    // Specify your login credentials
    $username   = "LEWISMUNYI254";
    $apikey     = "7d599966729660d8b8647736da88fd0445b77abbbde4d05042bccddcd9d790c0";
    // NOTE: If connecting to the sandbox, please use your sandbox login credentials
    // Specify the numbers that you want to send to in a comma-separated list
    // Please ensure you include the country code (+254 for Kenya in this case)
    $recipients = "+254713833769";
    // And of course we want our recipients to know what we really do
    $message    = "Your login passcode is ".$code."\nUse it to log into your portal";
    // Create a new instance of our awesome gateway class
    $gateway    = new AfricasTalkingGateway($username, $apikey," sandbox");
    // NOTE: If connecting to the sandbox, please add the sandbox flag to the constructor:
    /*************************************************************************************
                 ****SANDBOX****
    $gateway    = new AfricasTalkingGateway($username, $apiKey, "sandbox");
    **************************************************************************************/
    // Any gateway error will be captured by our custom Exception class below, 
    // so wrap the call in a try-catch block
    try 
    { 
      // Thats it, hit send and we'll take care of the rest. 
      $results = $gateway->sendMessage($recipients, $message);
      echo $message;
      foreach($results as $result) {
        // status is either "Success" or "error message"
        echo " Number: " .$result->number;
        echo " Status: " .$result->status;
        echo " MessageId: " .$result->messageId;
        echo " Cost: "   .$result->cost."\n";
        echo $code;
      }
      header("Location:  https://localhost/student-voting-system/php/approvesms.php");

    }
    catch ( AfricasTalkingGatewayException $e )
    {
      echo "Encountered an error while sending: ".$e->getMessage();
      header("Location:  https://7a8268a3.ngrok.io/student-voting-system/php/errorsms.php");
    }
    // DONE!!! 