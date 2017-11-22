<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

	function berekenSom( $getal1, $getal2 ) 
	{
	
		$berekening = $getal1 + $getal2;

		return $berekening;
	}

	function vermenigvuldig( $getal1, $getal2 ) 
	{
	
		$berekening = $getal1 * $getal2;

		return $berekening;
	}

	function isEven( $getal1 ) 
	{
	
		if ( $getal1%2 == 0 )
		{
            echo $getal1 . ' is even. <br>';
			return true;
		}
        
        else {
            
            echo $getal1 . ' is oneven. <br>';
		    return false;
            
            }
	}
    
    $som = berekenSom(11, 33); 
    
    $vermenigvuldiging = vermenigvuldig(13, 7); 
    
    $_isEven = isEven(21); 
    
    echo $som . '<br>' . $vermenigvuldiging . '<br>' . $_isEven . '<br>'; 
    
    ?>
</body>
</html>