<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
     echo "<h3> <p> Activity 1</p> </h3> ";
    
    $number = 1;
        while ($number <= 10) {
            echo $number . " ";
            $number++;
        }
    ?>

    <?php
    echo "<p> <h5> Task 2 </h5> </p>";
    $number = 2;
    while ($number <= 20) {
        echo $number . " ";
        $number += 2;
    }
    //numba 2
    ?>

    <?php
    echo "<h3> <p> Activity 3 </p> </h3>";
    for ($z = 1; $z <=10; $z++) {
        echo "7 x $z = " . (7 * $z) . "<br>";
    }
    ?>

    <?php
    echo "<h3> <p> Activity 4 </p> </h3>";
    for ($z = 1; $z <= 10; $z++) {
        if ($z == 5) {
            continue;
        }
        if ($z == 9){
            break;
        }
        echo "$z ";
    }
    ?>

    <?php
    echo "<h3> <p> Activity 5 </p> </h3>";
    $sum = 0;
    $number = 1;

    while ($number <= 100) {
        $sum += $number;
        $number++;
    }

    echo "The sum of numbers from 1 to 100 is: $sum";
    ?>

    <?php 
    echo "<h3> <p> Activity 6 </p> </h3>";
    $movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite" ];

    foreach ($movies as $data => $movie) {
        echo ($data + 1) . ". $movie<br>";
    }
    ?>

    <?php 
    echo "<h3> <p> Activity 7 </p> </h3>";
    $students = [
        "Name" => "Alice",
        "Age" => 20,
        "Grade" => "A",
        "City" => "Baguio"
    ];

    foreach ($students as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
    <?php 
    echo "<h3> <p> Activity 8 </p> </h3>";
    $number = 5;
    $factorial = 1;

    for($z = $number; $z > 0; $z--) {
        $factorial *= $z;
    }

    echo "Factorial of $number is: $factorial";
    ?>
    
    <?php
    echo "<h3> <p> Activity 9 </p> </h3>";
    for ($z = 1; $z <= 50; $z++) {
        if ($z % 3 == 0 && $z % 5 == 0){
            echo "Fizzbuzz ";
        } elseif ($z % 3 == 0) {
            echo "Fizz ";
        } elseif ($z % 5 == 0) {
            echo "Buzz ";
        } else {
            echo "$z ";
        }
    }
    ?>

</body>
</html>
