<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel = "stylesheet" href = "app.css">

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start">Domus</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li><a href="index.html">Accueil</a></li>
              <li class="has-children">
                <a href="properties-1.html">Biens</a>
                <ul class="dropdown">
                  <li><a href="#">Acheter un bien</a></li>
                  <li><a href="#">Vendre un bien</a></li>
                  <li class="has-children">
                  </li>
                </ul>
              </li>
              <li><a href="services.html">Nos Services</a></li>
              <li class="active"><a href="about.html">À Propos</a></li>
              <li><a href="login.html">Mon Compte</a></li>
              <li><a href="contact.html">Nous Contacter</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

   <div class="image_login"> <div class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_3.jpg')">
    </div></div>

    
    
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">À Propos</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Propriété</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                À Propos
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>









<?php
// Configuration de la base de données
$serveur = "localhost";
$nom = "nom";
$email = "email";
$mdp = "mdp";
$bdd = "projet_immo";

// Connexion à la base de données
$connexion = new mysqli($serveur, $nom, $email, $mdp, $bdd);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Traitement du formulaire d'inscription
if ($serveur["REQUEST_METHOD"] == "POST") {
    $email = $_POST["adresse_mail"];
    $nom = $_POST["nom"];
    $mdp = password_hash($_POST["mot_de_passe"], PASSWORD_BCRYPT); // Hacher le mot de passe

    // Préparer la requête SQL
    $requete = $connexion->prepare("INSERT INTO users (email, nom, mdp) VALUES (?, ?, ?)");
    $requete->bind_param("sss", $email, $nom, $mdp);

    // Exécuter la requête
    if ($requete->execute()) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur lors de l'inscription : " . $requete->error;
    }

    // Fermer la connexion et la requête
    $requete->close();
    $connexion->close();
}
?>









<h3>Se Connecter / S'inscrire</h3>

<br>
<br>
<br>
    


                

<div class="formulaire_login">
<form method="post">
    <label>Email:</label>
    <input type="email" name="email" class="input-contact" 
           placeholder="xyz@gmail.com" required><br>
    <label>Nom d'utilisateur :</label>
    <input type ="username" name ="nom" class ="input-contact"
            placeholder ="Nom" required><br>
    <label>Mot de passe :</label>
    <input type="password" name="mdp" class="input-contact" 
           placeholder ="Mot de passe" required><br>
    <input type="submit" name="submit" class="submit-contact">
    <input type ="reset" name="reset" class="submit-contact">
</form>
</div>

<br>
<br>
<br>
<br>
<br>

<div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Nous contacter</h3>
            <address>Piazza del Colosseo, 1, 00184 Roma RM, Italie</address>
            <ul class="list-unstyled links">
              <li><a href="tel://11234567890">+33 555 555</a></li>
              <li><a href="tel://11234567890">+33 555 555</a></li>
              <li>
                <a href="mailto:info@mydomain.com">info@mydomain.com</a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Sources</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="#">À Propos de Nous</a></li>
              <li><a href="#">Nos services</a></li>
              <li><a href="#">Notre vision</a></li>
              <li><a href="#">Notre mission</a></li>
              <li><a href="#">Les termes</a></li>
              <li><a href="#">Politique de confidentialité</a></li>
            </ul>
            <ul class="list-unstyled float-start links">
              <li><a href="#">Partenaires</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Carrière</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Créativité</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Liens</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Notre vision</a></li>
              <li><a href="#">À Propos de Nous</a></li>
              <li><a href="#">Nous Contacter</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-pinterest"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-dribbble"></span></a>
              </li>
            </ul>
          </div>
          </div>
          </div>