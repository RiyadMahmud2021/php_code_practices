<!-- PHP Fundamentals (PHP String) -->
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

                    // string length 
                     $x = "PHP Strings Length";
                     echo strlen($x); 
                     echo "<br/>";

                    // string word count
                    $y = "PHP Strings Position";
                    echo str_word_count($y);
                    echo "<br/>";

                    // string reverse
                    $z = "PHP string reverse";
                    echo strrev($z);
                    echo "<br/>";

                    // string position
                    $p = "PHP string position";
                    echo strpos($p, "position");
                    echo "<br/>";

                    // string replace
                    $p = "PHP string replace";
                    echo str_replace("PHP", "Javascript", $x);
                    echo "<br/>";
                    
                ?>
            </section> 

            <hr/>
            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>