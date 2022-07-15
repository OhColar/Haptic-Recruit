<?php
 
        
    //Recepient Email Address
    // $to_email       = "james@hapticrecruit.com";
    $to_email       = "info@hapticrecruit.com";
    //$to_email       = "alex@arcdevelop.co.uk";
 
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }

    //Sanitize input data using PHP filter_var().
    $studio      = filter_var($_POST["studio"], FILTER_SANITIZE_STRING);
    $location   = filter_var($_POST["location"], FILTER_SANITIZE_EMAIL);
    $name_position   = filter_var($_POST["name_position"], FILTER_SANITIZE_STRING);
    $client_email   = filter_var($_POST["client_email"], FILTER_SANITIZE_STRING);
    $client_telephone   = filter_var($_POST["client_telephone"], FILTER_SANITIZE_STRING);
    $client_termsCheck   = filter_var($_POST["client_termsCheck"], FILTER_SANITIZE_STRING);
    $subject         = "Client Contact Request";
     
    //Textbox Validation 
    // if(strlen($fullName)<4){ // If length is less than 4 it will output JSON error.
    //     $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
    //     die($output);
    // }


    $message = '<html><body>';
    $message .= '<h1>New Client Contact</h1>';
    $message .= '<table rules="all" style="border: 1px solid #CCC;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Studio Name:</strong> </td><td>" . strip_tags($_POST['studio']) . "</td></tr>";
    $message .= "<tr><td><strong>Location :</strong> </td><td>" . strip_tags($_POST['location']) . "</td></tr>";
    $message .= "<tr><td><strong>Name and Position :</strong> </td><td>" . strip_tags($_POST['name_position']) . "</td></tr>";
    $message .= "<tr><td><strong>Email Address :</strong> </td><td>" . strip_tags($_POST['client_email']) . "</td></tr>";
    $message .= "<tr><td><strong>Telephone :</strong> </td><td>" . strip_tags($_POST['client_telephone']) . "</td></tr>";
    // $message .= "<tr><td><strong>Connection Date :</strong> </td><td>" . strip_tags($_POST['contactDate']) . "</td></tr>";
    $message .= "<tr><td><strong>Agreed to Terms and Privay Policy :</strong> </td><td>" . strip_tags($_POST['client_termsCheck']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";


          
        $eol = "\r\n";
        
        $headers = "From: Haptic Website <info@hapticrecruit.com>" . $eol;
        $headers .= "Reply-To: ". strip_tags($email_address) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body .= $message . $eol;
 
 
    $send_mail = mail($to_email, $subject, $body, $headers);
 
    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$first_name .' Thank you for your order, will get back to you shortly'));
        die($output);
    }
 
?>