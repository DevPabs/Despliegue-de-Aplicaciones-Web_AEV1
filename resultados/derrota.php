<?php 
session_start(); 
// Reiniciar la sesión para un nuevo juego
session_destroy(); // Esto destruye la sesión actual
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Perdiste!</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jersey+25+Charted&family=Share+Tech+Mono&family=Tiny5&display=swap">
</head>
<body>
    <h1>¡Lo siento!</h1>
    <p class="p1">Has agotado tus vidas y has perdido... La palabra era: <?php echo $_SESSION['palabra']; ?></p>
    <a href="../" class="button">Jugar de nuevo</a>
</body>
</html>