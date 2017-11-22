<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  <h1>Deel 1</h1>
    <?php
    
    $getallen		=	array();
	$aantalGetallen	=	100;
    $getallenDeelbaar = array(); 

	$getal = 0;

	while ( $getal < $aantalGetallen )
	{
		$getallen[]	=	$getal;
		 ++$getal;
	}
    
    $_getallen	=	implode( ', ', $getallen );
    
    echo $_getallen;
    
    $getal = 0; 
    
    while ( $getal < $aantalGetallen )
	{
		if ( $getal % 3 == 0 && $getal > 40 && $getal < 80 )
		{
			$getallenDeelbaar[]	=	$getal;
		}

		++$getal;
	}
    
    $_getallenDeelbaar = implode(', ', $getallenDeelbaar);
    
    echo "<br>" . $_getallenDeelbaar;
    ?>
       
       <h1>Deel 2</h1>
       
    <?php
    
    $boodschappenlijstje = array('tandpasta', 'brood', 'preparé', 'water', 'koffie'); 
    
    
    ?>
       <h2>Boodschappen voor vandaag</h2>
       		<ul>
			<?php 
				$boodschapCounter 		= 	0;
			?>
			<?php while( isset( $boodschappenlijstje [ $boodschapCounter ] ) ):  ?>
				
				<li><?= $boodschappenlijstje [ $boodschapCounter ] ?></li>
				

				<?php $boodschapCounter++ ?>
			<?php endwhile ?>
		</ul>
        
</body>
</html>