<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat</h1>
    <?php if (isset($result)) : ?>
        <p>Le minimum dans l'ensemble de nombres est : <?php echo $result["min"]; ?></p>
        <p>Le maximum dans l'ensemble de nombres est : <?php echo $result["max"]; ?></p>
    <?php endif; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis
    
    // Récupère les nombres depuis le formulaire
    $numbersString = $_POST["numbers"];
    
    // Convertit la chaîne de nombres en un tableau
    $numbersArray = explode(",", $numbersString);
    
    // Supprime les espaces en début et fin de chaque nombre
    $numbersArray = array_map('trim', $numbersArray);
    
    // Convertit les nombres en valeurs numériques
    $numbersArray = array_map('intval', $numbersArray);

    function findMinMax($numbers)
    {
        $min = min($numbers);
        $max = max($numbers);
        
        return array("min" => $min, "max" => $max);
    }

    $result = findMinMax($numbersArray);
}
?>
</body>
</html>

