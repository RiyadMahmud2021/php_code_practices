<!-- PHP Fundamentals (Declaring PHP Variables) -->

<?php
    $fonts = "Hay, I am Riyad."; 
    echo $fonts;
?>

<!-- PHP Fundamentals (PHP Syntax) -->

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
                    echo " Hello PHP";
                    echo "<br/>";
                    $a = 1;
                    $b = 2; 
                    // Rule 1
                    echo "Addition = ";  
                    echo $a + $b;  
                    // Rule 1

                    // Rule 2
                    echo "Addition = $a + $b";
                    echo "<br/>";  
                    // Rule 2


                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>