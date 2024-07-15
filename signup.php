<?php

    include("classes/connect.php");
    include("classes/signup.php");

    $first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if($result !="")
        {
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";            
            echo "<br>The following errors occured<br><br>";
            echo $result;
            echo "</div>";
        }
        else
        {
            header("location: login.php");
            die;
        }

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        
    }     

    
?>
<html> 
   <head>
        <title>ConnectifyPlus | Sign Up  </title>
    </head>
    <style>
        #bar{height:100px; 
            background-color:rgb(20,124,141);
            color: #d9dfeb; 
            font-size: 20px;
        }
        #Sign-up_button{
            background-color: #009f6b;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
        }
        #bar2{
            background-color: white;
            width: 800px; 
            margin: auto; 
            margin-top: 50px;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #text{
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #ccc;
            padding: 4px;
            font-size: 14px;
        }

        #button{

            width: 310px;
            height: 50px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color: rgb(20,125,141);
            color: white;
        }
    </style>

    <body style="font-family: tahoma;background-color: #e9ebee;">
        <div id= "bar" >
            <div style="font-size: 40px;">ConnectifyPlus</div>
            <div id="Sign-up_button">
                <a style="text-decoration: none;color: white;" href="signup.php">Sign-up</a>
            </div> 
        </div>

        <div id="bar2" >

            Sign Up To ConnectifyPlus<br><br>

            <form method= "post" action="">
                <input value="<?php echo $first_name ?>" name="first_name"  type="text" id="text" placeholder="First Name"><br><br>
                <input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name"><br><br>
                <span style="font-weight: normal;">Gender:</span><br><br><select id="text" name="gender">
                    
                    <option><?php echo $gender ?></option>
                    <option>Walmart Bag</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Non-binary</option>
                    <option>prefer not to say</option></select><br><br>
                <input value="<?php echo $email ?>"name="email" type="text" id="text" placeholder="Email"><br><br>
                <input name="password1" type="Password" id="text" placeholder="Password"><br><br>
                <input name="password2" type="Password" id="text" placeholder="Retype Password"><br><br>

                <input type="submit" id="button" value="Sign Up"><br><br><br>
                
            </form>
            
        </div>

    </body>
