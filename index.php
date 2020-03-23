<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exponential</title>
</head>
<body>
<h1>Exponential</h1>
<?php
function anzahl($tage, $tage_verdopplung){
    return pow(2, $tage/$tage_verdopplung);
}
$werte = array();

for ($tage = 0; $tage < 100; $tage++) {
     $werte[$tage] = floor(anzahl($tage, 3));
}

echo "<table border='1'>";
echo "<tr><th>Tage</th><th>Anzahl</th></tr>";
for ($tage = 0; $tage < 100; $tage++) {
    echo "<tr>";
     echo "<td>" . $tage .  "</td><td>" . $werte[$tage] . "</td></tr>";
}
echo "</table>";
?>
</body>
</html>

