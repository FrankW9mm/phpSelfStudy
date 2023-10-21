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
        <h1 class="header">String Methods</h1>

        <?php   echo strlen('Hello hi hii');
                echo '<br>';
                echo str_word_count("Wtf i love emily 123");
                echo '<br>';
                echo strrev('Emily love');
                echo '<br>';
                echo strpos('i want emily', 'emily');
                echo '<br>';
                $string = 'i want sarah';
                echo str_replace('sarah','emily',$string);
        ?>
    </div>
</body>
</html>