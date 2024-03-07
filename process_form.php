<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    
    // Use appropriate validation and processing here
    
    // Example: Send an email
    $to = "phamhuudung2407@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: webmaster@example.com"; // Set appropriate headers
    
    mail($to, $subject, $message, $headers);
}
?>
