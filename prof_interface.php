<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nterface du professeur</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Entrer le nombre correct :</h1>
        <form action="update_correct_number.php" method="post">
            <label for="correctNumber">Le nombre correct :</label>
            <input type="number" id="correctNumber" name="correctNumber">
            <button type="submit">Soumettre</button>
        </form>
        <a href="list.php"><button>afficher la liste</button></a>
    </div>
    
</body>
</html>
