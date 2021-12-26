<!-- PHP Fundamentals (Increment/Decrement Operators) -->


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
                
              
                // Increment/Decrement operators (pre-increment)

                $x = 5;
                echo ++$x; // purba increament hoba 
                echo "<br/>";
                
                $x = 5;
                echo --$x; // purba decreament hoba 
                echo "<br/>";

                // Increment/Decrement operators (post-increment)
                // i++ is a post increament, it print value older then keep new value for printing next

                $y = 10;
                echo $y++; // purba increament hoba na , pora hoba// tai print korba 10
                echo "<br/>";
                echo $y; // Here increamented "11" will be printed. bacause it is post increament
                echo "<br/>";
                

                $y = 10;
                echo $y--; // purba decreament hoba na , pora hoba// tai print korba 10
                echo "<br/>";
                echo $y; // Here decreamented "11" will be printed. bacause it is post decreament
                echo "<br/>";



                // Logical operators

                // String operators

                // Array operators

                // Conditional assignment operators

                   
                                    
                ?>
            </section> 

            <hr/>
            <section class="footerOption">
                <h2>BMIT Solution</h2>
            </section> 
        </div>  
    </body>
</html>