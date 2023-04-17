<link rel="stylesheet" href="./css/styles.css">
<?php session_start() ?>
<?php
        $numero = $_POST["numero"];
    if (isset($_SESSION["aleatorio"])==false) {
        $_SESSION["aleatorio"] = rand(1,15);
    }

if ($numero == $_SESSION["aleatorio"]) {
    unset($_SESSION["aleatorio"]);
    echo "<form>";
    echo "<p>Felicidades, has adivinado el número!</p>";
    echo "<br> <a href='juego3.php'>Siguiente juego</a>";
    echo "</form>";

} elseif ($numero < $_SESSION["aleatorio"]) {
    echo "<form>";
    echo "<p>El número es mayor que $numero. Inténtalo de nuevo.</p>";
    echo "<br> <a href='juego2.php'>Volver a intentar</a>";
    echo "</form>";

} else {
    echo "<form>";
    echo "<p>El número es menor que $numero. Inténtalo de nuevo.</p>";
    echo "<br> <a href='juego2.php'>Volver a intentar</a>";
    echo "</form>";
}
?> 
