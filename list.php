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
