<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $direccionCli = strtolower($_POST['ubicacion']);
        $descripcion = $_POST['descripcion'];

        $errores = array(
            0 => 'El archivo se subio correctamente',
            1 => 'el tamaño del archivo execede el admitido por el servidor',
            2 => 'El tamaño del archivo excede el admitido por el cliente',
            3 => 'El archivo no se pudo subir completamente',
            4 => 'No se selecciono ningun archivo para ser subido',
            6 => 'No existe un directorio temporal donde subir el archivo',
        );
    
    
    
    

        foreach($errores as $key => $value){
        
            if($_FILES['fichero']['error'] == $key){
                if(empty($descripcion)){
                    echo "No se ha incluido la descripcion del archivo";
                
                }elseif($_FILES['fichero']['error'] == 0){
                    
                    if(is_uploaded_file($_FILES['fichero']['tmp_name'])){
                        
                        if(!empty($direccionCli)){
                            $nombreDirectorio = $direccionCli."/";
                            $nombreFichero = $_FILES['fichero']['name'];
                            $nombreCompleto = $nombreDirectorio.$nombreFichero;
                            
                            if(is_file($nombreCompleto)){
                                    $idUnico = time();
                                    $nombreFichero = $idUnico."-".$nombreFichero;
                                    $nombreCompleto = $nombreDirectorio.$nombreFichero;
                            }

                        move_uploaded_file($_FILES['fichero']['tmp_name'], $nombreCompleto);
                        echo "Nombre: " .$_FILES['fichero']['name'] ."<br>";
                        echo "Tipo: " . $_FILES['fichero']['type'] . "<br>";
                        echo "Tamaño: ". $_FILES['fichero']['size']. "<br>";
                        echo "Descripcion: ". $descripcion . "<br>";
                        echo "Nombre temporal: ". $_FILES['fichero']['tmp_name'] . "<br>";
                        echo "Error: ". $_FILES['fichero']['error'] . "<br>";
                        }else{
                            echo $errores[6];
                        }
                        
                        
                        
                    }
                    
                    
                }else{
                    echo $value ."<br>";
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
        
        <span>Indique el nombre del directorio donde ubicar el archivo</span>
        <br>
        <input type="text" name="ubicacion" value="<?php if(!empty($_POST['ubicacion'])) {echo $_POST['ubicacion'];} ?>"/>
        <br>
        <br>
        <span>Descripcion archivo</span>
        <br>
        <textarea placeholder="Describa brevemente el contenido del archivo" name="descripcion"></textarea>
        <br>
        <br>
        <input type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
        <input type="file" name="fichero" value="<?php if(!empty($_FILES)){echo $_FILES['fichero']['name'];}?>"/>
        <input type="submit" value="Subir fichero"/>
        
    </form>
</body>
</html>