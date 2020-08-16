<?php
  session_start();
  $name = "";
  $email = "";
  $age = "";
  $knowledge = "";
  $interest = "";
  $errors = array();

  //connect
  $db = mysqli_connect('localhost', 'root', '', 'newaccount');

  //create account clicked
  if (isset ($_POST['createacc'])){
    $name = mysqli_real_escape_string($db, $_POST['fname']);
    $email = mysqli_real_escape_string($db, $_POST['femail']);
    $pass = mysqli_real_escape_string($db, $_POST['fpword']);
    $age = mysqli_real_escape_string($db, $_POST['fage']);
    $knowledge = mysqli_real_escape_string($db, $_POST['knowledges']);
    $interest = mysqli_real_escape_string($db, $_POST['inter_est']);


    if(empty($name)){
      array_push($errors, "Name is required");
    }
    if(empty($email)){
      array_push($errors, "Email is required");
    }
    if(empty($pass)){
      array_push($errors, "Password is required");
    }
    if(empty($age)){
      array_push($errors, "Age is required");
    }
    if(empty($knowledge)){
      array_push($errors, "Knowledge subject is required");
    }
    if(empty($interest)){
      array_push($errors, "Interest subject is required");
    }


    //add to database
    if (count($errors) == 0){
        $pass = md5($pass);
        $sql = "INSERT INTO users (name, email, password, age, knowledge, interest) VALUES ('$name', '$email', '$pass', '$age', '$knowledge', '$interest')";
        mysqli_query($db, $sql);
        $_SESSION['femail'] = $email;
        $_SESSION['success'] = "You are back!!!";
        header('location: homepage.php');

    }
  }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['femail']);
      header('location:index.html');

    }

  if (isset ($_POST['enteracc'])){
    $email = mysqli_real_escape_string($db, $_POST['femail']);
    $pass = mysqli_real_escape_string($db, $_POST['fpword']);

    if(empty($email)){
      array_push($errors, "Email is required");
    }
    if(empty($pass)){
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0){
        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
        $result=mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1) {
          $_SESSION['femail'] = $email;
          $_SESSION['success'] = "You are back!!!";
          header('location: homepage.php');
        }
        else{
          array_push($errors, "Wrong email/password");
        }

    }
  }
 ?>
