	<?php
  if(!isset($_SESSION["email"]))
  {
  ?>
  <ul class="navigation">
  <a href="././home"><li id="logo-li"><img id="logo" src="./public/images/logo.png"></li></a>
  <li><a href="././register"><p><?= header::register ?></p></a></li>
  <li><a href="././login"><p><?= header::login ?></p></a></li>
  <li><a href="././shop"><p><?= header::shop ?></p></a></li>
  <li class="toggleSubMenu"><a><p><?= header::help ?> <i class="fas fa-arrow-left"></i></p></a>
    <ul class="subMenu">
      <li><a href="././faq"><p><?= header::faq ?></p></a></li>
      <li><a href="././forum"><p><?= header::forum ?></p></a></li>
      <li><a id="openContact" href=""><p><?= header::contact ?></p></a></li>
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
   <?php
   if($_SESSION['role'] == 0)
   {
   ?>
  <li><a href="././gestionSensor"><p><?= header::houseControl ?></p></a></li>
  <li><a href="././userProfile"><p><?= header::profileControl ?></p></a></li>
   <li><a href="././shop"><p><?= header::shop ?></p></a></li>

  <?php
  }
  elseif($_SESSION['role'] == 1)
   {
   ?>
  <li><a href="././technicianSensors"><p><?= header::technicianHouseControl ?></p></a></li>
  <li><a href="././technicianProfile"><p><?= header::technicianProfileControl ?></p></a></li>
  <li><a href="././technicianRdv"><p><?= header::technicianRdv ?></p></a></li>
  <li><a href="././technicianForum"><p><?= header::technicianForum ?></p></a></li>
  <?php
  }
  elseif($_SESSION['role'] == 2)
  {
    ?>
   <li><a href="././adminManagement"><p><?= header::adminManagement ?></p></a></li>
  <li><a href="././adminProfile"><p><?= header::adminProfil ?></p></a></li>
  <li><a href="././forumAdministrateur"><p><?= header::forumAdministrateur ?></p></a></li>
    <?php
  }
  ?>
  <li><a href="././logout"><p><?= header::logout ?></p></a></li>
   <li class="toggleSubMenu"><a><p><?= header::help ?> <i class="fas fa-arrow-left"></i></p></a>
    <ul class="subMenu">
      <li><a href="././faq"><p><?= header::faq ?></p></a></li>
      <li><a href="././forum"><p><?= header::forum ?></p></a></li>
      <li><a id="openContact" href=""><p><?= header::contact ?></p></a></li>
    </ul>
  </li>
  </ul>
  <?php
}
  ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <header>
      <h2><?= modalContact::pageName ?></h2>    
      <hr>
    </header>
    <main>
    <p><i class="fab fa-twitter"></i> <?= modalContact::contactTwitter ?></p>
    <p><i class="fab fa-facebook"></i> <?= modalContact::contactFacebook ?></p>
    <p><i class="fab fa-instagram"></i> <?= modalContact::contactInstagram ?></p>
    <p><i class="fas fa-envelope"></i> <?= modalContact::contactEmail ?></p>
  </main>
  <footer><hr></footer>
  </div>

</div>
  <style>
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #cffdf8;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
  </style>
    <script type="text/javascript">
  $(document).ready( function () {
          $(".navigation li.toggleSubMenu > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu:visible").length != 0) {
            $(this).children("p").html($(this).children("p").html().replace('<i class="fas fa-arrow-right">','<i class="fas fa-arrow-left">'));
            $(this).next("ul.subMenu").slideUp("normal");
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".navigation ul.subMenu").slideUp("normal");
            $(this).children("p").html($(this).children("p").html().replace('<i class="fas fa-arrow-left">','<i class="fas fa-arrow-right">'));
            $(this).next("ul.subMenu").slideDown("normal");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    }); 
          var modal = $('#myModal');

    // Get the button that opens the modal
    var btn = $('#openContact');

    // When the user clicks on the button, open the modal
    btn.click(function() {
      modal.css({"display": "block"});
      return false;
    });

    $(document).click(function(e){
      if(!$('.modal-content').is(e.target) && $('.modal-content').has(e.target).length == 0 && !btn.is(e.target) && btn.has(e.target).length == 0 && modal.css('display') == 'block')
      {
        modal.css({"display": "none"});        
      }
    });
      } ) ;
  </script>  