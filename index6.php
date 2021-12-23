<!-- PHP Fundamentals (PHP Data Types) -->
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
                   // string
                   echo "PHP String Dta Type.";
                   $c = "PHP String Dta Type.";
                   echo "<br/>";
                   echo $c;

                   $d = 5;
                   echo "<br/>";
                   echo $d;

                   // Integer // Float 
                   
                    $x = 5985;
                    var_dump(is_int($x)); // asking command "is it integer?"
                    var_dump($x);
                    echo "<br/>"; 

                    $x = 59.85;
                    var_dump(is_int($x)); // asking command "is it integer?"
                    echo "<br/>";

                    $x = 10.365;
                    var_dump(is_float($x)); // asking command "is it float?"
                    echo "<br/>";

                    // Boolean
                    $y = false;
                    var_dump($y); 
                    echo "<br/>";

                    // Array
                    $z = array("Akbar", "Mamun", "Rony");
                    var_dump($z); 
                    echo "<br/>";

                    // Object
                    Class Student{
                        function department() { // using function as property
                            return "Physics";
                            echo "<br/>";
                        }
                        function course() {
                            return "CSE 21";// return diya kora
                        }
                        function details(){
                           echo $this-> department(); // "this" refers the class what you are using
                           echo "<br/>";
                           echo $this-> course();
                           echo "<br/>";  
                        }
                    }
                    $stu1 = new Student(); // Object
                    $stu1-> details(); // calling sutudent detail function
                    $stu1-> course(); // calling sutudent course function

                    
                ?>
            </section> 

            <hr/>
            <section class="footerOption">
                <h2>BMIT Solution</h2>
            </section> 
        </div>  
    </body>
</html>