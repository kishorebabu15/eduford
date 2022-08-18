<?php

    $name = $_POST['name'];
    $visitor_email = ['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = '4ni19cs079_a@nie.ac.in';

    $email_subject = "New Form Submission";

    $email_body = "User Name : $name .\n" .
                  "User Name : $visitor_email .\n" .
                  "SUbject : $subject.\n" .
                  "User Message : $message.\n";

    $to = "polurukishorebabu@gmail.com";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-To : $visitor_email \r\n";

    mail($to, $email_subject, $email_body,$headers);

    header("Location: contact.html");
?>
