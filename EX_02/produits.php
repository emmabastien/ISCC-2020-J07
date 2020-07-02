<!DOCTYPE html> 

<html> 
<head> 
<title>produits</title> 
</head> 
<body> 

<?php

$produits = array (
    'T-shirt rouge' => 15.50,
    'T-shirt vert' => 15.50,
    'T-shirt argent' => 16.50,
    'Short bleu' => 19.99,
    'Short vert' => 19.99,
    'Veste argent' => 35,);

function afficher_produits ($produits){
    echo "<table> <tr>
    <th> Produit</th>
    <th> Prix</th>
    </tr>";

    foreach ($produits as $key => $element){
        echo "<tr> <td> $key </td>
        <td> $element  </td>
        </tr>";
    }

echo "</table";

}

afficher_produits ($produits);


?>

</body>
</html>