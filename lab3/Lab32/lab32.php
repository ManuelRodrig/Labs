<!DOCTYPE html>
<html>
    <?php
    $precio1 = $_POS['precio1'];
    $precio2 = $_POS['precio2'];
    $precio3 = $_POS['precio3'];
    $media = ($precio1+$precio2+$precio3)/3;
    echo "<br/> DATOS RECIBIDOS";
    echo "<br/> Precio establecimiento 1: ".$precio1." dolares";
    echo "<br/> Precio establecimiento 1: ".$precio2." dolares";
    echo "<br/> Precio establecimiento 1: ".$precio3." dolares <br/>";
    echo "<br/> Precio establecimiento 1: ".$media." dolares";
    ?>
</html>