<!-- PHP Fundamentals (Arrays) -->

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
                    //  Indexed Array
                    $x = array(5,3,9,10,15); 
                             // Means
                            $x[0] = 5;
                            $x[1] = 3;
                            $x[2] = 9;
                            $x[3] = 10;
                            $x[4] = 15;
                    echo $x[3];
                    echo "<br/>";
                     
                    //  Array length Count
                    $x = array(5,3,9,10,15); 
                    echo count($x);
                    echo "<br/>";

                    // Array Value Printing with Loop
                    $x = array(5,3,9,10,15); 
                    $length = count($x);
                    echo "<br/>";

                    for ($i = 0;  $i < $length; $i++){
                        echo $x[$i];
                        echo "<br/>";
                    }

                    // Assiciative Array
                    $ages = array("Karim" => "25",  "Rahim"=> "20", "Mamun" => "28");
                                // Means
                                // $ages["Karim"] = "25";
                                // $ages["Rahim"] = "20";
                                // $ages["Mamun"] = "28";
                                
                    foreach($ages as $y => $age){
                        echo "key= ".$y.", Age = ".$age;
                        echo "<br/>"; 
                    }
                    
                    // Multidimensional array

                    $cars = array(
                        array(" BMW " , 15 ,"X1 Sports Activity Vehicle" ),
                        array(" Volve ", 20, "SUV XC40/XC60/XC90"),
                        array("TATA", 25, 30), // give comma here not semi colon
                    );
                                 
                    echo $cars[0][0];
                    echo "<br/>";  
                    echo $cars[1][0];
                    echo "<br/>";  
                    echo $cars[2][0]; 
                    echo "<br/>"; 


                    // // Multidimensional array Row Collumn


                    $cars1 = array(
                        array(" BMW " , 15 ,"X1 Sports Activity Vehicle" ),
                        array(" Volve ", 20, "SUV XC40/XC60/XC90"),
                        array("TATA", 25, "T-30"), // give comma here not semi colon
                        array("Audi", 25, "A-30"),
                    );
                                  
                    for($row = 0; $row < 4; $row++){ // $row for controlling row 
                        $j = $row + 1; //see the logic.........
                                    // I am increamenting here extra 1 with row value
                                    // for maintaining serial number with used array
                        echo "<p> Row Number $j</p>";

                        echo "<ul>";
                        for($col = 0; $col < 3; $col++ ){ // $col for controlling collumn
                            echo "<li>".$cars1[$row][$col]."</li>";
                        }
                        echo "</ul>";
                    }      
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>