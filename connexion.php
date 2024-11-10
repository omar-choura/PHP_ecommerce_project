<?php

session_start();


if(isset($_SESSION['nom'])){
    header('location:profile.php');
}


include "inc/functions.php";
$user = true;
$categories = getALLCategories();

if(!empty($_POST)){

  $user = ConnectVisiteur($_POST);

    if (is_array($user) && count($user) > 0) {

      session_start();
      $_SESSION['email']= $user['email'];
      $_SESSION['nom']= $user['nom'];
      $_SESSION['prenom']= $user['prenom'];
      $_SESSION['mp']= $user['mp'];
      $_SESSION['telephone']= $user['telephone'];
      header('location:profile.php');
      exit;

    }

}


?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coonexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.css/>
</head>
<body>

<?php
    include "inc/header.php";
    
    ?>

  <h1 class="text-center">Coonexion</h1>
  <div class="col-12 p-5">
  <form action="connexion.php" method="post">
    <div class="mb-3">

      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
      <input type="password" name="mp" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">connecter</button>
  </form>
</div>


<?php
      
      include "inc/footer.php";
      ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src =https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.min.js></script>
      <?php

      if(!$user){
      print"
      <script>
      Swal.fire({
        title: 'Erreur',
        text: 'cordonnes non valide',
        icon: 'error',
        confirmButtonText: 'ok',
        timer :2000
      })
      </script>
      ";
    }

      ?>


  </body>
</php>
