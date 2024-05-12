<?php
    session_start();
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
      <form action="list.php" method="post">
      <label for="namea">Enter your full name :</label>
      <input type="text" id="namea" name="namea" />
      <label for="ida">Enter your ID :</label>
      <input type="number" id="ida" name="ida" />
      <button type="submit">Mark absent</button>
      </form>
    </div>
</body>
</html>