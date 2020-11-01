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
        $password = $_POST['pass'];
        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);
        $query = "SELECT * from  users WHERE username = '{$username}'";
        $select_user_query = mysqli_query($connection,$query);
        if(!$select_user_query)
        {
            die("query Failed".mysqli_error($connection));
        }
        while($row = mysqli_fetch_array($select_user_query))
        {
            $db_id = $row['user_id'];
            $db_username = $row['username'];
            $db_user_password = $row['user_password'];
        }
        echo "username is {$username} db_username is {$db_username} password is {$password} db_user_password is {$db_user_password} ";
        if($username==$db_username && $password==$db_user_password)
        {
            $_SESSION['username'] = $db_username;
            header("Location: .../index.php");
        }
        else
        {
            header("Location: login.php");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
.success{
	border: 3px solid limegreen;
  }
  .error{
	border: 3px solid crimson;
  }
</style>
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form login-form" method = "POST" action="login.php">
				<span class="login100-form-title p-b-37">
                    <a href = "">Customer Sign In</a>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Sign In
					</button>
				</div>


				<div class="text-center">
					<a href="../../signup_user/signup.php" class="txt2 hov1">
						Sign Up
					</a>
				</div>
				<div class="feedback"></div>    
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>