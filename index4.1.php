<!-- PHP Fundamentals (Declaring PHP Variables) -->

<?php
    $fonts = "Fantasy";
    $bgcolor = "#C71585" ;
    $fontcolor = "#FFDAB9" ;
    $fontcolor1 = "#FF7F50" ;
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

            body{
                margin: 0 auto;
                font-family: <?php echo $fonts; ?>;
                color: <?php echo $fontcolor1?>;
            }
            .phpcoding{ width: 900px; 
                margin: 0 auto; 
                background: #EAE5E4; 
                padding: 0px;
                min-height: 400px;
            }
            
            .headerOption,
            .footerOption{
                background: <?php
                                echo $bgcolor
                            ?>;
                color: <?php echo $fontcolor?>;
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
                padding-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headerOption">
                <h2>WPHP Fundamentals Training</h2>
            </section>
        
            <section class="mainContent">
                <?php
                    
                    // Rule 1
                    echo "Hello PHP";
                    echo "<br/>";
                    $a = 1;
                    $b = 2; 
                    echo "Addition = ";  
                    echo $a + $b;  
                    // Rule 1

                    // Rule 2
                    echo "Hello PHP";
                    echo "<br/>";
                    $a = 1;
                    $b = 2; 
                    echo "Addition = $a + $b";
                    echo "<br/>";  
                    // Rule 2

                    // Rule 3
                    echo "Hello PHP";
                    echo "<br/>";
                    $a = 6;
                    $b = 9; 
                    $c = $a + $b;
                    echo "Total value = " .$c. " and That is it";  
                    // Rule 3
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>