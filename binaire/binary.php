<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis
    
    // Récupère la valeur du nombre entier depuis le formulaire
    $number = $_POST["number"];

    function decimalToBinary($n)
    {
        $binary = "";
        
        if ($n === 0) {
            return "0"; // Cas spécial si le nombre est zéro
        }
        
        while ($n > 0) {
            $binary = ($n % 2) . $binary; // Ajoute le reste de la division par 2 à la gauche du nombre binaire
            $n = (int)($n / 2); // Effectue une division entière par 2 pour passer au chiffre suivant
        }
        
        return $binary;
    }

    $binaryNumber = decimalToBinary($number);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat</h1>
    <?php if (isset($binaryNumber)) : ?>
        <p>Le nombre binaire de <?php echo $number; ?> est : <?php echo $binaryNumber; ?></p>
    <?php endif; ?>
</body>
</html>