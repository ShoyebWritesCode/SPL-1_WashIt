<?php
session_start();

// initializing variables
$firstName = "";
$email    = "";
$mobile = "";
$sid = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'washit');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $sid = mysqli_real_escape_string($db, $_POST['sid']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile No. is required"); }
  if (empty($sid)) { array_push($errors, "Student ID is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM member WHERE firstName='$firstName' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $member = mysqli_fetch_assoc($result);
  
  if ($member) { // if user exists
    if ($member['firstName'] === $firstName) {
      array_push($errors, "Username already exists");
    }

    if ($member['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	//$query = "INSERT INTO users (username, email, password) 
  			  //VALUES('$username', '$email', '$password')";
         $query = "INSERT INTO member (firstName, email, mobileNo, SID, password) 
  			  VALUES('$firstName', '$email', '$mobile', '$sid', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['firstName'] = $firstName;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($firstName)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM member WHERE firstName='$firstName' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['firstName'] = $firstName;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>