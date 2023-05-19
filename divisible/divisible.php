<!DOCTYPE html>
<html>
<head>
    <title>Détermination de la divisibilité</title>
</head>
<body>
    <h1>Détermination de la divisibilité de A par B</h1>
    <form action="divisibility.php" method="post">
        <label for="numberA">Entrez l'entier A :</label>
        <input type="number" id="numberA" name="numberA" required>
        <label for="numberB">Entrez l'entier B :</label>
        <input type="number" id="numberB" name="numberB" required>
        <button type="submit">Vérifier</button>
    </form>
    <?php
include ('division.php');
    ?>
</body>
</html>