<!DOCTYPE html> 

<html> 
<head> 
<title>doubles tableaux</title> 
</head> 
<body> 

<?php

$date1 = new DateTime('NOW');

echo $date1->format ("<p> Y-m-d g\:i\:s </p>");


$date2 = new DateTime('2020-06-22 09:00:00');

$diff = $date2->diff($date1);
echo $diff->format("<p> %d Jours, %h heures, %i minutes depuis le debut de la piscine. </p>");


?>

</body>
</html>