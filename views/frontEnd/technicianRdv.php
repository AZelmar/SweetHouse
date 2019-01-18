<?php include('./public/locale/'.$locale.'.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1">
  <?php include './views/backEnd/globalHead.php'; ?>
  	<title> SweetHouse | RDV </title>  
<?php include './views/backEnd/header.php' ?>
<?PHP include './views/backEnd/notification.php' ?>
<?php include './views/backEnd/footer.php' ?>
    <style type="text/css">
        caption /* Titre du tableau */
        {
           margin: auto; /* Centre le titre du tableau */
           font-family: Lato, serif;
           font-weight: bold;
           font-size: 1.3em;
           color: #009900;
           margin-bottom: 20px; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
        }
 
        table /* Le tableau en lui-même */
        {
           margin: auto; /* Centre le tableau */
           border: 4px outset green; /* Bordure du tableau avec effet 3D (outset) */
           border-collapse: collapse; /* Colle les bordures entre elles */
           width:100%;
        }
        th /* Les cellules d'en-tête */
        {
           background-color: #006600;
           color: white;
           font-size: 1.1em;
           font-family: Lato, serif;
           border:1px solid red;
        }
 
        td /* Les cellules normales */
        {
           border: 1px solid black;
           font-family: Lato, serif;
           text-align: center; /* Tous les textes des cellules seront centrés*/
           padding: 5px; /* Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
        }
        td.time
        {
            width:5%;
        }

input[type=submit] {
  	width: 20%;
  	background-color: #216583;
  	color: black;
  	padding: 14px 20px;
  	margin: 10px 0;
  	border: 3px solid black;
  	border-radius: 10px;
  	cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
  transition-duration: 0.4s;
  color: black;
}

.input-group {
display:inline;
font-family: Lato, serif;
padding: 10px;
font-size: 20px;
}


</style>
 
</head>
<body>
<table>
<?php
    $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
      foreach ($rdvs as $test) {
        $rdv[$test['day']][$test['hour']] = $test['reason'] ;
        }

    echo "<tr><th>Heure</th>";
    for($x = 1; $x < 8; $x++)
        echo "<th>".$jour[$x]."</th>";
    echo "</tr>";
    for($j = 4; $j < 24; $j += 0.5) {
        echo "<tr>";
        for($i = 0; $i < 7; $i++) {
            if($i == 0) {
                $heure = str_replace(".5", ":30", $j);
                if(substr($heure,-3,3) != ":30")
                    echo "<td class=\"time\" rowspan=\"2\">".$heure."h</td>";
            }

            echo "<td>";
            if(isset($rdv[$jour[$i+1]][$heure])) {
                echo $rdv[$jour[$i+1]][$heure];
            }
            echo "</td>";
        }

        echo "</tr>";
    }
?>
</table>
<br><br>

<form method="POST">
<div class="input-group">
	  <label>Jour : </label>
	  <select id="day" name="day">
      <option value="Lundi">Lundi</option>
      <option value="Mardi">Mardi</option>
      <option value="Mercredi">Mercredi</option>
      <option value="Jeudi">Jeudi</option>
      <option value="Vendredi">Vendredi</option>
      <option value="Samedi">Samedi</option>
      <option value="Dimanche">Dimanche</option>

    </select>
		</div>
		<div class="input-group">
			<label>Heure : </label>
			<input type="time" id="hour" name="hour"
       min="04:00" max="23:30" step="1800" required>
		</div>
		<div class="input-group">
			<label>Motif : </label>
			<input type="text" name="reason" >
		</div>
		<div class="input-group">
			<label>Id de l'utilisateur: </label>
			<input type="number" step="1" name="userIdTech" >
		</div>
<input type="submit" name="validerRDV" value="Ajouter RDV" id="validerRDV">
</form>
</body>
</html>