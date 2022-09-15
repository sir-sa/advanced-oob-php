<?php
require_once('config.php');
$username= $email =$password ="";
    $username_error= $email_error =$password_error ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=trim($_POST['username']);
        if(empty($username)){
            $username_error="Please Fill this Field";
        }elseif(!filter_var($username, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $username_error="Please Enter Valid Name";
        }else{
            $username =$username;
        }
        $email=trim($_POST['email']);
        if(empty($email)){
            $email_error="Please Fill this Field";
        }elseif(!filter_var($email, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $email_error="Please Enter Valid email";
        }else{
            $email =$email;
        }
        $password=trim($_POST['password']);
        if(empty($password)){
            $password_error="Please Fill this Field";
        }elseif(!filter_var($password, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $password_error="Please Enter Valid Name";
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
        }

        if (empty($username_error_err) && empty($email_error) && empty($password_error) ) {
            $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$username', '$email', '$password')";
  
            if (mysqli_query($conn, $sql)) {
                header("location: index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }
      mysqli_close($conn);
    }
?>

<HTML>
<head>
<title>Sign up page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <style type="text/css">
          .wrapper {
              width: 1200px;
              margin: 0 auto;
          }
      </style>
</head>
<body>
    <div class="wrapper">
        <h1>Sign up here
        </h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      
            <div class="form-group <?php echo (!empty($username_error)) ? 'has-error' : ''; ?>">
                <label>username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"><?php echo $username_error;?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="">
                <span class="help-block"><?php echo $email_error;?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_error)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="">
                <span class="help-block"><?php echo $password_error;?></span>
            </div>
            
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <input type=“submit” value=“submit” /><br /> -->
        &nbsp;</form>
    </div>
    
</body>
</html>