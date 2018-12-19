<?php include('../public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <?php include 'backEnd/globalHead.php'; ?>

    <title>SweetHouse</title>
</head>

<body> 
<?php
  include 'backEnd/header.php';
  ?>
<header>  
<div class="titre">
    <h1>La Maison du Futur</h1>
    <p>Découvrez SweetHouse</p>
</div>
  </header>
<main>
  <h2>ATTENTION !</h2>
  <p>Site bientôt disponible!</p>
</main>
<?php include 'backEnd/footer.php' ?>
</body>
</html>
<style>
 
body {
  text-align:center;
    font-weight: normal;
    font-style:normal;
    background-size :cover;
    cursor:auto;
    padding: 0;
	margin:0;
}


header {
  background: url(http://yesofcorsa.com/wp-content/uploads/2018/06/Smart-House-Wallpaper-1080p-1024x576.jpg);
  background-size: cover;
  height: 100vh;
}

  
.titre {
  position: absolute;
  top: 20%;
  left: 70%;
  color: #cffdf8;

}
  
h1 {
  margin: 0;
  font-size: 5rem;
}
h2 {
  font-size: 4rem;
}
p {
  font-size: 1.5rem;
}

main {
  max-width: 500px;
  margin: 25px auto;

</style>
