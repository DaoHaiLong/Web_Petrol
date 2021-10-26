<?php
session_start();

include('./includes/config.php');
if (strlen($_SESSION['aid'] == 0)) {
  header('location:logout.php');
} else {
  // Change password code
  if (isset($_POST['submit'])) {
    $adminid = $_SESSION['aid'];
    $curpassword = ($_POST['currentpassword']);
    $newpassword = ($_POST['newpassword']);
    $query = mysqli_query($con, "select id from AdminUser where id='$adminid' and   PasswordAdmin='$curpassword'");
    $row = mysqli_fetch_array($query);
    if ($row > 0) {
      $ret = mysqli_query($con, "update AdminUser set PasswordAdmin='$newpassword' where id='$adminid'");
      echo "<script>alert('Password changed successfully.');</script>";
      echo "<script>window.location.href='./LoginIndex.php'</script>";
    } else {
      echo "<script>alert('Password change failed.Please try again! ');</script>";
      echo "<script>window.location.href='./ChangePass.php'</script>";
    }
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <script type="text/javascript">
      function Checkpass() {
        if (document.Changepassword.newpassword.value != document.Changepassword.Confirmpassword.value) {
          alert('Error.Please try again!');
          document.Changepassword.Confirmpassword.focus();
          return false;
        }
        return true;
      }
    </script>
  </head>

  <body>
  <div class="login-wrap">
        <form  method="post" method="post" name="Changepassword" novalidate onsubmit="return Checkpass()">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Change Password</label>
               
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="validationCustom03" class="label">Current Password</label>
                            <input id="currentpassword" class="input" placeholder="Current Passsword" type="password" name="currentpassword" required>
                        </div>
                        <div class="group">
                            <label for="validationCustom03" class="label">New Password</label>
                            <input id="newpassword" class="input" placeholder="New Passsword" type="password" name="newpassword" required>
                        </div>
                        <div class="group">
                            <label for="validationCustom03" class="label">Confirm Password</label>
                            <input id="Confirmpassword" class="input" placeholder="Confirm Passsword" type="password" name="Confirmpassword" required>
                        </div>
                        <div class="group">
                        <button class="button" type="submit" name="submit">Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </body>

  </html>
<?php } ?>