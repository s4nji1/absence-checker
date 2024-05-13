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
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container" >
      <h1>Absence marking</h1>
      <div id="numbers"></div>
      <form action="absent.php" method="post">
      <label for="namea">Enter your full name :</label>
      <input type="text" id="namea" name="namea" />
      <label for="ida">Enter your ID :</label>
      <input type="number" id="ida" name="ida" />
      <button type="submit">Mark absent</button>
      </form>
    </div>
</body>
</html>
