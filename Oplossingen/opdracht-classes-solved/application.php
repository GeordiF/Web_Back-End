<?php

function __autoload($percentClass) {
    
    include 'classes/' . $percentClass . '.php'; 
    
    }
    
    $nieuw	=	150;
	$eenheid	=	100;
	$percent = new Percent( $nieuw, $eenheid );
    


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
</head>
<body>
   
<table>
	<caption>Hoe staat <?php echo $nieuw ?> in verhouding tot <?php echo $eenheid ?>?</caption>
	<tr>
		<td>Relatief</td>
		<td><?php echo $percent->relative ?></td>
	</tr>
	<tr>
		<td>Procentueel</td>
		<td><?php echo $percent->hundred ?>%</td>
	</tr>
	<tr>
		<td>Nominaal</td>
		<td><?php echo $percent->nominal ?></td>
	</tr>
	
</table>
    
</body>
</html>