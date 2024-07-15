<?php
session_start();

include("classes/connect.php");
include("classes/login.php");

$email = "";
$password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = new Login();
    $result = $login->evaluate($_POST);

    if ($result != "") {
        echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
        echo "<br>The following errors occurred<br><br>";
        echo $result;
        echo "</div>";
    } else {
        // Successful login, redirect to profile with user ID
        $user_id = $_SESSION['connectifyplus_userid'];
        header("Location: profile.php?id=$user_id");
        die;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>

<html>
<head>
    <title>ConnectifyPlus</title>
</head>
<style>
    #bar {
        height: 100px;
        background-color: rgb(20,124,141);
        color: #d9dfeb;
        font-size: 20px;
    }
    #Sign-up_button {
        background-color: #009f6b;
        width: 70px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
    }
    #bar2 {
        background-color: white;
        width: 800px;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        padding-top: 50px;
        text-align: center;
        font-weight: bold;
    }
    #text {
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;
    }
    #button {
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
    <div id="bar">
        <div style="font-size: 40px;">ConnectifyPlus</div>
        <div id="Sign-up_button">
            <a style="text-decoration: none;color: whitesmoke;" href="signup.php">Sign-up</a>
        </div>
    </div>

    <div id="bar2">
        <form method="post">
            Log In To ConnectifyPlus<br><br>
            <input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email"><br><br>
            <input name="password" value="<?php echo $password ?>" type="Password" id="text" placeholder="Password"><br><br>
            <input type="submit" id="button" value="Log in"><br><br><br>
        </form>
    </div>
</body>
</html>


