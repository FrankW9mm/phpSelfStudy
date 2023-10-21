<?php 

$arr = array(1,2,4,4,5);
$arr1 = [1,2,4,5,6,7];

$obj = '{
    $a = 23;
    $b = 34;
}';
class test{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function out (){
        echo"{$this->name} and {$this->age}";
    }
}
$a = new test("william",23);

printf($obj)

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
        <h1 class="header">Data types</h1>
        <?php echo var_export($arr) ?>
        <?php var_dump($a); ?>
        <?php $a->out(); ?>
    </div>
</body>
</html>