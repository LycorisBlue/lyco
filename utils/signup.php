<?php

// Connexion PDO 
require("../db.php");

if(isset($_POST['submit'])){

  // Récupération des données 
  $nom = $_POST['name'];
  $prenom = $_POST['lastname'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];

  // Requête préparée
  $sql = "INSERT INTO users (name, lastname, email, mdp) VALUES (:name, :lastname, :email, :mdp)";

  $stmt = $db->prepare($sql);

  $stmt->bindParam(':name', $nom);
  $stmt->bindParam(':lastname', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':mdp', $mdp);

  $stmt->execute();
  
  
  echo "Inscription réussie!";
  header("Location: ../login.php");

}

?>