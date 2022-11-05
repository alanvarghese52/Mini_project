<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Coding With Alan varghese -->
    <title>Registration Form</title>
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
    
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Hi friend</h2>
                    <p>Sign In if your are an<br>existing customer.</p>
                    <a href="login.php" class="btn">Sign In</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Registration</h2>
                    <form method="post" name="login.php">
                        <p>
                            <label>username<span>*</span></label>
                            <input type="text" name="username" placeholder="username" required>
                        </p>
                        <p>
                            <label>email<span>*</span></label>
                            <input type="text" name="email" placeholder="email" required>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Password" required>
                        </p>
                        <!--<p>
                        <label>Choose your user type:<span>*</span></label>
                        <select name="users" id="users">
                        <option value="customer">customer</option>
                        <option value="photographer">photographer</option>
                        </select>
                        </p>-->
                        <p>
                            <input type="submit" name="submit" value="Sign Up">
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