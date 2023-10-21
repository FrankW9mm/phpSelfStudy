

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
        <h1 class="header">Post and Get</h1>
        <form action="./postAndGet.php" method="post">
            <label for="">Quantity</label>
            <input type="text" name="quantity" id="">
            <input type="submit" name="total" id="">
        </form>
        <?php 
        $item = "pizza";
        $price = 5.99;
        $quan = $_POST["quantity"];
        $total = $quan * $price;

        ?>
        <?php 
        echo" user order $item and the total is \$ $total "
        ?>
    </div>
</body>
    

</html>