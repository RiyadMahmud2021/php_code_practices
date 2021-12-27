<!-- PHP Fundamentals ( Super Global Variable $_REQUEST & $_POST) -->
<!-- Detail HTTP All methods(GET, POST, PUT, HEAD, DELETE, PATCH, OPTIONS) for PHP: https://www.w3schools.com/tags/ref_httpmethods.asp -->

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

            <!-- 1. method="GET" -->
               
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                              <!--  
                                     1. method="GET" : append data into url
                                     2. method="GET" :  is not secure.
                                     3. Good for page Bookmarking. 
                               -->
                        Username: <input type="text" name="username"/>
                    
                        <input type="submit" name="Submit"/>
                    </form>
            
                    


           <!-- 2. method="POST" -->

                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                         <!--  
                              1. method="POST" : didnot append data into url but keep data save
                              2. method="POST"  :  is secure.
                              3. Not good for page Bookmarking. 
                         -->
                        NewUsername: <input type="text" name="username"/>
                    
                        <input type="submit" name="Submit"/>
                    </form>




           <!-- 3. Global $_REQUEST with method="POST" and request handeling-->

                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                         <!--  
                              1. method="POST" : didnot append data into url but keep data save
                              2. method="POST"  :  is secure.
                              3. Not good for page Bookmarking. 
                         -->
                        NewUsername: <input type="text" name="username"/>
                    
                        <input type="submit" name="Submit"/>
                    </form>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $name = $_REQUEST['username'];  // $_REQUEST['username']     Keeping in A separate variable. // Here username is the field name.
                            if (empty($name)){
                                echo "<span style='color:red'>Username field must not be empty!!!</span>";
                            }
                            else{
                                echo "You have submitted ".$name. ".Thank for Submission." ;
                            }
                        } 
                    ?>

                    


            <!-- 4. Global $_POST with method="POST" with post-request handeling -->

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                         <!--  
                              1. method="POST" : didnot append data into url but keep data save
                              2. method="POST" :  is secure.
                              3. Not good for page Bookmarking. 
                         -->
                        NewUsername: <input type="text" name="username1"/>
                    
                        <input type="submit" name="Submit1"/>
                    </form>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){ 
                            $name = $_POST['username1']; // $_REQUEST['username']     Keeping in A separate variable. // Here username is the field name.
                            if (empty($name)){
                                echo "<span style='color:red'>Username field must not be empty!!!</span>";
                            }
                            else{
                                echo "You have submitted ".$name. ".Thank for Submission." ;
                            }
                        } 
                    ?>
            
            
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution</h2>
            </section> 
        </div>  
    </body>
</html>