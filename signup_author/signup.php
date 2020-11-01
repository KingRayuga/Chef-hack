<?php ob_start(); ?>
<?php session_start(); ?>



<?php
$db['db_host']= "localhost";
$db['db_user']= "root";
$db['db_pass']= "";
$db['db_name']= "cafe";
foreach ($db as $key=>$value)
{
    define(strtoupper($key),$value);
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>

<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = mysqli_real_escape_string($connection,$username);
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);
        $query = "INSERT INTO users(username,user_password,user_email,user_role)";
        $query .= "values('{$username}','{$password}','{$email}','')";
        $register_user_query = mysqli_query($connection,$query);
        if(!$register_user_query){
            die("query failed".mysqli_error($connection));
        }
        header("Location: ../index.php");

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="signup.php">
                        <h2 class="form-title">Create account For author</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="name" placeholder="username"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="firstname" id="name" placeholder="Your First Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="../login_user/Login_v9/login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>