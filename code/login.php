<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<title>Login Form</title>
</head>
<style>
body {
  background-image: url('images/a.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
    <?php
    require('db.php');
    session_start();
    
    if (isset($_POST['username'])) 
    {
        $username = stripslashes($_REQUEST['username']);   
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
      
        $query    = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location:feeds.php");
        }
         else
          {
            echo "<div class='form'>
                  <h3>Incorrect username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } 
    else 
    {
?>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>Create your account.<br>It's totally free.</p>
                    <a href="registration.php" class="btn">Sign Up</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form method="post" name="dashboard.php">
                        <p>
                            <label>username<span>*</span></label>
                            <input type="text" name="username" placeholder="username" required>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Password" required>
                        </p>
                       
                        <p>
                            <input type="submit" name="submit" value="Sign In">
                        </p>
                        <p>
                            <a href="forgetindex.php">Forget password?</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
<?php
    }
?>
</body>
</html>