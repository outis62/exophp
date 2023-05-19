<!DOCTYPE html>
<html>
<head>
    <title>Vérifier si un nombre est premier</title>
</head>
<body>
    <h1>Vérifier si un nombre est premier</h1>
    <form method="post" action="">
        <label for="number">Entier X :</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Vérifier">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        $isPrime = true;

        if ($number < 2) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i === 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "$number est un nombre premier.";
        } else {
            echo "$number n'est pas un nombre premier.";
        }
    }
    ?>
</body>
</html>