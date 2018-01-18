<?php

	$messageContainer	=	'';

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '123', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

		$messageContainer 	=	'Database succesvol verbonden';
        
        echo $messageContainer; 
        
        $brouwerQueryString	=	'select br.brnaam, b.naam from bieren b, brouwers br WHERE b.brouwernr = br.brouwernr';
        
        $statement = $db->prepare($brouwerQueryString)
        $statement->execute(); 
        
        $bieren = array(); 
        
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            
            $bieren[]=$row; 
            
        }
        
        $columnNames	=	array();
		$columnNames[]	=	'Biernummer';
        
        
	}

    foreach( $bieren[0] as $key => $bier ){
        
			$columnNames[  ]	=	$key;
        
		}


	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
        echo $messageContainer; 
	}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud query</title>
</head>
<body>
   
   <table>
      
    <tr>    
      
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        
           
    </tr>
       

       <tr>
           
           <td>
               
               
           </td>
           
       </tr>
       
       
       
   </table>
    
</body>
</html>