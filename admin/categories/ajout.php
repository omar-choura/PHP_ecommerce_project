<?php
session_start();

// Check  form 
if(isset($_POST['nom'], $_POST['description'])) {

    // Retrieve 
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $createur = $_SESSION['id'];
    $date_creation = date("Y-m-d");

    // Include 
    include "../../inc/functions.php";
    
    // Connect 
    $conn = connect();

    // Prepare 
    $requete = "INSERT INTO categories (nom, description, createur, date_creation) VALUES ('$nom', '$description', '$createur', '$date_creation')";

    // Execute 
    $resultat = $conn->query($requete);

    // Check 
    if($resultat) {
        header('location: liste.php?ajout=ok');
        
    }
}
?>
