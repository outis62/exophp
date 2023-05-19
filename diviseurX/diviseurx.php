<!DOCTYPE html>
<html>
<head>
    <title>Diviseurs d'un entier</title>
</head>
<body>
    <h1>Diviseurs d'un entier</h1>
    <form method="post" action="">
        <label for="number">Entier X :</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Calculer">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        echo "<h2>Les diviseurs de $number sont :</h2>";
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>