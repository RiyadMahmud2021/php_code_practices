<!-- PHP Fundamentals (Constants) -->
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

                // constant 
                // not varibale...
                // don't declare as variable... Ex: $x

                // define("name", value, case-insensitive);
                // "name":  must be same on echo and define
                // because it is case-insensitive
                // value: must be constant value
                define("VALUE", "It is the value of constant");  // Here we don't give case-insensitive  
                echo VALUE;    
                echo "<br/>";

                define("VALUE", "It is the value of constant", true ); // case-insensitive given 
                echo value; 
                echo "<br/>";
                
                // how constant can get global accessed - 1
                define("VALUED", "It is the value of constant"); 
                
                function learnPHP(){
                    return VALUED;
                }
                echo learnPHP();
                echo "<br/>";

                // how constant can get global accessed - 2
                define("VALUED1", "It is the value of constant"); 
                
                function learnJAVASCRIPT(){
                    echo VALUED1;
                }
                learnJAVASCRIPT();
                echo "<br/>";

                // constant is very important for database connection
                ?>
            </section> 

            <hr/>
            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>