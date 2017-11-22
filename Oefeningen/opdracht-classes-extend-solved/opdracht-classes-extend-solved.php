<?php

	function __autoload( $className )
	{
		require_once( $className . '.php' );
	} 

$mouse = new Animal('Jerry', 'male', 100); 
$cat = new Animal('Tom', 'male', 100); 
$bunny = new Animal('Bugs Bunny', 'male', 100); 

$mouse->changeHealth(-50); 
$bunny->changeHealth(-20);

$mufasa = new Lion('Mufasa', 'male', 100, 'Congo Lion'); 
$aslan = new Lion('Aslan', 'male', 100, 'Narnian Lion'); 

$marvin = new Zebra('Marvin', 'male', 100, 'New York Zoo Zebra'); 
$stripes = new Zebra('Stripes', 'male', 100, 'Racing Zebra'); 

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animal Farm</title>
</head>
<body>
    
    <h1>Animals</h1>
        <h2>Small animals</h2>
		
		
            <p><?php echo $mouse->getName() ?> is van het geslacht <?php echo $mouse->getGender() ?> en heeft momenteel <?php echo $mouse->getHealth() ?> levenspunten</p>

            <p><?php echo $cat->getName() ?> is van het geslacht <?php echo $cat->getGender() ?> en heeft momenteel <?php echo $cat->getHealth() ?> levenspunten</p>

            <p><?php echo $bunny->getName() ?> is van het geslacht <?php echo $bunny->getGender() ?> en heeft momenteel <?php echo $bunny->getHealth() ?> levenspunten</p>
       
       <h2>Lions</h2>
          
            <p>Mufasa's (soort: <?php echo $mufasa->getSpecies() ?>) special move: <?php echo $mufasa->doSpecialMove() ?> </p>
            <p>Aslan's (soort: <?php echo $aslan->getSpecies() ?>) special move: <?php echo $aslan->doSpecialMove() ?> </p>
           
        <h2>Zebra's</h2>
          
            <p>Marvin's (soort: <?php echo $marvin->getSpecies() ?>) special move: <?php echo $marvin->doSpecialMove() ?> </p>
            <p>Stripe's (soort: <?php echo $stripes->getSpecies() ?>) special move: <?php echo $stripes->doSpecialMove() ?> </p>
           
       
       
       
       
    
</body>
</html>