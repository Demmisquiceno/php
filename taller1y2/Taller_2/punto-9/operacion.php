<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <h1>PHP</h1>
        <h3>Digitaliza las notas del 0 al 5</h3>
        <form action="resultado.php" method="post">
        <label for="valor">Nombre</label><input name="nombre" type="text" value="">
            <label for="valor1">Asignatura</label><input name="materia" type="text" value="">
            <label for="valor">Nota 1</label><input name="nota1" type="text" value="">
            <label for="valor">Nota 2</label><input name="nota2" type="text" value="">
            <label for="valor">Nota 3</label><input name="nota3" type="text" value="">
            <input type="submit" name="enviar" value="enviar" >
        </form>
    </main>
</body>
</html>