<?php
   ob_start();
   session_start();

   /* RLogin - A simple login application based on PHP/JQuery framework. */

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>RLogin</title>
  <meta name="description" content="Sample Login Form">
  <meta name="author" content="Ranjani">
  <link rel="stylesheet" href="rlogin.css" type="text/css" media="screen" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="rlogin.js"></script>
</head>

<body>
  <div id="header">
    <div id='welcomeUser'>
    <?php 
      if(isset($username)) {
        echo "Welcome, " . $username;
      }
    ?>
    </div>
    <div id="loginbtn">Login</div>
  </div>
  <div id="content">
    <div id="rpopup" class="popup">
      <form class="popup-content animate"  method = "post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="container">
          <div>
            <label><img src="images/username.png" alt="Username" class="usernameIcon"></label>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div>
            <label><img src="images/password.png" alt="Password" class="passwordIcon"></label>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <button id="submitbtn" type="submit">LOGIN</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
