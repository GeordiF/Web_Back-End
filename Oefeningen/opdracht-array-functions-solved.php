<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1</h1>
    <?php
    $dieren	=	array( "schorpioen", "spin", "hond", "kat", "krokodil", "kiwi" );

	$aantalDieren	=	count( $dieren );

	$teZoekenDier	=	"slang";

	$dierGevonden	=	array_search( $teZoekenDier, $dieren );
    
    echo "Het aantal dieren in de array: " . $aantalDieren . "<br>"; 
    
    if ($dierGevonden) {
        
        echo "We hebben " . $teZoekenDier . " gevonden in de array". "<br>";
        
    } 
    
    else {
        
        echo "We hebben " . $teZoekenDier . " niet gevonden in de array" . "<br>";
        
    }
    
    ?> 
</body>
</html>