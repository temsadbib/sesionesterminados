<?php
   session_start();
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['filas'] = $_POST['filas'];
    $_SESSION['columnas'] = $_POST['columnas'];
    }

    $columnas = $_REQUEST["columnas"];
    $filas = $_REQUEST["filas"];

?>
<!doctype html>
<html lang="es">
<head>
<title>Tabla</title>
<meta charset="utf-8">
<style>
    .container {
        display:flex;
        justify-content:center;
    }


    body {
        background-color: #fadbb6;
    }

    table {
        border-collapse: collapse;
    }
    tr:nth-child(odd) {
        background-color: white;
    }

    tr:nth-child(even) {
        background-color: #fadbb6;
    }


    table, td{
        border: 2px solid;
        border-top: none;
        border-inline-color: #b78d9c;
        border-bottom-color: #ef446a;
    }

    .container2 {
        background-color: #f5f0dc;
        border: 3px solid #e6698c;
        border-radius: 10px;
        text-align: center;
        width: 250px;
        margin: auto;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .destruir {
        float: right;
        font-weight:bold;
    }
    .atras {
        font-weight:bold;
    }


</style>

</head>
<body>
<div class="container">

    <?php
        print "<table>\n";
        print "<caption>Tabla</caption>\n";

            print "<tbody>\n";

                        


            for ($i = 1; $i <= $filas; $i++) {        
            
                print "<tr>\n";               
        
                    for ($j = 1; $j <= $columnas; $j++) { 
                        print "<td>Fil $i Col $j</td>\n";   
                    }

                print "</tr>\n";              
            
            }


            print "</tbody>\n";                      
        
        print "</table>\n";




    ?>

</div>


<div class="container2">
    <p>
    Tamaño de la última tabla solicitada:
    <br>
    Filas <?php echo $filas; ?>
    <br>
    Columnas <?php echo $columnas; ?>
    </p>
</div>

<a class="atras" href="teman_t05-ej01-1.php"> &#11013; ATRÁS</a>
<a class="destruir" href="teman_t05-ej01-3.php"> Destruye sesión</a>



</body>
</html>