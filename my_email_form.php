<?php
  $name = $_POST['name'];
  $other_email = $_POST['email'];
  $message = $_POST['message'];
  $email_to_send = 'kes156@pitt.edu';
  $email_subject = "New Website Contact";
  $email_body = "New message from: $name.\n".
  "See message below:\n $message".
  $to = "kes156@pitt.edu";
  $headers = "From: $email_to_send \r\n";
  $headers .= "Reply-To: $other_email \r\n";
  //commenting this out becasue website is not live and won't work
  //mail($to,$email_subject,$email_body,$headers);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Email Form Submitted">
    <meta name="author" content="Kaitlyn Shields">
    <title>Submission Confirmation</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/stylish-portfolio.css" rel="stylesheet">
  </head>
  <body>
    <div>
      <br>
      <br>
      <br>
      <center>Thank you for your message! Click <a href="./index.php"> here </a> to return to my website :)<center>
    </div>
  </body>
</html>
