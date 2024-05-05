<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card = $_POST['card'];
    $address = $_POST['address'];
    
    // Send email
    $to = $email;
    $subject = 'Confirmation de commande';
    $message = 'Merci d\'avoir commandé sur notre site';
    $headers = 'From: thepommestore@email.fr'; // Replace with your email

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
