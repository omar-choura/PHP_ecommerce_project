<?php
session_start();

$id = $_POST['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$categorie = $_POST['categorie'];
$matiere = $_POST['matiere'];

$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image = "images/" . basename($_FILES["image"]["name"]);
} else {
    echo "Sorry, there was an error uploading your file.";
}

include "../../inc/functions.php";

$conn = connect();

// Check 
$query = "SELECT COUNT(*) AS count FROM produits WHERE id = '$id'";
$result = $conn->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row['count'] > 0) {
    
    $_SESSION['error'] = "Product with ID $id already exists.";
    header('location: liste.php');
    
}

// Prepare 
$requete = "INSERT INTO produits (id, nom, prix, image, categorie, matiere) VALUES ('$id', '$nom', '$prix', '$image', '$categorie', '$matiere')";

// Execute 
$resultat = $conn->query($requete);

// Check 
if ($resultat) {
    header('location: liste.php?ajout=ok');
}
?>
