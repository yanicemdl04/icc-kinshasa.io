<!DOCTYPE html>
<html>
  <head>
    <title>Formation</title>
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
            <a href="index.blade.php"> <img src="pictures/logoicc.PNG" style="height: 50px; width: 50px;"> </a> <p>Kinshasa</p>
        </div>
    
      <div class="menu">
        <ul>
          <li class="ferme"><a>FERMER</a>
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
            <li><a href="index.blade.php">ACCUEIL</a></li>
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
            <li><a href="#">EVENEMENT</a></li>
            <li class="nav-item dropdown">
              <p class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-current="page">BATISSEURS</p>
              <ol class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Présentations du projet</a></li>
                <li><a class="dropdown-item" href="#">Information génerale</a></li>
                <li><a class="dropdown-item" href="#">Contribuer</a></li>
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
          <div class="princip" style="background: url('pictures/jc.PNG'); background-repeat: no-repeat; background-size: cover;">
            <h1>DES FORMATIONS<br>
            ADAPTEES A<br>
            VOS BESOINS
            </h1>
          </div>
        </div>
      </div>
  
    </header>

    <div class="text-light px-4 py-5 text-center">
      <div class="py-5">
        <div class="container" id="formation">
          <h1 class="display-5 fw-bold text-dark"><strong>Vous êtes au bon endroit</strong></h1>
          <p id="propre">Parce que la croissance d’une église passe par la croissance de chaque membre, un cursus de formations complet vous est offert : Le parcours de croissance de la nouvelle création avec les formations 101, 201, 301 et 401.

            Toutes ces formations sont basées sur une méthode pédagogique efficace alternant enseignements vidéo et exercices pratiques, amenant ainsi le participant à passer de l’information à la transformation.
            
            Outre la partie « Enseignements », ce programme de formation qui se veut très pratique comporte également une partie « Entrainement » à travers des mises en situation, des cas pratiques et des temps de prière collectifs. Voilà pourquoi, nous vous invitons vivement à suivre ces cours en présentiel (cours sur place dans une église ICC).
            
            Ces cours sont gratuits pour tout membre de la famille ICC.</p><div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            </div>
        </div>
      </div>
    </div>

    
    <div class="text-light px-4 py-5 text-center" style="background: url('pictures/101.jpg'); background-repeat: no-repeat; background-size: cover; background-position-y:-308px ;">
      <div class="py-5">
        <div class="container" id="formation">
          <h1 class="display-5 fw-bold text-dark"><strong>Formation 101 : Les Fondements Du Royaume</strong></h1>
          <p id="propre">Cette formation est fortement recommandée à tout croyant qui a soif de la réalité de la vie divine sur terre, ainsi qu’à toute personne désirant se faire baptiser.

            Nous sommes convaincus que tout croyant devrait commencer ou recommencer sa marche avec Christ avec ce cours afin d’acquérir les bons fondements !.</p><div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            </div>

            <h1 class="display-5 fw-bold text-dark"><strong>Objectifs de la formation :</strong></h1>
            <ul>
              <li>
                Comprendre le véritable message de la Bible : Pas celui d’une religion, mais celui du gouvernement de Dieu</li>
              <li>Comprendre qui est Dieu</li>
              <li>Comprendre votre véritable identité</li>
              <li>Comprendre qui est le Saint-Esprit et quel est Son rôle sur la terre</li>
              <li>etc</li>
            </ul>
        </div>
      </div>
    </div>

       
    <div class="text-light px-4 py-5 text-center" style="background: url('pictures/201.jpg');  background-repeat: no-repeat; background-size: cover; background-position-y:-308px ;">
      <div class="py-5">
        <div class="container" id="formation">
          <h1 class="display-5 fw-bold text-dark"><strong>Formation 201 : Les 3 piliers majeurs de la maturité spirituelle</strong></h1>
          <p id="propre">Le cours 201 vous donnera les clés et les outils pratiques qui vous permettront de grandir spirituellement et de penser comme Dieu afin d’agir comme Dieu, de ressembler à Christ, pour vivre une vie de différence, comme celle que Jésus a vécu.</p><div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          </div>
          <h1 class="display-5 fw-bold text-dark"><strong>Objectifs de la formation :</strong></h1>
            <ul>
              <li>
                Développer une vie de prière efficace et productive
              <li>Comprendre et expérimenter le baptême du Saint-Esprit et les bénéfices de la prière par l’esprit</li>
              <li>Comprendre et expérimenter la puissance de la prière par le chant</li>
              <li>Savoir prier avec foi</li>
              <li>Adopter le système de pensées de Dieu à travers une vie de méditation de la Parole de Dieu</li>
            </ul> 
        </div>
      </div>
    </div>


    <footer class="kilimanjaro_area">
      <!-- Top Footer Area Start -->
      <div class="foo_top_header_one section_padding_100_70">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-6 col-lg-3">
                      <div class="kilimanjaro_part">
                          <h5>About Us</h5>
                          <p>L'ICC est connue pour ses cultes dynamiques et ses messages d'espoir et de transformation. Elle est également active dans la promotion de l'unité et de la réconciliation en République démocratique du Congo.</p>
                      </div>
                      <div class="kilimanjaro_part m-top-15">
                          <h5>Social Links</h5>
                          <ul class="kilimanjaro_social_links">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                      <div class="kilimanjaro_part">
                          <h5>Tags Widget</h5>
                          <ul class=" kilimanjaro_widget">
                              <li><a href="#">Classy</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">One Page</a></li>
                              <li><a href="#">Multipurpose</a></li>
                              <li><a href="#">Minimal</a></li>
                              <li><a href="#">Classic</a></li>
                              <li><a href="#">Medical</a></li>
                          </ul>
                      </div>
    
                      <div class="kilimanjaro_part m-top-15">
                          <h5>Important Links</h5>
                          <ul class="kilimanjaro_links">
                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Conditions</a></li>
                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About Licences</a></li>
                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help & Support</a></li>
                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Careers</a></li>
                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Community & Forum</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                      <div class="kilimanjaro_part">
                          <h5>Temoignages</h5>
                          <div class="kilimanjaro_blog_area">
                              <div class="kilimanjaro_thumb">
              <img class="img-fluid" src="pictures/logoicc2.JPG" alt="ICC">
    
                              </div>
                              <a href="#">"Un mouvement nouveau est entrain de naitre"</a>
                              <p class="kilimanjaro_date">2 Jan 2023</p>
                              <p>Gabriel Bigas</p>
                          </div>
                          <div class="kilimanjaro_blog_area">
                              <div class="kilimanjaro_thumb">
              <img class="img-fluid" src="pictures/doulos.JPG" alt="icc">
                              </div>
                              <a href="#">"Un éventail de talent réunit pour un seul nom"</a>
                              <p class="kilimanjaro_date">7 Avr 2023</p>
                              <p>Doulos JK</p>
                          </div>
                          <div class="kilimanjaro_blog_area">
                              <div class="kilimanjaro_thumb">
              <img class="img-fluid" src="pictures/ben.PNG" alt="icc">
                              </div>
                              <a href="#">"Une famille plus qu'une église"</a>
                              <p class="kilimanjaro_date">21 Jui 2023</p>
                              <p>Ben Makaya</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                      <div class="kilimanjaro_part">
                          <h5>Quick Contact</h5>
                          <div class="kilimanjaro_single_contact_info">
                              <h5>Phone:</h5>
                              <p>+255 255 54 53 52 <br> +255 255 53 52 51</p>
                          </div>
                          <div class="kilimanjaro_single_contact_info">
                              <h5>Email:</h5>
                              <p>support@email.com <br> company@email.com</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer Bottom Area Start -->
      <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <p>© All Rights Reserved by <a href="#">Yanice mdl<i class="fa fa-love"></i></a></p>
                  </div>
              </div>
          </div>
      </div>
    </footer>

    <script src="assets/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>
  </body>
</html>
