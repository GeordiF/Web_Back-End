<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    $getal= 93; 
    $onderGrens; 
    $bovenGrens;
    
    if ($getal >= 0 && $getal <= 10) {
        
        $onderGrens = 0; 
        $bovenGrens = 10; 
        
    }
    
    elseif ($getal >= 10 && $getal <= 20) {
        
        $onderGrens = 0; 
        $bovenGrens = 10; 
        
    }
    
        elseif ($getal >= 10 && $getal <= 20) {
        
        $onderGrens = 10; 
        $bovenGrens = 20; 
        
    }
    
        elseif ($getal >= 20 && $getal <= 30) {
        
        $onderGrens = 20; 
        $bovenGrens = 30; 
        
    }
    
        elseif ($getal >= 30 && $getal <= 40) {
        
        $onderGrens = 30; 
        $bovenGrens = 40; 
        
    }
    
        elseif ($getal >= 40 && $getal <= 50) {
        
        $onderGrens = 40; 
        $bovenGrens = 50; 
        
    }
    
        elseif ($getal >= 50 && $getal <= 60) {
        
        $onderGrens = 50; 
        $bovenGrens = 60; 
        
    }
    
        elseif ($getal >= 10 && $getal <= 20) {
        
        $onderGrens = 0; 
        $bovenGrens = 10; 
        
    }
    
        elseif ($getal >= 60 && $getal <= 70) {
        
        $onderGrens = 60; 
        $bovenGrens = 70; 
        
    }
    
        elseif ($getal >= 70 && $getal <= 80) {
        
        $onderGrens = 70; 
        $bovenGrens = 80; 
        
    }
    
        elseif ($getal >= 80 && $getal <= 90) {
        
        $onderGrens = 80; 
        $bovenGrens = 90; 
        
    }
    
    elseif ($getal >= 90 && $getal <= 100) {
        
        $onderGrens = 90; 
        $bovenGrens = 100; 
        
    }
    
else {
    
    $tekst = "Het getal dat je hebt gekozen ligt niet tussen 0 en 100!";
    echo $tekst . "<br/>" ;
    echo strrev($tekst);
    
}
    
    if ($getal >= 0 && $getal <= 100) {
        
       $tekst = $getal . " ligt tussen " . $onderGrens . " en " . $bovenGrens ;
        
        echo $tekst . "<br/>"; 
        echo strrev($tekst); 
        
    }
    
    ?> 
    
</body>
</html>