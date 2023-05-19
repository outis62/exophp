<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis
    
    // Récupère la valeur de N depuis le formulaire
    $n = $_POST["number"];

    function sumOfFirstNNumbers($n)
    {
        $sum = 0;
        
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }
        
        return $sum;
    }

    $sum = sumOfFirstNNumbers($n);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat</h1>
    <?php if (isset($sum)) : ?>
        <p>La somme des <?php echo $n; ?> premiers nombres entiers est : <?php echo $sum; ?></p>
    <?php endif; ?>
</body>
</html>