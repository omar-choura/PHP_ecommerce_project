<?php


function connect(){
  $servername="localhost";
$DBuser="root";
$DBpassword="";
$DBname="php_produits";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  return $conn;

}

function getALLCategories(){
    //1
$conn = connect();
//2

$requette = " SELECT * FROM categories";

//3

$resultat = $conn->query($requette);

//4

$categories = $resultat->fetchAll();


return $categories;
}

function getALLProducts(){
      //1
      $conn = connect();
//2

$requette = " SELECT * FROM produits";

//3

$resultat = $conn->query($requette);

//4

$produits = $resultat->fetchAll();


return $produits;

}

function searchProduit($Keywords){
//1
  $conn = connect();
  //2

$requette = " SELECT * FROM produits WHERE nom LIKE '%$Keywords%'";
//3

$resultat = $conn->query($requette);
//4

$produits = $resultat->fetchAll();

return $produits;

}

function getProduitById($id){
  $conn =connect();
  //1
  $requette ="SELECT * FROM produits WHERE id=$id";
  //3
  $resultat = $conn->query($requette);
//4

$produit = $resultat->fetch();

return $produit;


}

function AddVisteur($data){
  $conn =connect();
  $mphash = md5($data["mp"]);
  //2
  $requette = "INSERT INTO visiteur(nom,prenom,email,mp,telephone) VALUES('".$data["nom"]."','".$data["prenom"]."','".$data["email"]."','".$mphash."','".$data["telephone"]."')";

  $resultat = $conn->query($requette);

  if($resultat){
    return true;
  }else{
    return false;
  }
}

function ConnectVisiteur($data){
  $conn = connect();
  
  $email=$data['email'];
  $mp=md5($data['mp']);

  $requette ="SELECT * FROM visiteur WHERE email = '$email' AND mp='$mp'";

  $resultat = $conn->query($requette);

  $user=$resultat->fetch();

  return $user;
}

function ConnectAdmin($data){
  $conn = connect();
  
  $email= $data['email'];
  $mp= md5($data['mp']);

  $requette ="SELECT * FROM administrateur WHERE email = '$email' AND mp='$mp'";

  $resultat = $conn->query($requette);

  $user=$resultat->fetch();

  return $user;

}


?>