	<?php
  if(!isset($_SESSION["email"]))
  {
  ?>
  <ul class="navigation">
  <a href="././home"><li id="logo-li"><img id="logo" src="./public/images/logo.png"></li></a>
  <li><a href="././register"><p><?= header::register ?></p></a></li>
  <li><a href="././login"><p><?= header::login ?></p></a></li>
  <li class="toggleSubMenu"><a><p><?= header::help ?> <i class="fas fa-arrow-left"></i></p></a>
    <ul class="subMenu">
      <li><a href="././faq"><p><?= header::faq ?></p></a></li>
      <li><a href="././forum"><p><?= header::forum ?></p></a></li>
      <li><a href="#"><p><?= header::contact ?></p></a></li>
    </ul>
  </li>
	</ul>
  <?php
}
else
{
  ?>
  <ul class="navigation">
   <a href="././home"><li id="logo-li"><img id="logo" src="./public/images/logo.png"></li></a>
  <li><a href=""><p><?= header::houseControl ?></p></a></li>
  <li><a href="././userprofile"><p><?= header::profileControl ?></p></a></li>
  <li><a href="././logout"><p><?= header::logout ?></p></a></li>
   <li class="toggleSubMenu"><a><p><?= header::help ?> <i class="fas fa-arrow-left"></i></p></a>
    <ul class="subMenu">
      <li><a href="././faq"><p><?= header::faq ?></p></a></li>
      <li><a href="././forum"><p><?= header::forum ?></p></a></li>
      <li><a href="#"><p><?= header::contact ?></p></a></li>
    </ul>
  </li>
  </ul>
  <?php
}
  ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
  $(document).ready( function () {
          $(".navigation li.toggleSubMenu > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu:visible").length != 0) {
            $(this).children("p").html($(this).children("p").html().replace('<i class="fas fa-arrow-right">','<i class="fas fa-arrow-left">'));
            console.log($(this).children("p").html());
            $(this).next("ul.subMenu").slideUp("normal");
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".navigation ul.subMenu").slideUp("normal");
            $(this).children("p").html($(this).children("p").html().replace('<i class="fas fa-arrow-left">','<i class="fas fa-arrow-right">'));
                        console.log($(this).children("p").html());
            $(this).next("ul.subMenu").slideDown("normal");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    }); 
      } ) ;   
  </script>   