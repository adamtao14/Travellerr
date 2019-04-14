<?php
if(isset($_POST["submit-contact"])){

    $emailTo = "traveask@gmail.com";

    $subject = $_POST["subject-contact"];

    $body ='
                   

                    Nome : '.$_POST["name-contact"].'
                    Email : '.$_POST["email-contact"].'
                    Domanda : '.$_POST["message-contact"].'

                   ';
                  ;

    $headers = "Inviata da ".$_POST["name-contact"];

    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo '<script type="text/javascript">
           window.location = "http://adamtaoufiq-com.stackstaging.com/travellerr/php/success.html"
      </script>';
        
    } else {
        
        echo '<script type="text/javascript">
           window.location = "http://adamtaoufiq-com.stackstaging.com/travellerr/php/failed.html"
      </script>';
        
    }
}


?>
    
 
