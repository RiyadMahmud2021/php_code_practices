<!-- PHP Fundamentals (Operators) -->

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
                
                // Arithmatic Operators 
                   
                    $x = 10;  
                    $y = 6;
                    echo $x + $y; // Addition
                    echo "<br/>";
                    echo $x - $y; // Subtraction
                    echo "<br/>";
                    echo $x * $y; // Multiplication	
                    echo "<br/>";
                    echo $x / $y; // Division
                    echo "<br/>";
                    echo $x % $y; // modulus
                    echo "<br/>";
                    echo $x ** $y; // power, Exponentiation	
                    echo "<br/>";


                // Comparison operators

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