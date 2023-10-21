<?php

    // Read the text data into an array
    $data = file("./quotes.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1">
            <tr>
                <th>Quote</th>
                <th>Source</th>
                <th>Date of Birth - Date of Death:</th> 
                <th>Wikipedia Link</th>
                <th>Wikipedia Image</th>
                <th>Category</th> 
            <tr>

            <?php
                // Loop through each line and display the information
                foreach ($data as $line) {
                    // Split the line by the '|' character
                    $parts = explode("|", $line);

                    if (count($parts) == 6) {
                        $quote = $parts[0];
                        $source = $parts[1];
                        $dobDod = $parts[2];
                        $wplink = $parts[3];
                        $wpimg = $parts[4];
                        $category = $parts[5];

                        // Display the information
                        echo '<tr>';
                        echo "<td  width='150'>$quote</td>";
                        echo "<td align='center'>$source</td>";
                        echo "<td align='center'>$dobDod</td>";
                        echo "<td align='center'><a href='$wplink' target='_blank'>$wplink</a></td>";
                        echo "<td align='center'><img src='$wpimg' alt='Image' width='100' height='100'></td>";
                        echo "<td align='center'>$category</td>";
                        echo '<tr>';

                    }
                }
            ?>
        </table>
    </div>

</body>
</html>
