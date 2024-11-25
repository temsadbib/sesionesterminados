<?php
    session_start();

    if (!empty($_SESSION)) {
    header("Location:teman_t05-ej02-2.php");
    }


?>

<!doctype html>
<html lang="es">
<head>
    <title>pagina principal</title>
    <meta charset="utf-8">
    <style>
        .container {
            display:flex;
            justify-content:center;
        }

        body{
            background-color: #fffff1;
        }

        legend{
            background-color: #f6f4dd;
            border: 3px solid #e66d90;
            border-radius: 5px; 
        }
        fieldset { 
            background-color: #ffeff4;
            border: 3px solid #e66d90;
        }

        #columnas, #filas {
            width: 200px;
        }

        .opciones, .arrays{
            border: 3px solid #e66d90;
            padding: 10px;
        }
        
        .opciones {
            display: flex;
            justify-content: flex-end;
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">

        <form action="teman_t05-ej02-2.php" method="post">
        
        <fieldset>
            <legend>Formulario de recogida de preferencias</legend>
                
                <p>
                    <label for="nombre"> Nombre </label>
                    <input type="text" id="nombre" name="nombre" required 
                    placeholder="Escribe tu nombre">
                </p>


                <p>
                    <label for="fondo"> Color de fondo: </label>
                    <input type="color" id="fondo" name="fondo">
                </p>


                <p>
                    <label for="letra"> Color de letra: </label>
                    <input type="color" id="letra" name="letra">
                </p>


                
                <p>
                    <input type="submit" name="enviar" value="Guardar las preferencias">
                </p>
            
        </fieldset>

    </form>  

    </div>
    <br>
    <br>
    <div class="opciones">

        <ul>
            <li><a href="teman_t05-ej02-3.php">Borrar preferencias</a></li>
            <li><a href="teman_t05-ej02-2.php">Saludo</a></li>
            <li><a href="teman_t05-ej02-1.php">Índice - Formulario</a></li>
        </ul>

    </div>

<div class="arrays">

<pre>
_SESSION
<?php
print_r($_SESSION);
?>
</pre>

</div>

</body>
</html>
