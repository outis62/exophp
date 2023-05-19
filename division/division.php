<!DOCTYPE html>
<html>
<head>
    <title>Calcul du quotient et reste de la division</title>
</head>
<body>
    <h1>Calcul du quotient et reste de la division de deux entiers</h1>
    <form action="division.php" method="post">
        <label for="dividend">Entrez le dividende :</label>
        <input type="number" id="dividend" name="dividend" required>
        <label for="divisor">Entrez le diviseur :</label>
        <input type="number" id="divisor" name="divisor" required>
        <button type="submit">Calculer</button>
    </form>
    <?php
include ('quote.php');
    ?>
</body>
</html>