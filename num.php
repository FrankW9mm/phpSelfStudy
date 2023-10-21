<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body>
    <div class="lesson-header">
        <h1 class="header">Numbers Methods</h1>

        <?php 
            $num = 12;
            $num1 = 4.3;
            $num2 = 'erer';
            $numNumeric = "23224";
            echo is_int($num);
            echo '<br>';
            echo is_float($num1);
            echo "<br>";
            echo is_finite($num1);
            echo "<br>";
            echo is_numeric($num2);
            echo "<br>";
            echo is_numeric($numNumeric);
            echo "<br>";
            $intTest = (int)$num1;
            echo $intTest;
            echo "<br>";
            $intTest1 = (int)$numNumeric;
            echo $intTest1;
        
        ?>
    </div>
</body>
</html>