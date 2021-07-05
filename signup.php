<?php
session_start();
include("db.php");
include("function.php");
if ($_SERVER['request_method'] == "POST")
    //something was posted
    if (!empty($user_name) && !empty($password)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password)  values('$user_id','$user_name','$password') ";
        mysqli_query($con, $query);

        header("location: login.php");

        die;
    } else {
        echo "PLEASE enter some valid information!";
    }



?>
<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">
</header>
<div class="body">
    <div id="box">
        <img src="images/jimlogo.png" height="45px">
        <img src="images/ALILOGO.png" height="65px">
        <h1> THE SIGNUP FORM</h1>

        <form class="form" action="validation.php" method="post">
            <div>
                <input id="text" id="fag" name="fag" placeholder="firstname"><br><br>
            </div>
            <div>
                <input id="text" name="password" placeholder="password"><br><br>
            </div>
            <div>
                <input type="button" name="submit" value="signup">
                <div id="thesign">
                    <a href="index.php"> CLICK TO LOGIN</a>
                </div>
            </div>
    </div>





    </form>
</div>








</html>