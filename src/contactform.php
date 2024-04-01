<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    
    // Set your email address where you want to receive emails
    $to = "thihasoe28@yahoo.com"; // Replace with your Gmail or Yahoo mail address
    
    // Set email subject and content
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from $name.\n\n".
                  "Email: $email\n\n".
                  "Message:\n$message";
    
    // Set headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    // Send email
    mail($to, $email_subject, $email_body, $headers);
    
    // Redirect back to the contact form with success message
    header('Location: index.html?success=1#contact');
} else {
    // If access directly without form submission, redirect to the homepage
    header('Location: index.html');
}
?>
