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
    
    <h1>Deel 2</h1>
    
    <?php
    
    $gesorteerdeDieren	=	$dieren;
    
    sort ($gesorteerdeDieren); 

	$zoogdieren	=	array( "olifant", "muis", "walvis" );

	$dierenLijst	=	array_merge( $dieren, $zoogdieren );

    
echo "gesorteerde dieren: " . "<br>";
    
foreach ($gesorteerdeDieren as $alfabetischDier) {
    
    echo "$alfabetischDier <br>";
}
echo "<br>" . "Een volledige lijst van de dieren: " . "<br>";
foreach ($dierenLijst as $drnLst) {
    
    echo "$drnLst <br>";
}

    
    ?>
    
    <h1>Deel 3</h1>
    
    <?php
    
    $getallen	=	array( 8, 7, 8, 7, 3, 2, 1, 2, 4 );

	$geenDuplicaten	=	array_unique( $getallen );

	$geenDuplicatenGesorteerd	=	$geenDuplicaten;

	rsort( $geenDuplicatenGesorteerd );
    
    foreach ($geenDuplicatenGesorteerd as $value) {
    
    echo "$value <br>";
}
    
    ?> 
</body>
</html>