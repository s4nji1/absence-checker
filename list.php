<?php
    include 'Database.php';

    $absent_sql = "SELECT * FROM absent";
    $absent_result = mysqli_query($conn, $absent_sql);

    $present_sql = "SELECT * FROM present";
    $present_result = mysqli_query($conn, $present_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <link rel="stylesheet" href="lists.css">
</head>
<body>
<a href="index.html" id="home"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#B197FC" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>
    <h1>Liste des etudiants</h1>

    <div class="containerr">
        <div class="tables">
            <div class="table1">
    <h2>Les etudiants absents</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Identifiant</th>
                <th>Date de l'abscence</th>
            </tr>
        </thead>
        <tbody id="absent-students-table">
            <?php
                while($row = mysqli_fetch_assoc($absent_result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
            </div>

            <div class="table2">
    <h2>Les etudiants presents</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Identifiant</th>
                <th>temps de la saisie</th>
            </tr>
        </thead>
        <tbody id="present-students-table">
            <?php
                while($row = mysqli_fetch_assoc($present_result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['time']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
            </div>
    </div>
        <div class="btn">
        <a href="absent.php"><button>Ajouter l'absence</button></a>
        <a href="present.php"><button>Ajouter la presence</button></a>
        </div>
    </div>  
</body>
</html>
