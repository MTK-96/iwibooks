<?php
  // Looking for the submit

  if(filter_has_var(INPUT_POST, 'submit')){

    // Grabbing the data
    $fullName = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['EMAIL']);

    $toEmail = 'lmaomitch@gmail.com';
    $subject = 'Newsletter' .$email;
    $body =  '<h2>Newsletter Subscription</h2>
             <h4>Full Name</h4><p>'.$firstName.'</p>
             <h4>Email</h4><p>'.$email.'</p>
    ';

    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    
    // From

    $headers .= "From: " .$name. "<".$email.">"."\r\n";

    if(mail($toEmail, $subject, $body, $headers)){
        // Email Sent
        
    } else {
      
    }
             
  }
?>


