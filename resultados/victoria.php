<?php 
session_start(); 
// Reiniciar la sesión para un nuevo juego
session_destroy(); // Esto destruye la sesión actual
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jersey+25+Charted&family=Share+Tech+Mono&family=Tiny5&display=swap">
</head>
<body>
    <div class="result-container">
        <h1>¡Enhorabuena!</h1>
        <p class="p1">¡Has acertado todas las letras y has ganado! La palabra era: <?php echo $_SESSION['palabra']; ?></p>
        <a href="../" class="button">Jugar de nuevo</a>
    </div>
</body>
</html>