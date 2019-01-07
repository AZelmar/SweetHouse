<?php include('../public/locale/'.$locale.'.php'); ?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./public/css/style.css" />
<?php include 'backEnd/globalHead.php'; ?>

    <title> Emploi du temps</title>
    
</head>
<body>
   <style type >
        caption 
        {
           margin: auto; 
           font-family: Arial, Times, "Times New Roman", serif;
           font-weight: bold;
           font-size: 1.2em;
           color: #A9A9A9;
           margin-bottom: 20px; 
        }
 
        table /* Le tableau */
        {
           margin: auto; 
           border: 4px outset #A9A9A9; 
           border-collapse: collapse; 
           width:100%;
        }
        th /* Les cellules d'en-tête */
        {
           background-color: #006600;
           color: white;
           font-size: 1.1em;
           font-family: Arial, "Arial Black", Times, "Times New Roman", serif;
           border:1px solid red;
        }
 
        td /* Les cellules normales */
        {
           border: 1px solid black;
           font-family: Arial, "Arial Black", Times, "Times New Roman", serif;
           text-align: center; 
           padding: 5px; 
        }
        td.time
        {
            width:5%;
        }
    </style>

<table>
<?php
    $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $rdv["Dimanche"]["8:00"] = "injdfv";
    $rdv["Lundi"]["9:00"] = "nigffg";
    echo "<tr><th>Heure</th>";
    for($x = 1; $x < 8; $x++)
        echo "<th>".$jour[$x]."</th>";
    echo "</tr>";
    for($j = 0; $j < 24; $j += 0.5) {
        echo "<tr>";
        for($i = 0; $i < 7; $i++) {
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


</body>
<?php include 'backEnd/footer.php' ?>
</html>