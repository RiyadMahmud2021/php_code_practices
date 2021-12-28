<!-- PHP Fundamentals ($_GET) -->
<!-- What is the difference between the $_ GET and $_ POST Super global variables?
A: Difference is: $_GET retrieves variables from the querystring, 
or your URL.> $_POST retrieves variables from a POST method, such as (generally) forms. 
-->

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
                 
            <!-- Link building for textCatch.php with "$_GET".... -->
                    <a href="textCatch.php?msg=Gooddddddd&txt=Bye">Sent Data </a>
                 
            </section> 

            <section class="footerOption">
            <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>