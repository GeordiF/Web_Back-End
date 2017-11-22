<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php

	$text	=	file_get_contents( 'text-file.txt' );

	$characterArray	=	str_split( $text );

	rsort( $characterArray );

	$characterSortedReversed = array_reverse( $characterArray );

	$aantalLetters = array();

	foreach($characterSortedReversed as $letter)
	{
		if ( isset ( $aantalLetters[ $letter ] ) )
		{
			++$aantalLetters[ $letter ];
		}
		else
		{
			$aantalLetters[ $letter ] = 1;
		}
		
	}
    // Geneste foreach luktte niet om zowel letter als bijhoorende aantal af te drukken ==> via var_dump 
    
/* echo "Aantal van elke letter: " . "<br>";
    foreach ($aantalLetters as $value) {
    echo " $value <br>";    
} */ 
	
?>
       <!-- De eerste 2 hebben te veel output ==> uitgecomentarieerd-->
              
        <h1>Array van Z naar A</h1>
		<pre><?php //var_dump ( $characterArray ) ?></pre>
		
		<h1>Array reversed</h1>
		<pre><?php //var_dump ( $characterSortedReversed ) ?></pre>
   
    <h1>Deel 2</h1>
    
		<h1>Array reversed</h1>
		<pre><?php var_dump ( $aantalLetters ) ?></pre>
</body>
</html>