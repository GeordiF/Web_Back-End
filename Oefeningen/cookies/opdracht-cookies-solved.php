<?php

$userContent = file_get_contents('userdata1.txt');
$isVerified = false; 
$contentArray = explode(',', $userContent); 

if (!isset($_COOKIE['userInfoCookie'])) {
  if (isset($_POST["submit"])) {
      if ($_POST["username"] == $contentArray[0] && $_POST["password"] == $contentArray[1] ) {
          setcookie("userInfoCookie",time() + 360);
          header("location: opdracht-cookies-solved.php");
      } else {
        echo "Je inloggegevens zijn fout.";
      }
  }
}
 else {
    $isVerified = true;
}
if (isset($_GET['logout'])) {
    unset($_COOKIE['userInfoCookie']);
    setcookie('userInfoCookie', "",time()-1);
    $logging = false;
    header("location: opdracht-cookies-solved.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cookies</title>
</head>
<body>
   
   <h1>Login</h1>
   
   <?php if(!$isVerified): ?>

          <form method="post">
              <ul>
                  <li>
                      <label for="username">Username</label>
                      <input type="text" id="username" name="username">
                  </li>
                  <li>
                      <label for="password">Pasword</label>
                      <input type="text" id="password" name="password">
                  </li>

              </ul>
              <input type="submit" name="submit">
          </form>
        <?php else: ?>
          <p>U bent reeds ingelogd.</p>
          <a href="opdracht-cookies-solved.php?logout=true">Uitloggen</a>
        <?php endif; ?>
        
</body>
</html>