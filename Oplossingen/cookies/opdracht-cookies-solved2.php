<?php


$userContent = file_get_contents('userdata1.txt');
$isVerified = false; 
$contentArray = explode(',', $userContent); 

if (!isset($_COOKIE['userInfoCookie'])) {
    
  if (isset($_POST["submit"])) {
      
      if ($_POST["username"] == $contentArray[0] && $_POST["password"] == $contentArray[1] ) {
          
          if(isset($_POST["remeberMe"])) {
              
          setcookie("userInfoCookie",time() + 60*60*24*30);

          }
          
          else {
              
          setcookie("userInfoCookie",time()+3600);
              
          }

          header("location: opdracht-cookies-solved2.php");
      } 
      
      else {
          
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
    header("location: opdracht-cookies-solved2.php");
}

?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies Deel 2</title>
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
                      <label for="password">Password</label>
                      <input type="password" id="password" name="password">
                  </li>
                  
                  <li>
                      
                      <label for="rememberMe">Remember me</label>
                      <input type="checkbox" id="rememberMe" name="rememberMe">
                      
                  </li>

              </ul>
              <input type="submit" name="submit">
          </form>
        <?php else: ?>
          <p>U bent reeds ingelogd.</p>
          <a href="opdracht-cookies-solved2.php?logout=true">Uitloggen</a>
        <?php endif; ?>
         
</body>
</html>