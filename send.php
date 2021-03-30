<?php


if(isset($_POST['email'])) {

 

    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "gowri@brandstory.in";//";



    $email_subject = "Motely Dance Company Home Page Contact Form";



 

    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }

 

 

    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['phone']) ||

        )) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');       

    }

   

 

    $company_name = $_POST['name']; // required

    $email_from = $_POST['email']; // required

    $phone = $_POST['phone']; 
 

    $error_message = "";

 

 

    $email_message = "Form details below.\n\n";

 

     

    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:");

      return str_replace($bad,"",$string);

    }

 

     

 

    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Phone: ".clean_string($phone)."\n";

 

// create email headers

$headers = "From: bharath@brandstory.in \r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

    

@mail($email_to, $email_subject, $email_message, $headers);  

}



?>