<!-- PHP Fundamentals (Super Globals Variable) -->

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
                    // PHP has some global variables.
                    // Such:
                    // Super $GLOBALS  // $_SERVER // $_REQUEST // $_POST  // $_GET 
                    // $_ENV    // $_COOKIE  // $_SESSION // $_FILES



/* 
What is variable and variable scope?
~ A variable's scope determines where in a program a variable is available for use. 
A variable's scope is defined by where the variable is initialized or created.  
*/
                    //  Super Globals Variable: $GLOBALS 

                        $x = 5;      
                        $y= 10;
                        function sum(){
                            echo $GLOBALS['z'] = $GLOBALS['x']+ $GLOBALS['y'];
                        }
                        sum();
                        echo "<br/>";
                        echo $z; // Notice that: accessing super global variable anywhere
                        echo "<br/>";

                    //  Super Globals Variable: $_SERVER 

                        echo $_SERVER['PHP_SELF']; // working file location... 
                        echo "<br/>";
                        echo $_SERVER['SERVER_NAME']; // site name 
                        echo "<br/>";
                        echo $_SERVER['SCRIPT_NAME']; // full path name
                        echo "<br/>";
                        echo $_SERVER['HTTP_USER_AGENT']; // browser supprt name
                        echo "<br/>";
                        echo $_SERVER['SERVER_ADDR']; // IP address
                

                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution</h2>
            </section> 
        </div>  
    </body>
</html>