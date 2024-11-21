
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "stuffcustom55@gmail.com"; // Twój adres e-mail
    $subject = "Wiadomość z formularza kontaktowego";
    $body = "Imię: $name\nE-mail: $email\n\nWiadomość:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }
}
?>
