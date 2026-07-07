//Find the largest number from 2 numbers
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questions</title>
</head>

<body>
    <!-- Write a PHP program to input two numbers and display the larger number. -->
    <form action="index.php" method="post">
        <input type="numbers" name="number1" placeholder="Enter the first number">
        <input type="numbers" name="number2" placeholder="Enter the second number">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
$num01 = $_POST["number1"];
$num02 = $_POST["number2"];
if ($num01 >= $num02) {
    echo "{$num01} is larger than {$num02}<br>";
} else {
    echo "{$num02} is larger than {$num01}<br>";
}
?>
