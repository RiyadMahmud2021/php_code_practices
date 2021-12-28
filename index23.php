<!-- PHP Fundamentals (Sorting Arrays) -->

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

                    // Sorting
                    // sort() - sort arrays in ascending order
                    // same for letter or alphabet 
                    $names = array(5, 35, 67, 27, 90, 32, 1); 
                    $length = count($names);
                    sort($names);

                    for($i= 0 ; $i< $length; $i++){
                        echo $names[$i];
                        echo "<br/>";
                    }

                    echo "<br/>";
                    echo "<br/>";
                    echo "<br/>";


                    // Reverse sorting 
                    // same for letter or alphabet 
                    // rsort() - sort arrays in descending order


                    $names = array(5, 35, 67, 27, 90, 32, 1); 
                    $length = count($names);
                    rsort($names);

                    for($i= 0; $i< $length; $i++){
                        echo $names[$i];
                        echo "<br/>";
                    }

                    // Sorting Associative arrays in ascending order (Value Related)
                    // asort() - sort associative arrays in ascending order, according to the value

                    $age  = array("Jamal" => "20", "Kamal" => "25", "Almash"=> "40");
                    asort($age);

                    foreach($age as $key => $value){
                        echo "key = ".$key." Value =".$value;
                        echo "<br/>";

                    }

                    // Sorting Associative arrays in ascending order (Key Related)

                    $age  = array("Jamal" => "20", "Kamal" => "5", "Almash"=> "40");
                    ksort($age);

                    foreach($age as $key => $value){
                        echo "key = ".$key." Value =".$value;
                        echo "<br/>";
                        echo "<br/>";
                    }

                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>