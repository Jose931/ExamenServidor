<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserta.php" enctype="multipart/form-data" method="post">
        
        <span>Indique el nombre del directorio donde ubicar el archivo</span>
        <br>
        <input type="text" name="ubicacion"/>
        <br>
        <br>
        <span>Descripcion archivo</span>
        <br>
        <textarea placeholder="Describa brevemente el contenido del archivo" name="descripcion"></textarea>
        <br>
        <br>
        <input type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
        <input type="file" name="fichero"/>
        <input type="submit" value="Subir fichero"/>
        
    </form>
</body>
</html>
