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
    <title>Student List</title>
    <link rel="stylesheet" href="list.css">
</head>
<body>
    <h1>Student List</h1>

    <div class="containerr">
    <h2>Absent Students</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>ID</th>
            </tr>
        </thead>
        <tbody id="absent-students-table">
            <?php
                while($row = mysqli_fetch_assoc($absent_result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['id']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <h2>Present Students</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody id="present-students-table">
            <?php
                while($row = mysqli_fetch_assoc($present_result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <form method="post">
        <button type="submit" onclick="resetTables()" name="reset">Reset lists</button>
    </form>
    </div>  

    <script>

        function resetTables() {
            var absentTable = document.getElementById("absent-students-table");
            while (absentTable.firstChild) {
            absentTable.removeChild(absentTable.firstChild);
        }
            var presentTable = document.getElementById("present-students-table");
            while (presentTable.firstChild) {
            presentTable.removeChild(presentTable.firstChild);
        }
    }

    </script>
</body>
</html>
