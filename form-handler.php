<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['Message'];

$email_from = 'ashtosh2008@gmail.com';

$email_subject = 'New Form Subbbmisson';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

$to = "ashtosh16082001@gmail.com";

$headers = "From : $email_from\r\n";
$headers .= "Reply-To: $Visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: get-quote.html")

?>