@extends('index')

@section('main')

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
        <li><a href={{route(index.blade.php)}}>ACCUEIL</a></li>
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
            <li><a class="dropdown-item" href="#">Contribuer</a></li>
          </ol>
        </li>
    </ul>
    </div>
 @endsection