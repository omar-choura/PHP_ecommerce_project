<?php
session_start();

include "inc/functions.php";
$categories = getALLCategories();
$produits = getALLProducts();

if(!empty($_POST)){

  $produits = searchProduit($_POST['search']);

}else{
  $produits = getALLProducts();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/assets/css/style2.css"/>
</head>
<body>
    
    <?php
    include "inc/header.php";
    
    ?>

      <section id="home" >
       
      </section>

      <!--gants-->
      <section id="featured" class="my-5 pb-5">
        <div class="row mx-auto container-fluid">
        <?php

          foreach($produits as $produit){
            print'<div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="'.$produit['image'].'" width="220" height="220"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">'.$produit['nom'].'</h5>
            <h4 class="p-price">'.$produit['prix'].' DT</h4>
            <a href="produit.php?id='.$produit['id'].'" class="btn buy-btn">afficher</a>
          </div>';

          }
          ?>

      <?php
      
      include "inc/footer.php";
      ?>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>