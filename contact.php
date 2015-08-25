<?php

$first_name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST ['message'];
$to = "chern05@yahoo.com";
$subject = "Testing";

mail ($to, $subject, $message, "From: " . $first_name . $last_name);
echo "Your message was submitted";
?>