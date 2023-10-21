<?php 

echo"hiii"; 

$name = 'william';
$age = 23;

function test() {
    global$school;
    global$name;
    global$age;
    $school = "bristol";
    echo" this is function testting";
    echo "name is {$name} and age is {$age}";
    
}

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
        <h1 class="header">Scopes</h1>
        <p><?php test() ?></p>
        <p><?php echo "School is in {$school}"; ?></p>
        
    </div>
</body>
</html>