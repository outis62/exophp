<!DOCTYPE html>
<html>
<head>
    <title>Somme des chiffres d'un entier</title>
</head>
<body>
    <h1>Somme des chiffres d'un entier</h1>
    <form method="post" action="">
        <label for="number">Entier N :</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Calculer">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        $sum = 0;

        // Convertir le nombre en chaîne de caractères pour accéder à chaque chiffre individuellement
        $digits = str_split($number);

        foreach ($digits as $digit) {
            $sum += intval($digit);
        }

        echo "La somme des chiffres de $number est : $sum";
    }
    ?>
</body>
</html>