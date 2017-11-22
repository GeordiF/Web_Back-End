<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <h1>Opdracht arrays basis: deel 1</h1>
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
    
    <h1>Opdracht arrays basis: deel 2</h1>
    
    <?php
    
    $getallen            =  array( 1, 2, 3, 4, 5 );
    $gtlnProduct         =  array_product($getallen); 
    
    $arrayLength         =  count ( $getallen );

    $gtlnReverse     =  array_reverse( $getallen );

    $oneven;

   foreach( $getallen as $gtl )
   {
      if ( $gtl % 2 != 0 )
      {
         $oneven[]   =   $gtl;
      }
   }

   $somArray =  array();

   foreach( $getallen as $key => $getal )
   {
      $getal1  =  $getal;
      $getal2  =  $gtlnReverse[ $key ];

      $somArray[] =  $getal1  + $getal2;
       
   }
    
echo "Oneven getallen: " . "<br>";
foreach ($oneven as $value) {
    
    echo "$value <br>";
}
echo "som array en reverse array: " . "<br>";
foreach ($somArray as $somGtln) {
    
    echo "$somGtln <br>";
}
    
    
    
    ?>
</body>
</html>