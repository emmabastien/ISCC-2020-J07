<!DOCTYPE html> 

<html> 
<head> 
<title>commandes</title> 
</head> 
<body> 

<?php

$historique_commandes = array ('5.49','9.99','5.49','15.99','25');


function afficher_commandes ($historique_commandes){
    foreach ($historique_commandes as $value){
     echo "Une commande de $value euros a été reçu." . "<br/>"; 
    }
}

afficher_commandes ($historique_commandes);

$total = array ('5.49','9.99','5.49','15.99','25');
$somme = array_sum ($total);
echo "Le total des commandes est de $somme euros.";
?>

</body>
</html>