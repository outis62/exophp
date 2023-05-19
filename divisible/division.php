<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis
    
    // Récupère les valeurs des entiers depuis le formulaire
    $numberA = $_POST["numberA"];
    $numberB = $_POST["numberB"];

    function checkDivisibility($numberA, $numberB)
    {
        if ($numberB === 0) {
            return "B ne peut pas être zéro.";
        }
        
        if ($numberA % $numberB === 0) {
            return "A est divisible par B.";
        } else {
            return "A n'est pas divisible par B.";
        }
    }

    $result = checkDivisibility($numberA, $numberB);
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
        <p><?php echo $result; ?></p>
    <?php endif; ?>

</body>
</html>