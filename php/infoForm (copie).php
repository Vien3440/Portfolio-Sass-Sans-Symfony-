<?php


$erreure = array(); // initialisation tableaux 


if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {  // Si la variable nom du POST n'existe pas ou est vide  
    $erreure['nom'] = "Il manque votre nom :/ ";// alors mettre une dans le tableaux : nom 
}

if (!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    $erreure['mail'] = "Il manque votre mail ou il est non valide :/ ";
}

if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $erreure['message'] = "Il manque votre message :/ ";
}

if (!empty($erreure)) { //Si le tableaux n'est pas vide alors redirigre vers le formulaire 
    session_start();
    $_SESSION['erreure']= $erreure;
    header('Location:fromComt.php');
    
} else { // Sinon (si le tableaux est vide) le mail est envoyer 
    // Argument 1 :mail reseption  2 :Objet  3 :message 4:mail expediteur  
    mail('vikimbidima@laposte.net','Formulaire de contact',$_POST['message'],"FROM:".$_POST['mail']);
    
}




