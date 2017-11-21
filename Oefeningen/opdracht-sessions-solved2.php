<?php 

session_start(); 

if(isset($_POST['submit'])) {
    
    $_SESSION['gegevens']['registratieData']['email'] = $_POST['email']; 
    $_SESSION['gegevens']['registratieData']['nickname'] = $_POST['nickname'];
    
    $straat = (isset($_SESSION['gegevens']['verblijfplaats']['straat'])) ? $_SESSION['gegevens']['verblijfplaats']['straat']: '';
    $nummer = (isset($_SESSION['gegevens']['verblijfplaats']['nummer'])) ? $_SESSION['gegevens']['verblijfplaats']['nummer']: ''; 
    $gemeente = (isset($_SESSION['gegevens']['verblijfplaats']['gemeente'])) ? $_SESSION['gegevens']['verblijfplaats']['gemeente']: ''; 
    $postcode = (isset($_SESSION['gegevens']['verblijfplaats']['postcode'])) ? $_SESSION['gegevens']['verblijfplaats']['postcode']: ''; 
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions deel 2</title>
</head>
<body>
   
   <h1>Sessions - deel2</h1>

        <a href="phpoefening-021-deel1.php?session=destroy">Vernietig sessie</a>

        <h2>Registratiegegevens: Adres</h2>

        <ul>
        
        <li>email: <?php echo $_SESSION ["gegevens"]["registratieData"]["email"] ?></li>
        <li>nickname: <?php echo $_SESSION ["gegevens"]["registratieData"]["nickname"] ?></li>
        
        </ul>

        <h2>Deel 2: adres</h2>

        <form action="opdracht-sessions-solved3.php" method="POST">
            
            <ul>
                <li>
                    <label for="straat">straat</label>
                    <input type="text" id="straat" name="straat" value="<?php echo $straat ?>" placeholder="straatnaam">
                </li>
                <li>
                    <label for="nummer">nummer</label>
                    <input type="text" id="nummer" name="nummer" value="<?php echo $nummer ?>" placeholder="tel: ">
                </li>
                <li>
                    <label for="gemeente">gemeente</label>
                    <input type="text" id="gemeente" name="gemeente" value="<?php echo $gemeente ?>" placeholder="gemeente">
                </li>
                <li>
                    <label for="postcode">postcode</label>
                    <input type="text" id="postcode" name="postcode" value="<?php echo $postcode ?>" placeholder="postcode">
                </li>
            </ul>

            <input type="submit" name="submit">

        </form>
		
    
</body>
</html>