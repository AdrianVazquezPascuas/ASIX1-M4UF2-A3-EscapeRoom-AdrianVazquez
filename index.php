<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <form action="juego1.php" method="POST">
        <h1 class="titulo">Bienvenido al Escape Room</h1>
        <p>Introduce usuario y contraseña para poder jugar</p>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="usuario" type="text" id="usuario" required>
        </label>
        <label>
            <i class="fa-solid fa-lock"></i>
            <input placeholder="contraseña" type="password" id="contraseña" required>
        </label>
        <input class="boton" type="submit" name="botonempezar" value="Empezar juego">
        </form>
    </form>
    </body>
</html>


