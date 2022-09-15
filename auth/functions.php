<?php 

require_once('config.php');
function register(){
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
            $email_error="Please Enter Valid Name";
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
}