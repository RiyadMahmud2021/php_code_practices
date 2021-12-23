<!-- PHP Fundamentals (Array Operators) -->


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
                
                          
                // Array operators (Union)

                $x = array(
                    "a" => "Dhaka",     //  Here, "a" is called "array key" and 
                                        //  "Dhaka" is called "Key Value"
                    "b" => "Rajshahi",
                );

                $y = array(
                    "c" => "Dhaka",
                    "d" => "Rajshahi",
                );

                var_dump($x + $y);  // Union of $x and $y
                echo "<br/>";
                echo "<br/>";
                


                // Array operators (Equality = same key value pairs)
                // Including Array Key and key value
                // Position is not fact

                $x = array("b" => "green","a" => "red");  
                $y = array("a" => "red", "b" => "green");  
                var_dump($x == $y); // Returns true if $x and $y have the same array key  
                                    // and key value pairs
                echo "<br/>";
                echo "<br/>";



                // Array operators (Identity = same order and of the same types)
                // Position is the fact

                $x = array("a" => "red", "b" => "green");  
                $y = array("a" => "red", "b" => "green");  
                var_dump($x === $y);  // Returns true if array key and key value pairs 
                                      // in the same order and of the same types
                echo "<br/>";
                echo "<br/>";



                // Array operators (Identity = same order and of the same types)
                // Position is the fact

                $x = array("a" => "red", "b" => "green");  
                $y = array("a" => "red", "b" => "green");  
                var_dump($x != $y);  // Returns true if key value pairs 
                                     // in the same order and of the same types
                echo "<br/>";
                echo "<br/>";


                // Array operators (Inequality)
                // Position is not the fact
                // Returns true if $x is not equal to $y
                // "$x != $y" is the oposition of "$x <> $y	"
                // "$x != $y" is the oposition of "$x == $y"

                $x = array( "a" => "Dhaka", "b" => "Rajshahi",
                );

                $y = array( "d" => "Rajshahi", "c" => "Dhaka"  
                );
                var_dump($x != $y);  // Returns true if $x is not equal to $y	
                echo "<br/>";
                echo "<br/>";
                // Conditional assignment operators
                    
                


                // Array operators (Non-identity)
                // ** Returns true if $x is not equal to $y
                // "$x != $y" is the oposition of "$x <> $y	"
                // "$x != $y" is the oposition of "$x == $y"

                $x = array( "a" => "Dhaka", "b" => "Rajshahi",
                );
                $y = array( "d" => "Rajshahi", "c" => "Dhaka"  
                );
                var_dump($x !== $y);  // Returns true if $x is not equal to $y	
                echo "<br/>";
                echo "<br/>";
                // Conditional assignment operators


                ?>
            </section> 
            <hr/>
            <section class="footerOption">
                <h2>BMIT Solution</h2>
           </section> 
        </div>  
    </body>
</html>