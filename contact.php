<?php
  // Looking for the submit

  if(filter_has_var(INPUT_POST, 'submit')){

    // Grabbing the data
    $fullName = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $toEmail = 'mitchellboumelhem@gmail.com';
    $subject = 'Customer Inquiry' .$email;
    $body =  '<h2>Customer Inquiry</h2>
             <h4>Full Name</h4><p>'.$firstName.'</p>
             <h4>Email</h4><p>'.$email.'</p>
             <h4>Phone</h4><p>'.$phone.'</p>
             <h4>Message</h4><p>'.$message.'</p>
    
    ';

    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    
    // From

    $headers .= "From: " .$name. "<".$email.">"."\r\n";

    if(mail($toEmail, $subject, $body, $headers)){
        // Email Sent
        header("location: contact-success.html?mailsend");
    } else {
      
    }

    if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['comment'])){

      echo 'error please remove URLs';
      
      }else
      {
             
    }
  }
?>


