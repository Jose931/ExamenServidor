?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {



if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $url = $_POST['url'];
  $edad = $_POST['edad'];
  $peso = $_POST['peso'];
  $trabajo = $_POST['trabajo'];
  $bandera=true;

  if(preg_match('#[A-Za-z" "]{3,20}$#',$nombre)){
    echo"<br> VALID NOMBRE";
  }else{

    echo "<br> NOT VALID NOMBRE";
    $bandera=false;
  }
  if(preg_match('#[A-Za-z" "]{3,20}$#',$apellido)){
    echo"<br> VALID APELLIDOS";
  }else{
    echo "<br> NOT VALID APELLIDOS";
    $bandera=false;
  }
 
  if(preg_match('#[0-9]{1,2}$#',$peso)){
    echo"<br> VALID PESO";
  }else{
    echo "<br> NOT VALID PESO";
    $bandera=false;
  }
  if(preg_match('#[0-9]{1,2}$#',$edad)){
    echo"<br> VALID EDAD";
  }else{
    echo "<br> NOT VALID EDAD";
    $bandera=false;
  }
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo"<br> VALID EMAIL";
  }else{
    echo "<br> NOT VALID EMAIL";
    $bandera=false;
  }
  if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
    echo"<br> VALID URL";
  }else{
    echo "<br> NOT VALID URL";
    $bandera=false;

  }
  if($bandera==true){
    header("Location: form_en_uno.php");
  }
}
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="formulario">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <label for="quantity">Nombre</label>
    <input type="text" name="nombre" value="<?php if (isset($nombre)) echo $nombre; ?>"></br>
    <label for="quantity">Apelldio </label>
    <input type="text" name="apellido" value="<?php if (isset($apellido)) echo $apellido; ?>"></br>
    <label for="quantity">Email</label>
    <input type="email" name="email" value="<?php if (isset($email)) echo $email; ?>"></br>
    
    Ocupacion:
    <INPUT TYPE="radio" name="trabajo" VALUE="M">Trabaja
    <INPUT TYPE="radio" name="trabajo" VALUE="H">No trabaja
    <br>
    <label for="quantity">Edad ( 1 a 150):</label>
    <input type="number" id="quantity" name="edad" min="1" max="150" value="<?php if (isset($edad)) echo $edad; ?>"></br>
<label for="quantity">Peso:</label>
    <input type="number" id="quantity" name="peso"  value="<?php if (isset($peso)) echo $peso; ?>"></br>
    <label for="quantity">Area Personal </label>
    <input type="url" name="url" value="<?php if (isset($url)) echo $url; ?>">
    <input type="submit" value="Submit">
  </form>
</div>
    
</body>
</html>