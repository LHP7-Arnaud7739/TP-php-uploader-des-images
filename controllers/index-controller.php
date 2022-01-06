<?php

// Nous verifions que l'utilisateur a bien cliqué sur le bouton submit
if (isset($_POST['btn-submit'])) {

    // On vérifie que les POST ne sont pas vides
    if (!empty($_POST['login']) && !empty($_POST['password'])) {

        // On stock les post dans des variables explicites
        $login = $_POST['login'];
        $password = $_POST['password'];
      
        // on test si la clef $login existe bien dans notre tableau $users
        if (array_key_exists($login, $usersArray)) {

            // on compare le mdp avec le mdp stocké à l'aide de la fonction password verify
            if (password_verify($password, $usersArray[$login]['password'])) {
                // Recuperation du login et du cota lors de la connexions 
                session_start();
$_SESSION['login']=$_POST['login'];
$_SESSION['quota']=$usersArray[$_POST['login']]['quota'];
$_SESSION['formule']=$usersArray[$_POST['login']]['formule'];
                header("location:views/dashboard.php"); 

            } else {
                echo 'Mot de passe incorrect';
            }
        } else {
            echo 'login incorrect';
        }
    } else {
        echo 'il manque un / des champ(s)';
    }
}
