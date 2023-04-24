<?php require_once('server.php'); ?>
<?php require_once('include/config.php'); ?>
<?php
// LOGIN USER
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username) or empty($password)) {
      $error = "All (*) fields are Required";
    }
    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_array($results);
        $role = $row['role'];
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        //$_SESSION['success'] = "You are now logged in";
        header('location: home.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | OLS</title>
    <style>
body {
  background-image: simple-gradient black;
}



  /* Navbar styling */
  .navbar-nav li a {
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }

  .navbar-nav li a:hover {
    background-color: #337ab7;
  }

  .navbar-brand {
    animation: pulse 2s infinite;
  }

  /* Register form styling */
  .register-form input {
    background-color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    transition: all 0.2s ease-in-out;
  }

  .register-form input:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  }

  /* Icon animation */
  .icon {
    height: 50px;
    width: 50px;
    background-color: #cccccc;
    border-radius: 50%;
    display: inline-block;
    margin-right: 20px;
    animation: pulse 2s ease-in-out infinite alternate;
  }

  @keyframes pulse {
    from {
      transform: scale(1);
    }
    to {
      transform: scale(1.2);
    }
  }

  /* Fade in animation */
  .fadein {
    opacity: 0;
    animation: fadein 2s forwards;
  }

  @keyframes fadein {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .forms-right-icons .icon {
    width: 60px;
    height: 60px;
    color: #3c8dbc;
    margin-right: 15px;
    font-size: 28px;
    box-shadow: none;
}

</style>
    <!-- Bootstrap -->
    <link href="images/favicon.png" rel="icon">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animated.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">YugNirDharak Online learning</a>
        </div>
      </div>
    </nav>

    <!-- Top content -->
    <div class="top-content" style="transition: all 0.3s ease-in-out;">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text">
        <h1 align="center" style="animation: fadein 2s;">YUGNIRDHARAK LEARNING</h1>
        <div class="description">
          <p align="center" style="transform: scale(1.1); transition: all 0.3s ease-in-out;">
            This web based learning system framework will allow instructors to create any online learning program.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row register-form">
    <div class="col-sm-4 col-sm-offset-1">
    <form class="form-signin" method="post" action="login.php" style="max-width: 400px;margin: 0 auto;padding: 20px;border: 1px solid #ccc;border-radius: 5px;box-shadow: 0 0 10px #ccc;background-color: #f5f5f5;">
    <?php include('errors.php');?>
    <h2 class="form-signin-heading" style="text-align: center;font-size: 28px;font-weight: 300;margin-bottom: 20px;">Sign In</h2>
    <label for="inputUsername" class="sr-only">Username</label>
    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus style="margin-bottom: 10px;background-color: #fff;">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required style="margin-bottom: 10px;background-color: #fff;">
    <input class="btn btn-lg btn-primary btn-block" name="login_user" type="submit" value="Sign in" style="background-color: #3c8dbc;border-color: #357ca5;box-shadow: none;text-shadow: none;font-weight: 300;">
    <p style="text-align: center;margin-top: 15px;font-size: 16px;color: #666;">Not yet a member? <a href="register.php" style="color: #3c8dbc;">Sign up</a></p>
</form>
</div>

    <div class="col-sm-6 forms-right-icons">
        <div class="row">
            <div class="col-md-8">
                <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> Courses</h3>
                <p>Create acadamic courses with easy user interface.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modules</h3>
                <p>Create modules under each course to simplify students learning.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> Assessments</h3>
                <p>Create topics under each module to to learning easy and simplified step by step.</p>
            </div>
        </div>
    </div>
</div>
<?php require_once('include/footer.php'); ?>