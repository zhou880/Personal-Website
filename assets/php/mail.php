<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $visitor_email;

    $email_subject = "Contact Form - Tim Zhou";

    $email_body = "You have received a new message from the user $name.\n Here is the message:\n $message";

    $to = "zhou880@purdue.edu";



    mail($to,$email_subject,$email_body,"From: $name <$visitor_email>");
    header("Location: index.html?mailsend");
}



                        
?>