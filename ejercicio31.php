<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lenguaje"])
    && isset($_POST["intereses"])) {

    $nombre= trim($_POST["nombre"]);
    $lenguaje = trim($_POST["lenguaje"]);
  $intereses = isset($_POST["intereses"]); 
   
  // Procesar checkboxes
  if (!empty($_POST['intereses'])) {
    echo "Intereses seleccionados:<br>";
    foreach ($_POST['intereses'] as $interes) {
$ellos=  htmlspecialchars($interes);

     //   echo "- " .$ellos . "<br>";
    }
} else {
    echo "No se seleccionó ningún interés.<br>";
}


    // Validación simple

    if (empty($nombre) && empty($lenguaje) && empty($intereses)) {
        echo "El nombre es obligatorio y el lenguaje es obligatorio.";
    } elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $nombre)) {
        echo "El nombre solo puede contener letras y espacios.";
    } else {
        $lenguaje_limpio = htmlspecialchars($lenguaje, ENT_QUOTES, 'UTF-8');
        $nombre_limpio = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
   $ellos_limpio = htmlspecialchars($ellos, ENT_QUOTES, 'UTF-8');

        
        $mensaje = "Hola <strong>$nombre_limpio</strong>,
                 tu lenguaje favorito es: <strong>$lenguaje_limpio</strong>,tu especialidad es:  <strong>$ellos_limpio</strong>.";
    }
}else {
    echo "Por favor, completa el formulario.";
}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
</head>

<body>

<h2>Formulario</h2>
<br/>
<form action="ejercicio31.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
</br>
</br>
<h3>INPUT RADIO:</h3>
<h3>Lenguaje de Programación que te gusta:</h3>

    <input type="radio" id="php" name="lenguaje" value="PHP">
    <label for="php">PHP</label><br>
    <input type="radio" id="javascript" name="lenguaje" value="JavaScript">
    <label for="javascript">JavaScript</label><br>
    <input type="radio" id="java" name="lenguaje" value="Java">
    <label for="java">Java</label><br>
    <input type="radio" id="python" name="lenguaje" value="Python">
    <label for="python">Python</label><br>
    <input type="radio" id="csharp" name="lenguaje" value="C#">
    <label for="csharp">C#</label><br>
    <br>
    <br>
    
    <h3>Selecciona tus intereses:</h3>
    <input type="checkbox" name="intereses[]" value="Desarrollo Web"> Desarrollo Web<br>
    <input type="checkbox" name="intereses[]" value="Data Science"> Data Science<br>
    <input type="checkbox" name="intereses[]" value="Ciberseguridad"> Ciberseguridad<br>

<br>
<br>

    <button type="submit">Enviar</button>

    <!-- Mostrar mensaje si existe -->
<?php if (!empty($mensaje)): ?>
    <h2 style="color:blue"><?= $mensaje ?></h2>
<?php endif; ?>

</form>

</body>
</html>
