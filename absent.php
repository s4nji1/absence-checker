<?php
    include 'Database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["namea"];
        $id = $_POST["ida"];

        $sql = "INSERT INTO absent (name, id) VALUES ('$name', '$id')";
        if (mysqli_query($conn, $sql)) {
            echo "Record inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquage des absences</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="index.html" id="home"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#B197FC" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>
<div class="container" >
      <h1>Marquage des absences</h1>
      <div id="numbers"></div>
      <form action="absent.php" method="post">
      <label for="namea">Entrer votre nom complet :</label>
      <input type="text" id="namea" name="namea" />
      <label for="ida">Entrer votre identifiant :</label>
      <input type="number" id="ida" name="ida" />
      <button type="submit">marque absent</button>
      </form>
    </div>
</body>
</html>
