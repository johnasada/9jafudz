<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'johnasada6@gmail.com';
  $headers = 'From: ' . $email . '\r\n';

  mail($to, $subject, $message, $headers);
?>

