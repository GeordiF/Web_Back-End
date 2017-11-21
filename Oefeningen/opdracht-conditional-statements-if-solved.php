<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht conditional statements: deel 1</title>
</head>
<body>
    
    <h1>Opdracht conditional statements: deel 1</h1>
    
    <?php
    
        $getal = 4; 
            
            if ($getal == 1) {
                $dag = 'maandag';
            };
            if ($getal == 2) {
                $dag = 'dinsdag';
            };
            if ($getal == 3) {
                $dag = 'woensdag';
            };
            if ($getal == 4) {
                $dag = 'donderdag';
            };
            if ($getal == 5) {
                $dag = 'vrijdag';
            };
            if ($getal == 6) {
                $dag = 'zaterdag';
            };
            if ($getal == 7) {
                $dag = 'zondag';
            };
    
    echo $dag; 
    
    ?>
       
       <h2>Opdracht conditional statements: deel 2</h2>
       <?php
    
            $getal = 1; 
            
            if ($getal == 1) {
                $dag = 'maandag';
            };
            if ($getal == 2) {
                $dag = 'dinsdag';
            };
            if ($getal == 3) {
                $dag = 'woensdag';
            };
            if ($getal == 4) {
                $dag = 'donderdag';
            };
            if ($getal == 5) {
                $dag = 'vrijdag';
            };
            if ($getal == 6) {
                $dag = 'zaterdag';
            };
            if ($getal == 7) {
                $dag = 'zondag';
            };
    
    $letter = 
    $dagUpper = strtoupper($dag);
    echo $dagUpper . '<br>';
    $dagLower = str_replace('A', 'a', $dagUpper);
    echo $dagLower . '<br>';
    $dagLowerLast = substr_replace($dagUpper, 'a', -3, 3);
    echo $dagLowerLast; 
    
    
    ?>
        
</body>
</html>