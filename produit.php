<?php
include "inc/functions.php";
$categories = getALLCategories();

if(isset($_GET['id'])){
    $produit = getProduitById($_GET['id']);
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
    <link rel="stylesheet" href="assets/css/style2.css"/>
</head>
<body>
    
    <?php
    include "inc/header.php";
    
    ?>
      <!--gants-->
        <div class="row col-12 mt-4">
        <div class="card col-8 offset-2" >
                <img src="<?php echo $produit['image'] ?>" class="card-img-top" alt="..." width="200" height="400" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produit['nom']?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $produit['prix']." DT"?></li>
                    <li class="list-group-item"><?php echo $produit['categorie']?></li>
                    <li class="list-group-item"><?php echo $produit['matiere']?></li>
                </ul>
        </div>

        </div>

        <?php
      
      include "inc/footer.php";
      ?>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>