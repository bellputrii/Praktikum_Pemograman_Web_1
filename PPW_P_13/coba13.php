<!-- Mengakses semua nilai associative array dengan perulangan -->
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach($age as $x => $x_value) {
    echo "Key= " . $x . " , Value=" . $x_value;
    echo "<br>";
}
?>