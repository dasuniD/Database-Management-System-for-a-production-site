<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'usbw', 'registrations');


if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
    
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 // if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
 
  // first check the database to make sure the user is accepted before
  
  $user_check_query = "SELECT * FROM users WHERE UserName='$username'";

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user)  // if user exists
  { 
    
    $password_check_query = "SELECT * FROM users WHERE Password = '$password'";

    $pass_result = mysqli_query($db, $password_check_query);
    $pass = mysqli_fetch_assoc($pass_result);

    if ($pass == 0)  // if Password incorrect
    {
      array_push($errors, "Incorrect Password");
    }
   
  }

  else
    {
      array_push($errors, "Access Denied");
    }

  // Finally, Sign in the user if there are no errors in the form

  if (count($errors) == 0) {


 
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');

  }
}
