<!-- PHP Fundamentals (String Operators/ String Concatanation) -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Syntax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->

        <style>
            .phpcoding{ 
                width: 900px; 
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
                

                // String operators 1.0

                $a = "Hello ";
                $b = $a . "World!"; // now $b contains "Hello World!"
                echo $b;
                echo "<br/>";

                // String operators 1.1
                $x  = "Hello ";
                $y  = "World!";
                echo $x . $y;     // now $a contains "Hello World!"
                echo "<br/>";
              
                // String operators 2
                $p  = "Hello ";
                $q  = "World!..................";
                echo $p .= $q;     // now $a contains "Hello World!"
                echo "<br/>";

               

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
