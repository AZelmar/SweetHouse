	<?php
  include('../public/locale/'.$locale.'.php');
  if(!isset($_SESSION["email"]))
  {
  ?>
  <ul>
  <li id="logo-li"><img id="logo" src="./public/images/logo.png"></li>
  <li><a href="././home"><p><?= menu::home ?></p></a></li>
  <li><a href="././register"><p><?= menu::register ?></p></a></li>
  <li><a href="././login"><p><?= menu::login ?></p></a></li>
  <li><a href="././forum"><p><?= menu::forum ?></p></a></li>
  <li><a href="#contact"><p><?= menu::contact ?></p></a></li>
	</ul>
  <?php
}
else
{
  ?>
    <ul>
  <li id="logo-li"><img id="logo" src="./public/images/logo.png"></li>
  <li><a href="././home"><p>Accueil</p></a></li>
  <li><a href="././userprofile"><p>Gestion Profil</p></a></li>
  <li><a href="#connexion"><p>Gestion Maison</p></a></li>
  <li><a href="././forum"><p>Forum</p></a></li>
  <li><a href="././logout"><p>Déconnexion</p></a></li>
  <li><a href="#contact"><p>Contactez-nous !</p></a></li>
  </ul>
  <?php
}
  ?>