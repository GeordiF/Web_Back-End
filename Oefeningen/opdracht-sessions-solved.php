<?php

session_start(); 

if (isset( $_GET['session'])) {
    
    if ($_GET['session'] == 'destroy') {
        
        session_destroy(); 
        header('location: opdracht-sessions-solved.php');
        
    }
    
}

$email = (isset($_SESSION['gegevens']['registratieData']['email'])) ? $_SESSION['gegevens']['registratieData']['email'] : ''; 
$nickname = (isset($_SESSION['gegevens']['registratieData']['nickname'])) ? $_SESSION['gegevens']['registratieData']['nickname'] : ''; 


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sessions</title>
</head>
<body>
    
    <div class="session">
        
        <h1>Registratiegevens</h1>
        
        <a href="opdracht-sessions-solved.php?session=destroy"> Beëindig sessie </a>
        
        <form action="opdracht-sessions-solved2.php" method="post">
            
        <ul>
            
            <li>
                
                <label for="email">email</label>
                <input type="text" id="email" name="email" value="<?php echo $email ?>" placeholder="vb: jos.vermeulen@hotmail.com">
                
            </li>
            <li>
                
                <label for="email">nickname</label>
                <input type="text" id="nickname" name="nickname" value="<?php echo $nickname ?>" placeholder="vb: jos.vermeulen1856">
                
            </li>
            
        </ul>  
           
           <input type="submit" name="submit">
            
        </form>

        
    </div>
    
</body>
</html>