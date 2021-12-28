<!-- PHP Fundamentals (Comparison Operators) -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Syntax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->

        <style>
            .phpcoding{ width: 900px; 
                margin: 0 auto; 
                background: #EAE5E4; 
                padding: 10px;
                min-height: 400px;
            }
            
            .headerOption,
            .footerOption{
                background: #EF6D52;
                color: #000;
                text-align: center;
                min-height: 50px;
            }
            .headerOption h2,
            .footerOption h2{
                margin: 0;
                padding: 10px;
            }
            .mainContent{
                min-height: 300px;
            }
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headerOption">
                <h2>PHP Fundamentals Training</h2>
            </section>
            <hr/>
            <section class="mainContent">
                <?php
                
              
                // Comparison operators 
                
                
                    // Equal (number and number)

                    $x = 100;
                    $y = 100;

                    var_dump( $x == $y ); // true ,causes value is equal 
                    echo "<br/>";

                    // Equal (number and string)

                    $x = 100;
                    $y = "100";
                    var_dump( $x == $y ); // true ,causes value is equal   
                                          // becase inside value is same
                    // var_dump( $y );
                    // echo "<br/>";
                    // var_dump( $x );

                    // Identical (number and string)
                    $x = 100;
                    $y = "100";
                    var_dump( $x === $y );// false,causes datatype identity is not equal
                    echo "<br/>";

                    // Not equal: 1
                    $x = 100;
                    $y = 100;
                    var_dump( $x != $y );
                    echo "<br/>";

                    // Not equal: 2
                    $x = 100;
                    $y = 100;
                    var_dump( $x <> $y );
                    echo "<br/>";

                    // Less Than, Greater Than
                    $x = 10;
                    $y = 100;
                    var_dump( $x < $y );
                    echo "<br/>";
                    var_dump( $x > $y );
                    echo "<br/>";

                    // Less Than Equal, Greater Than Equal
                    $x = 10;
                    $y = 100;
                    var_dump( $x <= $y );
                    echo "<br/>";
                    var_dump( $x >= $y );
                    echo "<br/>";

                    // Spaceship ( -1 , 0, 1 )
                    // Returns an integer less than, equal to, or greater than 
                    // zero, depending on if $x is less than, equal to, or greater 
                    // than $y.
                    $x = 5;  
                    $y = 10;

                    echo ($x <=> $y); // returns -1 because $x is less than $y
                    echo "<br>";

                    $x = 10;  
                    $y = 10;

                    echo ($x <=> $y); // returns 0 because values are equal
                    echo "<br>";

                    $x = 15;  
                    $y = 10;

                    echo ($x <=> $y); // returns +1 because $x is greater than $y



                // Increment/Decrement operators

                // Logical operators

                // String operators

                // Array operators

                // Conditional assignment operators

                   
                                    
                ?>
            </section> 

            <hr/>
            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>