<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Create the email content
    $to = 'paulorngu@gmail.com'; // Replace with your email address
    $subject = 'Contact Form Submission';
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Send the email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $mail_result = mail($to, $subject, $email_content, $headers);

    // Check if the email was sent successfully
    if ($mail_result) {
        echo '<p>Thank you for contacting us. We will get back to you soon!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>