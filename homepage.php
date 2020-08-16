<?php include('server.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Collabrain: Home</title>
  </head>
  <body>
      <nav class="nav-bar">
        <div class="logo"><a href="homepage.php">Collabrain</a></div>
        <input type="text" placeholder="Search.." class="search-bar">
        <a href="index.html?logout='1'" class="log-out">Log out</a>
        <a href="profile.php">Profile</a>
        <a class="active" href="homepage.php">Home</a>
      </nav>

      <section class="content">
        <?php if (isset($_SESSION['success'])): ?>
        <div class="greeting">
          <h3><?php echo $_SESSION['success'];
          unset($_SESSION['success']); ?> </h3>
        </div>
        <?php endif ?>

        <?php if(isset($_SESSION['femail'])): ?>
          <p>Welcome back, <strong> <?php echo $_SESSION['femail']; ?></strong></p>
        <?php endif ?>
          <div class="new-post">
              <label class="post-quest-head">What do you need?</label>
              <textarea rows="3" placeholder="Describe your problem here" class="describe"></textarea>
              <button class="button attach">
                <svg width="16px" height="16px" viewbox="0 0 16 16" class="bi bi-paperclip" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg>
              </button>
              <select class="choosecategory" name="Choose Category">
                <option value="Mathematics: Calculus">Mathematics: Calculus</option>
                <option value="Mathematics: Trigonometry">Mathematics: Trigonometry</option>
                <option value="Design: Graphics">Design: Graphic</option>
                <option value="Physics: Waves and Sound">Physics: Waves and Sound</option>
                <option value="English: Reading Comprehension">English: Reading Comprehension</option>
              </select>
              <input type="submit" name="" value="Post" class="button postPosting">
          </div>
          <hr class="divider">
          <h3>Share your knowledge with others</h3>
          <div class="helpPostExample">
              <img src="https://semantic-ui.com/images/avatar/small/joe.jpg" class="profpic">
              <div class="summary">
                <a href="#" class="users-name">Melisa</a> needs help with <a href="#" class="subjects-name">Mathematics: Calculus</a>
                <div class="date">
                  15 minutes ago
                </div>
              </div>
              <div class="postDescribe">
                I just learned Calculus at school and I don't really understand the concept and how to solve it. Can anyone help me? This is one of the problems:
                <br>
                <img src="mathprob.jpg" alt="calculus problem" class="problemAttachment">
              </div>
              <button class="button offer-help" disabled>
                Offer Help via Chat
              </button>
              <a href="mailto:melisa.aranoaccess@gmail.com" class="button offer-help-email">Offer Help via Email</a>
          </div>

          <div class="helpPostExample">
              <img src="https://semantic-ui.com/images/avatar/small/joe.jpg" class="profpic">
              <div class="summary">
                <a href="#" class="users-name">Melisa</a> needs help with <a href="#" class="subjects-name">Mathematics: Calculus</a>
                <div class="date">
                  15 minutes ago
                </div>
              </div>
              <div class="postDescribe">
                I just learned Calculus at school and I don't really understand the concept and how to solve it. Can anyone help me? This is one of the problems:
                <br>
                <img src="mathprob.jpg" alt="calculus problem" class="problemAttachment">
              </div>
              <button class="button offer-help" disabled>
                Offer Help via Chat
              </button>
              <a href="mailto:melisa.aranoaccess@gmail.com" class="button offer-help-email">Offer Help via Email</a>
          </div>

          <div class="helpPostExample">
              <img src="https://semantic-ui.com/images/avatar/small/joe.jpg" class="profpic">
              <div class="summary">
                <a href="#" class="users-name">Melisa</a> needs help with <a href="#" class="subjects-name">Mathematics: Calculus</a>
                <div class="date">
                  15 minutes ago
                </div>
              </div>
              <div class="postDescribe">
                I just learned Calculus at school and I don't really understand the concept and how to solve it. Can anyone help me? This is one of the problems:
                <br>
                <img src="mathprob.jpg" alt="calculus problem" class="problemAttachment">
              </div>
              <button class="button offer-help" disabled>
                Offer Help via Chat
              </button>
              <a href="mailto:melisa.aranoaccess@gmail.com" class="button offer-help-email">Offer Help via Email</a>
          </div>

      </section>

  </body>
</html>
