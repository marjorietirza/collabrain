<?php include('server.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collabrain: Create Account</title>
</head>

<body>
  <nav class="nav-bar">
    <div class="logo"><a href="index.html">Collabrain</a></div>
  </nav>

  <form method="POST" action="create-account.php">
    <div class="header-form">
      <h2>Create new account</h2>
    </div>

    <?php
      include ('errors.php');
     ?>
    <label for="fname">Name:</label>
    <br>
    <input type="text" name="fname" id="fname" value="<?php echo $name; ?>">

    <br><br>
    <label for="femail">Email</label>
    <br>
    <input type="email" name="femail" id="femail" value="<?php echo $email; ?>">
    <br><br>
    <label for="fpword">Password</label>
    <br>
    <input type="password" name="fpword" id="fpword">
    <br><br>
    <label for="fage">Age</label>
    <br>
    <input type="text" name="fage" id="fage" maxlength="3">
    <br><br>
    <div>
      <br>
      <label for="fknows">What knowledge can you share?</label>
      <br>
      <input type="text" name="knowledges">
      <br><br>
        <label for="fints">What do you want to learn?</label>
        <br>
        <input type="text" name="inter_est">
        <br><br>

        <div class="submitbtn">
          <input type="submit" name="createacc" value="Create Account" class="button"></input>
        </div>
    </div>
  </form>
  <div class="login-msg">
    <p>Already have an Account?<a href="login.php">Sign-in</a></p>
  </div>
</body>

</html>
