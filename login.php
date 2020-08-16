<?php include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collabrain: Sign In</title>
</head>

<body>
  <nav class="nav-bar">
    <div class="logo"><a href="index.html">Collabrain</a></div>
  </nav>

  <form method="POST" action="login.php">
    <div class="header-form">
      <h2>Sign In</h2>
    </div>

    <?php
      include ('errors.php');
     ?>
    <label for="femail">Email</label>
    <br>
    <input type="email" name="femail" id="femail">
    <br><br>
    <label for="fpword">Password</label>
    <br>
    <input type="password" name="fpword" id="fpword">
    <br><br>
        <div class="submitbtn">
          <input type="submit" name="enteracc" value="Sign in" class="button"></input>
        </div>
  </form>
  <div class="login-msg">
    <p>Don't have an Account?<a href="create-account.php">Create new account</a></p>
  </div>
</body>

</html>
