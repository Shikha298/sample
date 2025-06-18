<?php
require_once 'includes/mailer.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    $result = send_contact_email($name, $email, $message);
    echo $result ? "Message sent successfully." : "Failed to send message.";
}
?>

<!-- Simple HTML Form -->
<form method="POST" action="">
  <input type="text" name="name" placeholder="Your Name" required><br>
  <input type="email" name="email" placeholder="Your Email" required><br>
  <textarea name="message" placeholder="Message" required></textarea><br>
  <button type="submit">Send</button>
</form>