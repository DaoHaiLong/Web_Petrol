<?php
session_start();
error_reporting(0);
include('./includes/config.php');
if (isset($_POST['login'])) {
    $adminuser = $_POST['username'];
    $password = ($_POST['password']);
    $query = mysqli_query($con, "select id from AdminUser where  AdminName='$adminuser' && PasswordAdmin='$password' ");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['aid'] = $ret['id'];
        header('location:dasboard.php');
    } else {
        echo "<script>alert('Invalid details. Please try again.');</script>";
        echo "<script>window.location.href='./LoginIndex.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!--------------------------------- css------------------------ -->
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/login.css'>

    
    <!--------------------------------- JS ------------------------ -->
    <script src='js/main.js'></script>
    <title>
           Login 
        </title>

</head>
<body>
    <div class="login-wrap">
        <form  method="post">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
               
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" placeholder="AdminName" type="text" name="username" required="true" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" class="input" placeholder="PasswordAdmin" type="password" name="password" required="true">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <button type="submit" class="button"  name="login">Login</button>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="./index.html">Welcome</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    

</body>
</html>