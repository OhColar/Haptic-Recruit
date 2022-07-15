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
    $your_name      = filter_var($_POST["your_name"], FILTER_SANITIZE_STRING);
    $your_email   = filter_var($_POST["your_email"], FILTER_SANITIZE_EMAIL);
    $friends_name   = filter_var($_POST["friends_name"], FILTER_SANITIZE_STRING);
    $friends_email   = filter_var($_POST["friends_email"], FILTER_SANITIZE_STRING);
    $friend_specialism   = filter_var($_POST["friend_specialism"], FILTER_SANITIZE_STRING);
    $refer_termsCheck   = filter_var($_POST["refer_termsCheck"], FILTER_SANITIZE_STRING);
    $subject         = "Website Referral Submitted";
     
    //Textbox Validation 
    // if(strlen($fullName)<4){ // If length is less than 4 it will output JSON error.
    //     $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
    //     die($output);
    // }


    $message = '<html><body>';
    $message .= '<h1>New Website Referral</h1>';
    $message .= "<p><strong>" . strip_tags($_POST['your_name']) . "</strong> is referring <strong>" . strip_tags($_POST['friends_name']) . "</strong></p>";
    $message .= '<table rules="all" style="border: 1px solid #CCC;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Your Name:</strong> </td><td>" . strip_tags($_POST['your_name']) . "</td></tr>";
    $message .= "<tr><td><strong>Your email :</strong> </td><td>" . strip_tags($_POST['your_email']) . "</td></tr>";
    $message .= "<tr><td><strong>Their Friend's name :</strong> </td><td>" . strip_tags($_POST['friends_name']) . "</td></tr>";
    $message .= "<tr><td><strong>Their friend's email :</strong> </td><td>" . strip_tags($_POST['friends_email']) . "</td></tr>";
    $message .= "<tr><td><strong>Their friend's specialism :</strong> </td><td>" . strip_tags($_POST['friend_specialism']) . "</td></tr>";
    // $message .= "<tr><td><strong>Connection Date :</strong> </td><td>" . strip_tags($_POST['contactDate']) . "</td></tr>";
    $message .= "<tr><td><strong>Agreed to Terms and Privay Policy :</strong> </td><td>" . strip_tags($_POST['refer_termsCheck']) . "</td></tr>";
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