<!-- PHP Fundamentals (Logical Operators)-- -->


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
                
              
                // Logical operators (and / &&) 
                // two condition need to be true
                $a = 40;
                $b = 20;

                if($a == 40 and $b == 20){ // two condition need to be true
                    echo "Yes Right";
                    echo "<br/>";
                }
                else{
                    echo "Not Right";
                    echo "<br/>";
                }


                // Logical operators (or / ||)
                // only one condition need to true
                $c = 40;
                $d = 20;

                if($a == 70 or $b == 30){ // only one condition need to true
                    echo "Yes Right";
                    echo "<br/>";
                }
                else{
                    echo "Not Right";
                    echo "<br/>";
                }


                // Logical operators (xor) 
                // only condition must need to be true 
                // but not to be two's true. 
                $c = 40;
                $d = 20;

                if($a == 70 xor $b == 30){ // two condition must need to true
                    echo "Yes Right";
                    echo "<br/>";
                }
                else{
                    echo "Not Right";
                    echo "<br/>";
                }

                // Logical operators ( !== ) 
                // only condition must need to be true 
                // but not to be two's true. 
                $c = 40;
                $d = 20;

                if($a !== 70){ // two condition must need to true
                    echo "Yes Right";
                    echo "<br/>";
                }
                else{
                    echo "Not Right";
                    echo "<br/>";
                }


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