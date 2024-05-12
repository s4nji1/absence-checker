<?php
session_start();

    if (isset($_POST['namea']) && isset($_POST['ida'])) {
        $name = $_POST['namea'];
        $id = $_POST['ida'];
        $student = array('name' => $name, 'id' => $id);

        if (!isset($_SESSION['absent_students'])) {
            $_SESSION['absent_students'] = array();
        }
        $_SESSION['absent_students'][] = $student;
    } elseif (isset($_POST['namep']) && isset($_POST['idp'])) {
        $name = $_POST['namep'];
        $id = $_POST['idp'];
        $student = array('name' => $name, 'id' => $id);

        if (!isset($_SESSION['present_students'])) {
            $_SESSION['present_students'] = array();
        }
        $_SESSION['present_students'][] = $student;
    }

if (isset($_POST['reset'])) {
    unset($_SESSION['absent_students']);
    unset($_SESSION['present_students']);
}

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
            if (isset($_SESSION['absent_students'])) {
                foreach ($_SESSION['absent_students'] as $student) {
                    echo "<tr><td>" . $student['name'] . "</td><td>" . $student['id'] . "</td></tr>";
                }
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
            </tr>
        </thead>
        <tbody id="present-students-table">
            <?php
            if (isset($_SESSION['present_students'])) {
                foreach ($_SESSION['present_students'] as $student) {
                    echo "<tr><td>" . $student['name'] . "</td><td>" . $student['id'] . "</td></tr>";
                }
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
