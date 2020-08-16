<?php include('server.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Collabrain - My Profile</title>
  </head>
  <body>
      <nav class="nav-bar">
        <div class="logo"><a href="homepage.php">Collabrain</a></div>
        <input type="text" placeholder="Search.." class="search-bar">
        <a href="index.html?logout='1'" class="log-out">Log out</a>
        <a class="active" href="profile.html">Profile</a>
        <a href="homepage.php">Home</a>
      </nav>
      <h3 class="profilepageheader">Your Profile</h3>

      <section class="content">
        <div class="left-profile">
          <img src="http://www.hotavatars.com/wp-content/uploads/2019/01/I80W1Q0.png" alt="user profile picture" class="usersprofpic">
          <button type="button" name="editprofile" class="button editprofile" href="#">Edit Profile</button>
        </div>
        <div class="right-profile">
          <div class="maininfo">
            <h3 class="usersname">Collabrain</h3>
            <div class="moreinfo">

              <?php if (isset($_SESSION['success'])): ?>
              <div class="greeting">
                <h3><?php echo $_SESSION['success'];
                unset($_SESSION['success']); ?> </h3>
              </div>
              <?php endif ?>

              <?php if(isset($_SESSION['femail'])): ?>
                <p class="emailinfo"> <?php echo $_SESSION['femail']; ?></p>
              <?php endif ?>
              <p class="ageinfo">Age: 21</p>
            </div>
          </div>

          <hr class="divider">

          <div class="specialty">
            <h4 class="specialtyhead">My Specialties</h4>
            <div class="myspecialties">
              <li>Science</li>
              <li class="addmore"><a href="#">+ Add more subjects</a></li>
            </div>
          </div>
          <div class="interest">
            <h4 class="specialtyhead">My Interests</h4>
            <div class="myinterests">
              <li>Math</li>
              <li class="addmore"><a href="#">+ Add more subjects</a></li>
            </div>
          </div>
        </div>
      </section>

  </body>
</html>
