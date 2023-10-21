    <?php

    /* ======================================================
    PHP Calculator example using "sticky" form (Version 1)
    ======================================================
    Author : P Chatterjee (adopted from an original example written by C J Wallace)
    Purpose : To multiply 2 numbers passed from a HTML form and display the result.
    input:
        x, y : numbers
        calc : Calculate button pressed
    Date: 15 Oct 2007
    */

    // grab the form values from $_HTTP_GET_VARS hash
    extract($_GET);
    $total;
    function Str_cal (){
        global $x, $y, $opt, $total;
        $result = null;
        $str = "$x $opt $y" ;
        echo $str;
        eval('$result = ' . $str . ';');
        // $total = $result;
        $total = $result;
    }

    function calculte (){
        global $x, $y, $opt, $total;

        switch ($opt) {
            case '+':
                $total = $x + $y;
                $opt = '+';
                break;
            case '-':
                $total = $x - $y;
                $opt = "-";
                break;
            case '*':
                $total = $x * $y;
                $opt = '*';
                break;
            case '/':
                if($x == 0 || $y == 0){
                    $total = 'infinity';
                }
                else{
                    $total = $x / $y;
                    $opt = '/';
                }
            
                break;
            
            default:
                $x=0;
                $y=0;
                $total = 0;
                break;
        }

        return $total;
    }

    // first compute the output, but only if data has been input
    if(isset($calc)) { // $calc exists as a variable
        // calculate();
        if(is_numeric($x) || is_numeric($y)){
            calculte();
            
            // try{
            //     Str_cal();
            // }
            // catch(Exception $e){
            //     echo 'Caught exception: ',  $e->getMessage(), "\n";

            // }
            // Str_cal();
        }
        else{
            $error = "stoopid";
        }
        // Str_cal();
    //    switch ($opt) {
    //     case '+':
    //         $total = $x + $y;
    //         break;
    //     case '-':
    //         $total = $x - $y;
    //         break;
    //     case '*':
    //         $total = $x * $y;
    //         break;
    //     case '/':
    //         $total = $x / $y;
    //         break;
        
    //     default:
    //         $x=0;
    //         $y=0;
    //         break;
    //    }
    }
    else { // set defaults
    $x=0;
    $y=0;
    $prod=0;
    $total = 0;
    }

    if(isset($clear)){
        $x=0;
        $y=0;
        $prod=0;
        $total = 0;
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>PHP Calculator Example</title>
        </head>

        <body>

        <h3>PHP Calculator (Version 1)</h3>
        <p>Multiply two numbers and output the result</p>

        <form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>">

            x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
            
            <select name="opt" id="">
                <option value="+" <?php if( isset($opt) && $opt === '+' ) echo "selected "?>>+</option>
                <option value="-" 
                <?php if(isset($opt) && $opt === '-' ) echo "selected "?>>-</option>
                <option value="*" 
                <?php if(isset($opt) && $opt === '*' ) echo "selected "?>>*</option>
                <option value="/" 
                <?php if( isset($opt) && $opt === '/') echo "selected "?>>/</option>
            </select>

            y =  <input type="text" name="y" size="5" value="<?php  print $y; ?>"/>
            


            <input type="submit" name="calc" value="Calculate"/>
            <!-- <input type="submit" name="clear" value="Clear"/> -->
        </form>

        <?php if (!empty($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        

        <!-- print the result -->
        <?php 
        if(isset($calc)) {
            global $total;
            print "<p>x $opt y = $total</p>";
        } 
        ?>



    </body>
    </html>