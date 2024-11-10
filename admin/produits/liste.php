<?php
session_start();

include "../../inc/functions.php";

$categories = getALLCategories();
$produits = getALLProducts();


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Admin:profile</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../../deconnexion.php">Deconnexion</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
  <?php
    
    include "../template/navigation.php";
    
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Liste des produits</h1>
        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter</a>
      </div>
      <!-- liste start -->
      <div>
        
     
      <?php
      if(isset($_GET['ajout'])&& $_GET['ajout']== "ok"){
        print'<div class="alert alert-success">produit ajouter avec succes</div>';
      }
      
      ?>

      <?php
      if(isset($_GET['delete'])&& $_GET['delete']== "ok"){
        print'<div class="alert alert-success">produit supprimee avec succes</div>';
      }
      ?>

        
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">prix</th>
      <th scope="col">image</th>
      <th scope="col">categorie</th>
      <th scope="col">matiere</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>


  <?php
        
        foreach($produits as $i => $p){
        $i++;
            print'<tr>
            <th scope="row">'.$i.'</th>
            <td>'.$p['id'].'</td>
            <td>'.$p['nom'].'</td>
            <td>'.$p['prix'].'</td>
            <td>'.$p['image'].'</td>
            <td>'.$p['categorie'].'</td>
            <td>'.$p['matiere'].'</td>
            <td>
              
              <a href="supprimer.php?idp='.$p['id'].'" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>';

        }
  
  ?>
    
  </tbody>
</table>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajout produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ajout.php" method="post" enctype="multipart/form-data">

        <div class="from-group">
            <input type="text" name="id" class="form-control" placeholder="id de produit...">
            <!--?php
              if($id == $d){
              print'<div class="alert alert-success">il existe deja</div>';
            }
              -->
        </div>

        <div class="from-group">
            <input type="text" name="nom" class="form-control" placeholder="nom de produit...">
      
        </div>
        <div class="from-group">
            <input type="number" step="0.01" name="prix" class="form-control" placeholder="prix de produit...">
        </div>

        <div class="from-group">
            <input type="file"  name="image" class="form-control">
        </div>

        <div class="from-group">
            <select name="categorie" class="form-control">
              <?php
              foreach($categories as $index => $c){
              print'<option value="'.$c['nom'].'">'.$c['nom'].'</option>';
            }
              ?>


            </select>
        </div>
        <div class="from-group">
            <input type="text" name="matiere" class="form-control" placeholder="matiere de produit...">
        </div>
        
        
      </div>
      <div class="modal-footer">
       
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="../../js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        
        <script src="../../js/dashboard.js"></script>
  </body>
</html>
