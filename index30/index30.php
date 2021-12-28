<!-- PHP Fundamentals (URL/E-mail Validation) -->

<?php   

        $name = $email = $website = $comment = $gender = "";
        $errname = $erremail = $errwebsite = $errcomment = $errgender = "";
            // Here, these varibles will also take value because we will echo these values in form.

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(empty($_POST["name"])){
                $errname = "<span style='color:red'> Name Field is Required. </span>";
                // Double inverted comman ar moddha sudu single inverted comma hoy. Double hoba na.
            }
            else{
                $name = validation($_POST["name"]); // valaidation() is a input cleaning function 
            }
              
            

            if(empty($_POST["email"])){
                $erremail = "<span style='color:red'> Email Field is Required. </span>";
            }
            elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $erremail = "<span style='color:red'> Invalid E-mail Formet. </span>";
            }
            else{
                $email = validation($_POST["email"]); // valaidation() is a input cleaning function 
            }



            if(empty($_POST["website"])){
                $errwebsite = "<span style='color:red' > Website Field is Required. </span>";
            }
            elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
                $errwebsite = "<span style='color:red'> Invalid Website Formet. </span>";
            }
            else{
                $website = validation($_POST["website"]); // valaidation() is a input cleaning function 
            }



            if(empty($_POST["gender"])){
                $errgender = "<span style='color:red' > Gender Field is Required. </span>";
            }
            else{
                $gender = validation($_POST["gender"]); // valaidation() is a input cleaning function 
            }
            
            $comment = validation($_POST["comment"]);
            
        echo "Name:".$name."<br/>"; // Use global scope or super global method  to print out side or any where
        echo "Email:".$email."<br/>";
        echo "Website:".$website."<br/>"; // These will be sent to database. So showing is not important.
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
            
            <p style="color:red"> Must Be Field Required for * Marked. </p>
            <table >
                    <tr>
                         <td>Name</td>
                         <td><input type="text" name="name"  />* <?php echo $errname ?></td>
                    </tr> 
                    <tr>
                         <td>E-mail</td>
                         <td><input type="email" name="email"/>* <?php echo $erremail ?></td>
                    </tr> 
                    <tr>
                         <td>Website</td>
                         <td><input type="text" name="website"/>* <?php echo $errwebsite ?></td>
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
                            * <?php echo $errgender ?>
                        </td>
                    </tr> 
                    <tr>
                         <td></td>
                         <td><input type="submit" name="submit" value="submit"></input></td>
                    </tr> 
                </table>
            </form>
 
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>
