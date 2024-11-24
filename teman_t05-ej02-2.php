<?php
    session_start();

    if (empty($_REQUEST) && empty($_SESSION)) {
    header("Location: teman_t05-ej02-1.php");
    }
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['fondo'] = $_POST['fondo'];
    $_SESSION['letra'] = $_POST['letra'];
    }

    $nombre = $_REQUEST['nombre'] ?? $_SESSION['nombre'];
    $fondo = $_REQUEST['fondo'] ?? $_SESSION['fondo'];
    $letra = $_REQUEST['letra'] ?? $_SESSION['letra'];
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
            background-color: <?php echo $fondo; ?>;
            color: <?php echo $letra; ?>;
        }

        body{
            background-color: #fffff1;
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

        <h1>¡Hola "<?php print "$nombre"; ?>"!</h1>

    </div>
    <div class="opciones">

        <ul>
            <li><a href="teman_t05-ej02-3.php">Borrar preferencias</a></li>
            <li><a href="teman_t05-ej02-2.php">Saludo</a></li>
            <li><a href="teman_t05-ej02-1.php">Índice - Formulario</a></li>
        </ul>

    </div>

<div class="arrays">

<pre>
_REQUEST
<?php print_r($_REQUEST); ?>
</pre>
<br>
<pre>
_SESSION
<?php 
print_r($_SESSION); 
?>
</pre>

</div>

</body>
</html>