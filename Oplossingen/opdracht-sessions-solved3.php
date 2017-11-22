<?php

session_start(); 

if(isset($_POST['submit'])) {
    
    $_SESSION['gegevens']['verblijfplaats']['straat'] = $_POST['straat'];
    $_SESSION['gegevens']['verblijfplaats']['nummer'] = $_POST['nummer']; 
    $_SESSION['gegevens']['verblijfplaats']['gemeente'] = $_POST['gemeente']; 
    $_SESSION['gegevens']['verblijfplaats']['postcode'] = $_POST['postcode']; 
    
}
    

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht sessions deel 3</title>
</head>
<body>
    
    <h1>Sessions deel 3</h1>

    <a href="opdracht-sessions-solved3.php?session=destroy">Vernietig sessie</a>

    <h1>Overzicht</h1>
    
    <ul>
        <li> email: <?php echo $_SESSION ["gegevens"]["registratieData"]["email"] ?> <a href="opdracht-sessions-solved.php"> | wijzig</a></li>
        <li> nickname: <?php echo $_SESSION ["gegevens"]["registratieData"]["nickname"] ?><a href="opdracht-sessions-solved.php"> | wijzig</a></li>
        <li> straat: <?php echo  $_SESSION["gegevens"]["verblijfplaats"]["straat"] ?> <a href="opdracht-sessions-solved2.php"> | wijzig</a> </li>
        <li> nummer: <?php echo  $_SESSION["gegevens"]["verblijfplaats"]["nummer"] ?><a href="opdracht-sessions-solved2.php"> | wijzig</a> </li>
        <li> gemeente: <?php echo  $_SESSION["gegevens"]["verblijfplaats"]["gemeente"] ?><a href="opdracht-sessions-solved2.php"> | wijzig</a></li>
        <li> postcode: <?php echo  $_SESSION["gegevens"]["verblijfplaats"]["postcode"] ?> <a href="opdracht-sessions-solved2.php"> | wijzig</a></li>
      
    </ul> 
    
</body>
</html>