<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul somme</title>
</head>
<body>
<h1>Calcul de la somme des N premiers nombres entiers</h1>
    <form action="" method="POST">
        <label for="number">Entrez la valeur de N :</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Calculer</button>
    </form>
    <?php
  include ('somme.php');

    ?>
</body>
</html>