<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="./favicon.png"/>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Cafe</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="./index.php">
        <img class="navbar-brand" src="./favicon.png" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
            <li class="nav-item active" style="margin-right:20px;">
                <a class="nav-link" href="#">What We DO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown" style="margin-right:10px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign-In
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./login_user/Login_v9/login.php"> As Customer</a>
                    <a class="dropdown-item" href="#">As Author</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="mainblock text-center">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./signin.png" style="height:250px;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight: bolder;">SIGN-IN</h5>
            <p class="card-text">Sign in into your account and experience all the benefits.</p>
            <a href="./signup_user/signup.php" class="btn btn-danger">Sign In</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./connect.png" style="height:250px;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: bolder;">CONNECT TO AUTHOR</h5>
            <p class="card-text">Connect to anyone of our trusted authors and get your work done easily .</p>
            <a href="#" class="btn btn-danger">Connect to Author</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./payment.png" style="height:250px;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: bolder;">PAY SECURELY</h5>
            <p class="card-text">Complete the payment through our secure portal.</p>
            <a href="#" class="btn btn-danger">Pay The Author</a>
        </div>
    </div>
</div>
<div class="bottom fixed-bottom">
    <h3><p>Currently <span style="font-weight: bolder;color:yellow;">1042</span> customers are connected to Us</p><p>Copyright @blitzboyz limited</p></h3>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>