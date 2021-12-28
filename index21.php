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

                // Type1: General
                    function student(){
                        echo "I am a student";
                        echo "<br/>";
                    }
                    student();
                    

                // Type2: Argument 1
                    function school($SchoolName, $year){
                        echo "$SchoolName is my school name.";
                        echo "$year is my admission year.";
                        echo "<br/>";
                    }
                    school("Govt. Laboratory High School, Rajshahi","2006");
                    school("Govt. Laboratory High School, Rajshahi","2006");
                    school("Govt. Laboratory High School, Rajshahi","2006");

                // Type2: Argument 2 (Defalut value Related)
                function school1($SchoolName= "Laboratory"){
                    echo "$SchoolName is my school name.";
                    echo "<br/>";
                }
                school1("Govt. Laboratory High School");
                school1();
                school1("Govt. Laboratory High School");

                // Type2: Argument 3  (returning function)
                function sum($x, $y){
                    $z = $x + $y;
                    return $z;

                }
               
               echo "5 + 10 =".sum(10,20);// it's a function returning rule of php, see index4.1.php
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>