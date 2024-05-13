<?php
    include 'Database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["namep"];
        $id = $_POST["idp"];

        $sql = "INSERT INTO present (name, id) VALUES ('$name', '$id')";
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
      <h1>Presence marking</h1>
      <div id="numbers"></div>
      <form action="present.php"  method="post">
      <label for="namep">Enter your full name :</label>
      <input type="text" id="namep" name="namep" />
      <label for="idp">Enter your ID :</label>
      <input type="number" id="idp" name="idp" />
      <button type="submit">Mark Present</button>
      </form>
    </div>
</body>
</html>
