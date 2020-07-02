<!DOCTYPE html> 

<html> 
<head> 
<title>doubles tableaux</title> 
</head> 
<body> 

<?php


$panier = array (
array ('T-shirt rouge',15.50,5),
array ('T-shirt vert',15.50,6),
array ('T-shirt argent',15.50,8),
array ('Short bleu',16.50,5),
array ('Short vert',19.99,5),
array ('Veste argent',19.99,10),
array ('Veste argent',35,3)
);

function afficher_panier ($panier){

    foreach ($panier as $value){
        echo "<ul>" ;
        foreach ($value as $element){ 
        echo "<li> $element </li>"; 
        }
        echo "</ul>" ;
    }
}

afficher_panier ($panier);

function calculer_total_panier ($panier){
    
    $total=0;

    foreach ($panier as $element){

    $total= $total + $element[1] * $element[2];
    }
    return $total;
}

$totalpanier = calculer_total_panier ($panier);;


echo "<p> $totalpanier </p>";

?>

</body>
</html>