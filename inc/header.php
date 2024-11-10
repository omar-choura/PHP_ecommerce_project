

<link rel="stylesheet" href="assets/css/style2.css"/>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
          <img src="images/mmalogo.png" width="120" height="120" />
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  <?php
                      foreach($categories as $categorie){
                        print'<li><a class="dropdown-item" href="#">'.$categorie['nom'].'</a></li>';
                      }
                  ?>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
                      <?php
                      if(isset ($_SESSION['nom'])){
                        print'<li class="nav-item">
                        <a class="nav-link" href="profile.php">profile</a>
                      </li>';
                      }else{
                        print'<li class="nav-item">
                        <a class="nav-link" href="connexion.php">coonexion</a>
                      </li>
        
                      <li class="nav-item">
                        <a class="nav-link" href="registre.php">registre</a>
                      </li>';}
                      
                      
                      ?>
              

              
              
            </ul>
            <form class="d-flex" action="index.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php
            if(isset ($_SESSION['nom'])){
              print'
            <a href="deconnexion.php" class="btn btn-primary">deconnexion</a>';}
            
            ?>

            

          </div>
        </div>
      </nav>