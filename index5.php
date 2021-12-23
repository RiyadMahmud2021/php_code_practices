<!-- PHP Fundamentals (Show Output in PHP) -->
<!-- echo vs print("") -->


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
        
            <section class="mainContent">
                <?php

                    // Echo
                    // Two string gapping below
                    echo "I am working on PHP.", " ", "It's Nice";
                    // echo can bare multiple parameter
                    // echo is a slow processed
                    // echo is mostly prefarable
                    echo "<br/>";

                    // Print 
                    // Print give the same result as echo. 
                    // print is slow processed. 
                    // We can take printing value in a parameter and can check data type of value. 
                    print("I am working on PHP.");

                    $a =  print("I am working on PHP.");
                    echo "<br/>";
                    echo "<br/>";
                    echo "<br/>";
                    var_dump($a);
                    
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution</h2>
            </section> 
        </div>  
    </body>
</html>