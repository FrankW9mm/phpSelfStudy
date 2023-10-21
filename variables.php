<?php
$name = 'Willian';
$age ='20';
$num1 = 34;
$num2 = 34;
$t = true;
$f = false;
echo "<h1> hello {$name} </h1>"
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
        <h1 class="header">Variables</h1>
        <p><?php echo $name; ?></p>
        <p><?php echo $age; ?></p>
        <p><?php if($num1 == $num2){
            echo'it same';
        }?></p>
        <p><?php echo $num2 / $num2; ?></p>
        <p><?php echo "boolean test for true : {$t}" ?></p>
        <p><?php echo "boolean test for false : {$f}" ?></p>
    </div>
</body>
</html>