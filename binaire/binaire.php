<!DOCTYPE html>
<html>
<head>
    <title>Calcul PHP</title>
</head>
<body>
    <h1>Calcul du binaire d'un nombre entier</h1>
    <form action="" method="post">
        <label for="number">Entrez un nombre entier :</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Calculer</button>
    </form>
    <?php
  include ('binary.php');
    ?>
</body>
</html>