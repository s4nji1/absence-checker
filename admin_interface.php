<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Enter Correct Number</h1>
        <form action="update_correct_number.php" method="post">
            <label for="correctNumber">Correct Number:</label>
            <input type="number" id="correctNumber" name="correctNumber">
            <button type="submit">Submit</button>
        </form>
    </div>

    <?php
        if (isset($_GET['correctNumber'])) {
            echo "<p>Correct Number: " . $_GET['correctNumber'] . "</p>";
        }
    ?>
    
</body>
</html>
