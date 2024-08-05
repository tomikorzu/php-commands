<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variables</title>
</head>
<body>
    <?php 
        $boolean = true;
        $string = ' (Este es el contenido del string)';
        $integer = 4;

        echo 'Los tipos de variables puestos son ', gettype($boolean), ', ', gettype($string), gettext($string) ,' e ',gettype($integer);
    ?> <br>
    <?php 
        if(is_int($integer)){
            echo ' El numero si es entero: ', $integer;
        }
        else {
            echo 'El numero no es entero: ', $integer;
        }
    ?>
</body>
</html>