<?php
      $correctNumber = 35; // Default value
      include "update_correct_number.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contrôle de présence</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <h1>Contrôle de présence</h1>
      <div id="numbers"></div>
      <label for="numberInput">Entrez le nombre correct :</label>
      <input type="number" id="numberInput" />
      <button type="submit" onclick="checkAttendance()">Vérifier la présence</button>
      <p id="result"></p>
    </div>

    <script>

      function generateNumbers() {
        let randomNumber1 = Math.floor(Math.random() * 100);
        let randomNumber2 = Math.floor(Math.random() * 100);
        let correctNumber = <?php echo $correctNumber; ?>;

        const numbers = [correctNumber, randomNumber1, randomNumber2];

        for (let i = numbers.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [numbers[i], numbers[j]] = [numbers[j], numbers[i]];
        }

        return numbers;
        }

        document.addEventListener("DOMContentLoaded", function () {
          const numbers = generateNumbers();
          displayNumbers(numbers);
        });

        function displayNumbers(numbers) {
          const numbersContainer = document.getElementById("numbers");
          numbersContainer.innerHTML = "Choisissez un numéro : ";
          numbers.forEach((number) => {
            numbersContainer.innerHTML += number + " ";
          });
        }

        function getQueryParameter(name) {
          const urlParams = new URLSearchParams(window.location.search);
          return urlParams.get(name);
        }

        let correctNumber = <?php echo $correctNumber; ?>;

        if (correctNumber) {
          const numbersContainer = document.getElementById("numbers");
          numbersContainer.innerText =
            "Generated Numbers: " + generateNumbers().join(", ");
          numbersContainer.innerHTML += "<br>Nombre correct: " + correctNumber;
        }

      function checkAttendance() {
        const enteredNumber = parseInt(
          document.getElementById("numberInput").value
        );
        if (enteredNumber == correctNumber) {
          window.location.href = "present.php";
        } else {
          window.location.href = "absent.php";
        }
      }
    </script>
  </body>
</html>
