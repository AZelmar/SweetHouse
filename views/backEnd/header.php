	<?php
  if(!isset($_SESSION["email"]))
  {
  ?>
  <ul class="navigation">
  <li id="logo-li"><img id="logo" src="./public/images/logo.png"></li>
  <li><a href="././home"><p><?= header::home ?></p></a></li>
  <li><a href="././register"><p><?= header::register ?></p></a></li>
  <li><a href="././login"><p><?= header::login ?></p></a></li>
  <li><a href="././forum"><p><?= header::forum ?></p></a></li>
  <li class="toggleSubMenu"><span><p><?= header::contact ?></p></span>
    <ul class="subMenu">
      <li><a href="#" title="Aller à la page 2.1">Page 2.1</a></li>
      <li><a href="#" title="Aller à la page 2.2">Page 2.2</a></li>
      <li><a href="#" title="Aller à la page 2.3">Page 2.3</a></li>
    </ul>
    </li>
	</ul>
  <?php
}
else
{
  ?>
    <ul>
  <li id="logo-li"><img id="logo" src="./public/images/logo.png"></li>
  <li><a href="././home"><p><?= header::home ?></p></a></li>
  <li><a href="././userprofile"><p><?= header::houseControl ?></p></a></li>
  <li><a href="#connexion"><p><?= header::profileControl ?></p></a></li>
  <li><a href="././forum"><p><?= header::forum ?></p></a></li>
  <li><a href="././logout"><p><?= header::logout ?></p></a></li>
  </ul>
  <?php
}
  ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
  $(document).ready( function () {
    // On cache les sous-menus :
    $(".navigation ul.subMenu").hide();    
  } ) ;
  </script>   