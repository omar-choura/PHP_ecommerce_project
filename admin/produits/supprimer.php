<?php

$idproduit= $_GET['idp'];
include "../../inc/functions.php";
$conn=connect();
$requette="DELETE FROM produits WHERE id ='$idproduit'";
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?delete="ok"');
}

?>