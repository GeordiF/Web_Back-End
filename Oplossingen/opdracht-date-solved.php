

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
</head>
<body>
    <h1>Deel 1</h1>
    
<?php 

	// Voor windows
	setlocale( LC_ALL, 'nld_nld' );

	// Voor *nix (oa. mac)
	//setlocale( 'LC_ALL', 'nl_NL' );
	
	$timestamp	=	mktime( 22, 35, 25, 01, 21, 1904 );

	$datum	=	strftime('%d %B %Y, %H:%M:%S %p', $timestamp);
    
    echo $datum; 

?>

    
    <h1>Deel 2</h1>
    
<?php 

	$timestamp	=	mktime(22, 35, 25, 01, 21, 1904);

	$datum	=	date('d F Y, g:i:s A', $timestamp);
    
    echo $datum; 
?>

</body>
</html>