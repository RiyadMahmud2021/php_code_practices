<!-- PHP Fundamentals (Form Validation) -->
<!-- 
    1. What is a form action? 
    A: A PHP form action attribute specifies the location to transfer the submitted users' information. 
       You can set the attribute to deliver information to a website or a file.

    2. Why need action?
    A: Form data sending to the script(scicpt file loaction). 

    3. Why and when need $_SERVER['PHP_SELF'] in php form ?
    A: When my form controlling script is in the current location(where form code is written).
    
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

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <table >
                    <tr>
                         <td>Name</td>
                         <td><input type="text" name="name"/></td>
                    </tr> 
                    <tr>
                         <td>E-mail</td>
                         <td><input type="email" name="email"/></td>
                    </tr> 
                    <tr>
                         <td>Website</td>
                         <td><input type="text" name="website"/></td>
                    </tr> 
                    <tr>
                         <td>Comment</td>
                         <td><textarea type="text" name="comment" rows="5" cols="40"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            Gender
                        </td>   
                        <td>
                            <input type="radio" name="gender" value="Male"/>Male 
                            <input type="radio" name="gender" value="Female"/>Female
                        </td>
                    </tr> 
                    <tr>
                         <td></td>
                         <td><input type="submit" name="submit" value="submit"></input></td>
                    </tr> 
                </table>
            </form>
            <?php
                    $name = $email = $website = $comment = $gender = "";
                    
                    if($_SERVER["REQUEST_METHOD"] == "POST") {

                        $name = validation($_POST["name"]); // valaidation() is a input cleaning function 
                        $email = validation($_POST["email"]);
                        $website = validation($_POST["website"]);
                        $comment = $_POST["comment"];
                        $gender = validation($_POST["gender"]);
                          
                    echo "Name:".$name."<br/>"; // Use global scope or super global method  to print out side or any where
                    echo "Email:".$email."<br/>";
                    echo "Website:".$website."<br/>";
                    echo "Comment:".$comment."<br/>";
                    echo "Gender:".$gender."<br/>";
                                    
                    }
                    
                    function validation($data){
                        $data = trim($data);
                        $data = stripcslashes($data); // stripcslashes() function removes backslashes
                        $data = htmlspecialchars($data);// htmlspecialchars() function converts some predefined characters to HTML entities.
                                                        // Give benefit on security issues. 
                        return $data;
                    }
                    
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>