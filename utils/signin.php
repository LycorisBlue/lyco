<?php
// Start the session
session_start();

// Connexion PDO 
require("../db.php");

//...

if (isset($_POST['submit'])) {

    // Récupération des données
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Vérification email
    $sql = "SELECT mdp, name, email FROM users WHERE email = :email";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $user = $stmt->fetch();

    // Si email trouvé
    if ($user) {
   


        // Vérification mot de passe
        if ($mdp == $user['mdp']) {
            $_SESSION["email"] = $user['email'];
            $_SESSION["name"] = $user['name'];
            header("Location: ../index.php");
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Email inconnu";
    }
}
