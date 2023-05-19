<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis
    
    // Récupère les valeurs du dividende et du diviseur depuis le formulaire
    $dividend = $_POST["dividend"];
    $divisor = $_POST["divisor"];

    function calculateQuotientAndRemainder($dividend, $divisor)
    {
        $quotient = 0;
        
        while ($dividend >= $divisor) {
            $dividend -= $divisor;
            $quotient++;
        }
        
        $remainder = $dividend;
        
        return array("quotient" => $quotient, "remainder" => $remainder);
    }

    $result = calculateQuotientAndRemainder($dividend, $divisor);
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
        <p>Le quotient de la division est : <?php echo $result["quotient"]; ?></p>
        <p>Le reste de la division est : <?php echo $result["remainder"]; ?></p>
    <?php endif; ?>
</body>
</html>