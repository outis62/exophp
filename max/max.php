<!DOCTYPE html>
<html>
<head>
    <title>Recherche du minimum et du maximum</title>
</head>
<body>
    <h1>Recherche du minimum et du maximum dans un ensemble de N nombres</h1>
    <form action="min_max.php" method="post">
        <label for="numbers">Entrez les nombres séparés par des virgules :</label>
        <input type="text" id="numbers" name="numbers" required>
        <button type="submit">Rechercher</button>
    </form>
    <?php
include('maxe.php');
    ?>
</body>
</html>