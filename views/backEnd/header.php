	<?php
  if(!isset($_SESSION["email"]))
  {
  ?>
  <ul>
  <li id="logo-li"><img id="logo" src="./public/images/logo.png"></li>
  <li><a href="././Accueil"><p>Accueil</p></a></li>
  <li><a href="././register"><p>Inscription</p></a></li>
  <li><a href="././login"><p>Connexion</p></a></li>
  <li><a href="#aide"><p>Aide</p></a></li>
  <li><a href="#contact"><p>Contactez-nous !</p></a></li>
	</ul>
  <?php
}
else
{
  ?>
    <ul>
  <li id="logo-li"><img id="logo" src="./public/images/logo.png"></li>
  <li><a href="././Accueil"><p>Accueil</p></a></li>
  <li><a href="././Gestioncompte"><p>Gestion Profil</p></a></li>
  <li><a href="#connexion"><p>Gestion Maison</p></a></li>
  <li><a href="././logout"><p>Déconnexion</p></a></li>
  <li><a href="#contact"><p>Contactez-nous !</p></a></li>
  </ul>
  <?php
}
  ?>