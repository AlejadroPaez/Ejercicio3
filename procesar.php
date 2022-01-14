<?php
    $resultado = 1;
    $cadena = "";

    if (isset($_POST['dato1'])){ 
        $dato1 = $_POST['dato1'];
    }

    if ($dato1){
        echo "<h2>Resultado</h2>";

        $i = $dato1;
        while ($i > 0) {
            $cadena = $cadena . ' * ' . $i;
            $resultado = $resultado * $i;

            --$i;  
        }

        echo "Mensaje: El factorial de " . $dato1 . " es igual a " . $resultado . "<br>";
        echo "Cálculo del factorial de " . $dato1 . ": <br>";
        echo  $dato1 . "! = " . substr($cadena,2) . "<br>";
        echo  $dato1 . "! = " . $resultado . "<br>";

    }
    else {
        echo "<h2>Debe ingresar un número</h2>";
    }
    echo "<a href='index.php'>Regresar</a>";
?>