<?php
if (session_status() == PHP_SESSION_NONE) session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/public/style/style.css" rel="stylesheet" />
  <title>JP INFO BRICO SERVICES</title>
</head>

<body>
  <form>
    <h1>JP INFO BRICO SERVICES</h1>
    <input type="search" name="q" placeholder="Rechercher">
    <input type="submit" value="Lancer !">
  </form>

  <!-- NavBar pour naviguer dans le site. -->
  <nav>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Réservation</a></li>
      <li><a href="#">Tarifs</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <!-- Un formulaire de recherche est une autre façon de naviguer de
            façon non‑linéaire dans le site. -->

  </nav>

  <!-- Ici nous mettons le contenu de la page -->
  <main>

    <!-- Il contient un article -->
    <article>
      <h2>En-tête d'article</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

      <h3>Sous‑section</h3>
      <p>Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>
      <p>Pelientesque auctor nisi id magna consequat sagittis. Curabitur dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.</p>

      <h3>Autre sous‑section</h3>
      <p>Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum soclis natoque penatibus et manis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
      <p>Vivamus fermentum semper porta. Nunc diam velit, adipscing ut tristique vitae sagittis vel odio. Maecenas convallis ullamcorper ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, is fringille sem nunc vet mi.</p>
    </article>

    <!-- Le contenu « à côté » peut aussi être intégré dans le contenu
           principal -->
    <aside>
      <h2>En relation</h2>
      <ul>
        <li><a href="#">Combien j'aime être près des rivages</a></li>
        <li><a href="#">Combien j'aime être près de la mer</a></li>
        <li><a href="#">Bien que dans le nord de l'Angleterre</a></li>
        <li><a href="#">Il n'arrête jamais de pleuvoir</a></li>
        <li><a href="#">Eh bien…</a></li>
      </ul>
    </aside>

  </main>

  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>