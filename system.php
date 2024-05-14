<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Système de présence</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div class="container">
    <h1>Système de présence</h1>
    <button onclick="markPresent()">Present</button>
    <button onclick="markAbsent()">Absent</button>
  </div>
  <script>
    function markPresent() {
    window.location.href = "attendance.php";
  }

function markAbsent() {
    window.location.href = "absent.php";
  }
  </script>
</body>

</html>