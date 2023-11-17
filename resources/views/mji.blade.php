<!DOCTYPE html>
<html>
  <head>
    <title>MJIK</title>
    <link rel="stylesheet" type="text/css" href="icc1.css">
    <script src="https://kit.fontawesome.com/3796f395ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="pictures/logoicc.PNG" />
    <script src="https://kit.fontawesome.com/3796f395ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/impact.css">
    <link rel="stylesheet" href="css/style.css">


  </head>

<body>


  <header  class="lineaire-simple">

  
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Twelfth navbar example" id="header">
      <div class="container-fluid">
  
        <div class="logo">
          <a href="/index"> <img src="pictures/logoicc.PNG" style="height: 50px; width: 50px;"> </a> <p>Kinshasa</p>
      </div>
  
    <div class="menu">
      <ul>
        <li class="ferme"><a onclick="close()">FERMER</a>
          <script>
        const navbarLink = document.querySelector(".ferme");
  
        // Ajouter un écouteur d'événements sur l'élément
        navbarLink.addEventListener("click", () => {
          // Fermer le menu déroulant
          const navbarDropdown = document.querySelector(".menu");
          navbarDropdown.setAttribute("hidden", true);
        });
          </script>
        </li>
          <li><a href="/index">ACCUEIL</a></li>
          <li class="nav-item dropdown">
            <p class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-current="page">A PROPOS</p>
            <ol class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Qui sommes-nous</a></li>
              <li><a class="dropdown-item" href="#">Nos programmes</a></li>
              <li><a class="dropdown-item" href="#">Nos cellules</a></li>
              <li><a class="dropdown-item" href="#">Nos extensions</a></li>
            </ol>
          </li>
          <li><a href="#">MEDITATION</a></li>
          <li><a href="#">DONATION</a></li>
          <li><a href="formation.blade.php">FORMATION</a></li>
          <li class="nav-item dropdown">
            <p class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-current="page">BATISSEURS</p>
            <ol class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Présentations du projet</a></li>
              <li><a class="dropdown-item" href="#">Information génerale</a></li>
              <li><a class="dropdown-item" href="paiement.html">Contribuer</a></li>
            </ol>
          </li>
      </ul>
      </div>
  
  
      <!-- menu responsive -->
      <div class="toggle_menu"> <img src="pictures/menu h.png" height="35px" width="35px" alt="menu hamburger"> </div>
  <script>
    const menu = document.querySelector(".toggle_menu")
    const navlinks = document.querySelector(".menu")
  
    menu.addEventListener('click', ()=>(
      navlinks.classList.toggle('mobile-menu')
    ))
  </script>
      
      </div>
    </nav>

    <div id="young">
      <div>
        <div class="princip" style="background: url('pictures/mji2.PNG'); background-repeat: no-repeat; background-size: cover;  background-position-y:-200px ;">
          <h1>MINSTERE <br>
          DES JEUNES<br>
          D'ICC KINSHASA
          </h1>
        </div>
      </div>
    </div>

  </header>


  <div>
    <div>
      
    </div>
  </div>



<script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>