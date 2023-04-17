<link rel="stylesheet" href="./css/styles.css">
<?php
session_start();
if (!isset($_SESSION['aleatorio'])) {
  $_SESSION['aleatorio'] = rand(1,20);
}
if (isset($_POST['aleatorio'])) {
  $numero = $_POST['aleatorio'];
  $intentos = $_SESSION['intentos'];

  if (!isset($_SESSION['intentos'])) {
  $_SESSION['intentos'] = 5;
}

  if ($numero == $_SESSION['aleatorio']) {
    unset($_SESSION['aleatorio']);
    unset($_SESSION['intentos']);
    echo "<form>";
    echo "<p>Felicidades, has adivinado el número!</p>";
    echo "<br> <a href='juego3.php'>Siguiente juego</a>";
    echo "</form>";
  }
    elseif ($numero < $_SESSION["aleatorio"]) {
      echo "<form>";
      echo "<p>El número es mayor que $numero. Inténtalo de nuevo.</p>";
      echo "<p>Intentos restantes: " . $intentos . "</p>";
      echo "<br> <a href='juego2.php'>Volver a intentar</a>";
      echo "</form>";
  
  } else {
      echo "<form>";
      echo "<p>El número es menor que $numero. Inténtalo de nuevo.</p>";
      echo "<p>Intentos restantes: " . $intentos . "</p>";
      echo "<br> <a href='juego2.php'>Volver a intentar</a>";
      echo "</form>";
  }

    $_SESSION['intentos']--;
    $intentos = $_SESSION['intentos'];
    if ($intentos == 0) {
      echo "<form>";
      echo "Lo siento, has agotado tus intentos. El número era " . $_SESSION['aleatorio'];
      unset($_SESSION['aleatorio']);
      unset($_SESSION['intentos']);
      echo "</form>";
    }
  }
?>
