
<?php

$username ="TheLegend66";
$password = "TheLegend99"; 

if (isset($_POST['submit'])) {
    
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        
        echo 'Welcome ' . $username . '<br>';  
        
    }
    
    else {
        
        echo 'You username or password is incorrect, please try again.';
        
    }
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   
    <form action="opdracht_post_solved.php" method="post">
       
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="text" name="password" id="password" placeholder="Password" >
        <input type="submit" name="submit" value="Submit">
        
    </form>
</body>
</html>