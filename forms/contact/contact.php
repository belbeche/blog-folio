<?php
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Le champ nom est vide';
    }

    if (empty($email)) {
        $errors[] = " le champ e-mail est vide";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "l'email est invalide !, merci de vérifier votre adresse e-mail";
    }

    if (empty($message)) {
        $errors[] = 'le champ message est vide ';
    }


    if (empty($errors)) {
        $toEmail = 'wbelbeche.s@gmail.com';
        $emailSubject = "Votre message à bien été reçu";
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: thank-you.html.php');
        } else {
            $errorMessage = "Oups, quelque chose s'est mal passé. Veuillez réessayer plus tard";
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}
