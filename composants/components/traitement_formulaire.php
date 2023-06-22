<?php
// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validation des données (vous pouvez ajouter des validations supplémentaires selon vos besoins)

    // Préparation du contenu de l'e-mail
    $to = 'jakim2621@gmail.com'; // Adresse e-mail de réception des messages
    $subject = 'Nouveau message de contact';
    $body = "Nom : $name\n\n";
    $body .= "Adresse e-mail : $email\n\n";
    $body .= "Message :\n$message";

    // Envoi de l'e-mail
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        // Succès de l'envoi de l'e-mail
        echo '<p>Votre message a été envoyé avec succès. Nous vous répondrons dès que possible.</p>';
    } else {
        // Échec de l'envoi de l'e-mail
        echo '<p>Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.</p>';
    }
} else {
    // Redirection vers la page de contact si le formulaire n'a pas été soumis directement à ce fichier
    header('Location: contact.php');
    exit();
}
?>
