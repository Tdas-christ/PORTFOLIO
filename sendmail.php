<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set email parameters
$to = 'tdas.tanisha@gmail.com'; // Your email address
$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send email
mail($to, $subject, $body);

// Redirect back to the contact page
header('Location: index.html');
exit;
?>