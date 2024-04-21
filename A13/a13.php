<!-- Indexed Array: -->
<?php
$fruits = array("Apple", "Banana", "Orange", "Mango");

echo "First fruit: " . $fruits[0] . "<br>";
echo "Third fruit: " . $fruits[2] . "<br>";

echo "All fruits: ";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
?>


<!-- Numeric Array: -->
<?php
$numbers = array(10, 20, 30, 40, 50);

echo "First number: " . $numbers[0] . "<br>";
echo "Fourth number: " . $numbers[3] . "<br>";

echo "All numbers: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>


<!-- Associative Array: -->
<?php
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);

echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";

echo "Person details: <br>";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>


<!-- Multidimensional array: -->
<?php
$students = array(
    array("name" => "Alice", "age" => 20, "grade" => "A"),
    array("name" => "Bob", "age" => 22, "grade" => "B"),
    array("name" => "Charlie", "age" => 21, "grade" => "A")
);

echo "First student name: " . $students[0]["name"] . "<br>";
echo "Third student grade: " . $students[2]["grade"] . "<br>";

echo "All students: <br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
?>


