<?php
   session_start();
?>

<!doctype html>
<html lang="es">
<head>
    <title>Formulario</title>
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
    </style>
</head>
<body>

    <div class="container">

        <form action="teman_t05-ej01-2.php" method="post">

        <fieldset>
            <legend> Inserta las dimensiones de la tabla </legend>
                
                <p>
                    <label for="filas"> Escriba la cantidad de filas </label>
                    <input type="number" id="filas" name="filas"
                    min="1" required 
                    value="<?= isset($_SESSION["filas"]) ? $_SESSION["filas"] : "" ?>"
                    placeholder="Escribe el número de filas">
                </p>

                <p>
                    <label for="columnas"> Escriba la cantidad de columnas </label>
                    <input type="number" id="columnas" name="columnas" 
                    min="1" resquired 
                        value="<?= isset($_SESSION["columnas"]) ? $_SESSION["columnas"] : "" ?>"
                    placeholder="Escribe el número de columnas">
                </p>
                
                <p>
                    <input type="submit" name="accion" value="Dibuja tabla">
                </p>
            
        </fieldset>

        </form>  

    </div>

</body>
</html>

