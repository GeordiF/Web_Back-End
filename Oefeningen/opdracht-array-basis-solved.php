<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    
    $dieren = array('schaap', 'koala', 'chimpanzee', 'zebra', 'leeuw'); 
    $dieren[] = 'slang'; 
    $dieren[] = 'neushoorn'; 
    $dieren[] = 'gier'; 
    $dieren[] = 'arend'; 
    $dieren[] = 'stekelvarken'; 

    $voertuigen =  array('landvoertuigen'  => array('fiets', 'buggy'),
                        'watervoertuig'   => array('jetski', 'speedboat'),
                        'luchtvoertuig'   => array('gyrocopter'),
                        );
    
var_dump ($voertuigen); 
    
    ?> 
    
</body>
</html>