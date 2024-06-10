<?php
$students = array(
    array("name" => "Alice", "age" => 20, "grade" => "A"),
    array("name" => "Bob", "age" => 22, "grade" => "B"),
    array("name" => "Charlie", "age" => 23, "grade" => "C"),
    array("name" => "David", "age" => 21, "grade" => "A")
);

foreach ($students as $student) {
    if ($student["grade"] == "A") {
        echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
    }
}
?>
