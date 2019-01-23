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
    $jour = array(null, rdv::monday , rdv::tuesday, rdv::wednesday, rdv::thursday, rdv::friday, rdv::saturday, rdv::sunday);
      foreach ($rdvs as $test) {
        $rdv[$test['day']][$test['hour']] = $test['reason'] ;
        }

    echo "<tr><th>";echo rdv::hour;echo "</th>";
    for($x = 1; $x < 8; $x++)
        echo "<th>".$jour[$x]."</th>";
    echo "</tr>";
    for($j = 4; $j < 23.5; $j += 0.5) {
        echo "<tr>";
        for($i = 0; $i < 7; $i++) 
        {
                if($i == 0) {
                $heure = str_replace(".5", ":30", $j);
                echo "<td class=\"time\">".$heure."</td>";
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
	  <label><?= rdv::day ?></label>
	  <select id="day" name="day">
      <option value="Lundi"><?= rdv::monday ?></option>
      <option value="Mardi"><?= rdv::tuesday ?></option>
      <option value="Mercredi"><?= rdv::wednesday ?></option>
      <option value="Jeudi"><?= rdv::thursday ?></option>
      <option value="Vendredi"><?= rdv::friday ?></option>
      <option value="Samedi"><?= rdv::saturday ?></option>
      <option value="Dimanche"><?= rdv::sunday ?></option>

    </select>
		</div>
		<div class="input-group">
			<label><?= rdv::hour ?></label>
			<select id="hour" name="hour">
          <option value="4">4</option>
          <option value="04:30">4:30</option>
          <option value="5">5</option>
          <option value="05:30">5:30</option>
          <option value="6">6</option>
          <option value="06:30">6:30</option>
          <option value="7">7</option>
          <option value="07:30">7:30</option>
          <option value="8">8</option>
          <option value="08:30">8:30</option>
          <option value="9">9</option>
          <option value="09:30">9:30</option>
          <option value="10">10</option>
          <option value="10:30">10:30</option>
          <option value="11">11</option>
          <option value="11:30">11:30</option>
          <option value="12">12</option>
          <option value="12:30">12:30</option>
          <option value="13">13</option>
          <option value="13:30">13:30</option>
          <option value="14">14</option>
          <option value="14:30">14:30</option>
          <option value="15">15</option>
          <option value="15:30">15:30</option>
          <option value="16">16</option>
          <option value="16:30">16:30</option>
          <option value="17">17</option>
          <option value="17:30">17:30</option>
          <option value="18">18</option>
          <option value="18:30">18:30</option>
          <option value="19">19</option>
          <option value="19:30">19:30</option>
          <option value="20">20</option>
          <option value="20:30">20:30</option>
          <option value="21">21</option>
          <option value="21:30">21:30</option>
          <option value="22">22</option>
          <option value="22:30">22:30</option>
          <option value="23">23</option>
    </select>
		</div>
		<div class="input-group">
			<label><?= rdv::reason ?> </label>
			<input type="text" name="reason" >
		</div>
		<div class="input-group">
			<label><?= rdv::userId ?></label>
			<input type="number" step="1" name="userIdTech" >
		</div>
<input type="submit" name="validerRDV" value=<?= rdv::addRdv ?> id="validerRDV">
</form>
</body>
</html>