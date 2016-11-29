<?php
session_start();

    $destinataire = 'contact@mathieuharribey.fr';

    $expediteur = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['name']);
    $site = htmlspecialchars($_POST['site']);
    $message = htmlspecialchars($_POST["message"]);
    $objet = 'Contact Site';

    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
    $headers .= 'From:'.$expediteur."\n"; // Expediteur
    $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
    $message = '<div style="width: 100%;font-weight:lighter;"> Bonjour, ce message a ete envoye par '.$nom.', son site est : '.$site.', et son message est : '.$message.'</div>';

        if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
        {
          $_SESSION["notice"] = "<p id='success'>Le message a bien été envoyé. </p>";
        }
        else // Non envoyé
        {
          $_SESSION["notice"] = "<p id='alert'>Il y a un problème mon power</p>";
        }

        header("Location: index.php");
