<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <h1>Deel 1</h1>
   
   <?php
    $jaartal = 2001; 
    $schrikkeljaar = false;
        
        if ((($jaartal % 4 == 0) && ($jaartal % 100 != 0)) || ($jaartal % 400 == 0) ) {
            
            $schrikkeljaar = true; 
            echo $jaartal . ' is een schrikkeljaar'; 
        }
    
    else {
        
        echo $jaartal . ' is geen schrikkeljaar';
        
    }
    
    ?>
    
    <h1>Deel 2</h1>
    <?php
    $aantalSeconden = 221108521; 
    $second = 1;
    $minuut = $second * 60; 
    $uur = $minuut * 60; 
    $dag = $uur * 24;
    $week = $dag * 7; 
    $maand = $dag * 31; 
    $jaar = $dag * 365; 
    
    $aantalMinuten = floor ($aantalSeconden/$minuut);
    $aantalUren = floor ($aantalSeconden/$uur);
    $aantalDagen = floor ($aantalSeconden/$dag);
    $aantalWeken = floor ($aantalSeconden/$week);
    $aantalMaanden = floor ($aantalSeconden/$maand);
    $aantalJaren = floor ($aantalSeconden/$jaar);
    
    echo 'Minuten: ' . $aantalMinuten . '<br/>';
    echo 'Uren: ' . $aantalUren . '<br/>'; 
    echo 'Dagen: ' . $aantalDagen . '<br/>'; 
    echo 'Weken: ' . $aantalWeken . '<br/>'; 
    echo 'Maanden: ' . $aantalMaanden . '<br/>'; 
    echo 'Jaren: ' . $aantalJaren . '<br/>'; 
    
        
    ?>
    
</body>
</html>