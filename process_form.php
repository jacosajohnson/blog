<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address here
    $to = "jacosa.johnson@gmail.com";
    
    $subject = "Contact Form Submission from $name";
    
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank you page or display a confirmation message
    header("Location: thank_you.html");
}
