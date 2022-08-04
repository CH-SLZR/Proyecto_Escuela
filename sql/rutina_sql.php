<?php
include('conexion.php');
include('read.php');

        $peso = $_POST["peso"];
        $edad = $_POST["edad"];
        $pre_art = $_POST["pre_art"];
        $oxi = $_POST["oxi"];
        $lat_min = $_POST["lat_min"];
        $sexo = $_POST["sexo"];

        if ($sexo == "Mujer"){

            $img = "../img/ruinas/rutina_1.jpg";
            $dat = base64_encode(file_get_contents($img));
            $src = 'data:'.mime_content_type($img).';base64,'.$dat;

            echo "<img src=\"$src\">";

        }
?>