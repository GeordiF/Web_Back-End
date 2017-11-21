<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
   <h1>Opdracht string extra functions: deel 1</h1>
   <?php 
    
        $fruit = 'kokosnoot'; 
        $stringCount = strlen($fruit); 
    
        echo $stringCount . '<br>';
        echo strpos ( $fruit , 'o', 1 )
    
    ?>
    
    <h1>Opdracht string extra functions: deel 2</h1>
    <?php 
    
        $fruit = 'ananas';
    
        echo strpos ($fruit, 'a', 3) . "<br>";
        echo strtoupper ($fruit); 
    
    ?>
      
      <h1>Opdracht string extra functions: deel 3</h1>
      
      <?php
    
        $lettertje = 'e';
        $cijfertje = 3; 
        $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
            
        echo str_replace ( $lettertje , $cijfertje , $langsteWoord );
    
    ?>
       
</body>
</html>