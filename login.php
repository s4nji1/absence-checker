<?php
    include "Database.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $password = $_POST['pass'];
        
        if (!empty($name) && !empty($password)) {
            if ($name == 'admin' && $password == 'admin') {
                header('Location: prof_interface.php');
                exit;
            } else {
                echo 'Invalid credentials';
            }
        } else {
            echo 'Please enter both name and password.';
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
    <div class="container">
        <h1>interface de connexion</h1>
        <form action="login.php" method="post">
            <label for="name">Entrer votre nom d'utilisateur :</label>
            <input type="text" id="name" name="name" />
            <label for="ida">entrer votre mot de passe :</label>
            <input type="password" id="pass" name="pass" />
            <button type="submit">Se connecter</button>
            </form>
            </div>
</body>
</html>