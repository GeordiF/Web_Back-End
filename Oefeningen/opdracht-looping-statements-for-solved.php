<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <style>
			
			.oneven
			{
				background-color	:	lightgreen;
			}

        </style>
</head>
<body>
    <?php
    
    $kolommen = 10;
    $rijen = 10; 
    
    $maxTafels		=	10;
	$maxProduct		=	10;
    
    ?>
    
    <h1>Deel 1</h1>
    <!--Stap 1-->
    <table>
			<?php for ( $rij = 0; $rij < $rijen; ++$rij): ?>
				<tr>
				    <td>rij</td>
				</tr>
			<?php endfor ?>
		</table>
		
   <!--Stap 2-->
   
    <table>
			<?php for ( $rij = 0; $rij < $rijen; ++$rij): ?>
				<tr>
					<?php for ( $kolom = 0; $kolom < $kolommen; ++$kolom): ?>
						<td>kolom</td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>
		
    <h1>Deel 2</h1>
		
		<!--Stap 3-->
       
        <table>
			<?php for( $tafel = 0; $tafel < $maxTafels; ++$tafel ):  ?>
				
				<tr>	
					<?php for( $product = 1; $product <= $maxProduct; ++$product ):  ?>
						<td class="<?php if( ( $tafel * $product ) % 2 != 0 ) { echo 'oneven'; } ?>"><?= $tafel * $product ?></td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>
		
		<!--Stap 4-->
		
		<h1>Deel 3</h1>
   
       <?php
    
    	$tafels	=	array();

	for( $tafelCounter = 0; $tafelCounter <= $maxTafels; ++$tafelCounter )
	{
        
		$producten	=	array();

		for( $productCounter = 0; $productCounter <= $maxTafels; ++$productCounter )
		{
			$producten[]	=	$tafelCounter * $productCounter;
		}

		$tafels[ $tafelCounter ]	=	$producten;

	}
                            
                            ?> 
                            
        <table>
			
			<?php foreach ($tafels as $producten): ?>
				<tr>
					<?php foreach ($producten as $product ): ?>
						<td class="<?php if( $product % 2 > 0 ) {echo 'oneven';} ?>"><?= $product ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>

		</table>
   
   <!--Stap 5-->
   
   <h1>Deel 4</h1>

		<table>
			
			<thead>
				<th>Tafel</th>

				<?php for ( $productCounter = 0; $productCounter <= $maxTafels; ++$productCounter): ?>
					
					<th><?= $productCounter ?></th>
					
				<?php endfor ?>
			</thead>

			<tbody>
			<?php foreach ($tafels as $tafel => $producten): ?>
				<tr>
					<td><?= $tafel ?></td>
					<?php foreach ($producten as $product ): ?>
						<td class="<?= ( $product % 2 > 0 ) ? 'oneven' : '' ?>"><?= $product ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			</tbody>

		</table>
    
    
</body>
</html>