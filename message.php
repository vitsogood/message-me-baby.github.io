<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $reciever = "zmanalojovit@gmail.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n\nRegards,\n$name ";
            $sender = "From: $email";

            if(mail($reciever, $subject, $body, $sender)){
                echo "Your message has been sent";
            }else{
                echo "Sorry, failed to send your message";
            }
        }else{
            echo "Enter valid email address";
        }
    }else{
        echo "Email and Message is required";
    }

?>