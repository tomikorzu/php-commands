Hola <?php echo htmlspecialchars($_POST['userName']); ?>.
Usted tiene <?php echo (int)$_POST['age'];  ?> años.


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 1</title>
</head>

<body>
    <form>
        <input type="text" placeholder="Ingrese su nombre" name="userName">
        <input type="number" placeholder="Ingrese su edad" name="age">
        <button type="submit">Ingresar</button>
    </form>
    <a href="../index.php">Go back</a>
</body>

</html>