<!-- PHP Fundamentals (For Loops) -->

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
                     for($i = 0; $i < 10; $i++){
                         echo "The number is $i <br/>";

                         // i=0, condition ok, i++ or i = i + 1 or i = 0 + 1, 
                         // but it contains 1 and send value to print 0, 
                         // because i++ is a post increament, it print value older then keep new value for printing next
                         // for understanding this see https://www.youtube.com/watch?v=rHhNIXT0niA&ab_channel=KevinPowell 
                        }
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>