<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis
    
    // Récupère les valeurs des entiers depuis le formulaire
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    function calculateProduct($number1, $number2)
    {
        $product = 0;
        
        for ($i = 0; $i < $number2; $i++) {
            $product += $number1;
        }
        
        return $product;
    }

    $result = calculateProduct($number1, $number2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat</h1>
    <?php if (isset($result)) : ?>
        <p>Le produit des deux entiers est : <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>