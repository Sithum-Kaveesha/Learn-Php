//find if number is positive negative or zero in php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>

<body>
    <form action="q2.php" method="post">
        <input type="number" name="Number" placeholder="Input a number">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
$number = $_POST["Number"];
if ($number < 0 && !0) {
    echo "{$number} is an negative number";
} elseif ($number >= 1) {
    echo "{$number} is an positive number";
} elseif ($number == 0) {
    echo "{$number} is zero";
} else {
    echo "{$number} is not an .valid number";
}

?>
