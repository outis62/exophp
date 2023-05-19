<!DOCTYPE html>
<html>
<head>
    <title>Calcul du produit de deux entiers</title>
</head>
<body>
    <h1>Calcul du produit de deux entiers</h1>
    <form action="product.php" method="post">
        <label for="number1">Entrez le premier entier :</label>
        <input type="number" id="number1" name="number1" required><br />
        <label for="number2">Entrez le deuxième entier :</label>
        <input type="number" id="number2" name="number2" required><br />
        <button type="submit">Calculer</button>
    </form>
    <?php
    include('produite.php');
    ?>
</body>
</html>