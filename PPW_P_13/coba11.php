<!-- Mengakses array melalui perulangan (loop) -->

<?php
$cars = array("Volvo", 'BMW', 'Toyota');
$arrlenght = count($cars);
for ($x = 0; $x < $arrlenght; $x++){
    echo $cars[$x];
    echo "<br>";
}
?>