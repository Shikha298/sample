<?php
function send_contact_email($name, $email, $message) {
    $to      = "recruiter@antonline.com";
    $subject = "New message from $name";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    return mail($to, $subject, $body);
}