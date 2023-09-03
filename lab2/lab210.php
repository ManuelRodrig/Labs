<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Laboratorio 2.6</title>
        </head>
        <body>
            <?php
            $persona=array(
                array("nombre" => "Rosa","Estatura" => 168,"Sexo"=>"F"),
                array("nombre" => "Ignacio","Estatura" => 175,"Sexo"=>"M"),
                array("nombre" => "Daniel","Estatura" => 172,"Sexo"=>"M"),
                array("nombre" => "Rubén","Estatura" => 182,"Sexo"=>"M"),
            );
            echo "<b>DATOS SOBRE EL PERSONAL<b><br><hr>";

            $numPersonas = count($persona);

            for($i=0; $i < $numPersonas;$i++){
                echo "Nombre:  <br>",$persona[$i]['nombre'],"</br><br>";
                echo "Estatura:  <br>",$persona[$i]['estatura']," cm</br><br>";
                echo "Sexo:  <br>",$persona[$i]['sexo'],"</br><br>";
            }
            ?>
        </body> 
</html>