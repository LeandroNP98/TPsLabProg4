<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Datos del Registro</title>
</head>
<body>
<?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $date = $_POST["date"];  
      $sex = $_POST["sex"];
      $textarea = $_POST["areatext"];


      echo "<h2>Informacion de Cuenta<h2>";
      echo "Name: " . $name. "<br>";
      echo "Email: " . $email. "<br>";
      echo "Bithday: " . $date . "<br>";
      echo "Sex: " . $sex . "<br>";
      echo "About You: " . $textarea . "<br>";
?>
</body>
</html>

