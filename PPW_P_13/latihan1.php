<?php
$data_buah = array("Apple", "Banana", "Cherry", "Date");
foreach ($data_buah as $buah) {
    if (strlen($buah) > 5) {
        echo $buah . "<br>";
    }
}
?>
