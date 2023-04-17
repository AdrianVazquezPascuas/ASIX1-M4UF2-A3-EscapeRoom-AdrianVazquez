<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el numero</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <form action="comprobar1.php" method="post">
    <p><strong>Adivina el numero</strong></p>
    <p>Estoy pensando en un número entre 1 y 10. Adivina cuál es:</p>
		<input type="number" name="numero" required>
		<input type="submit" name="adivinar" value="Adivinar">
	</form>
</body>
</html>