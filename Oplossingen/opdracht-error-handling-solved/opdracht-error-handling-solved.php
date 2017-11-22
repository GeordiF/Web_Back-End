<?php 

	session_start();

	$currentPage	=	basename( $_SERVER[ 'PHP_SELF' ] );

	$isValid	=	FALSE;

	try {
        
		if ( isset( $_POST[ 'submit' ] ) ){			

			if ( isset( $_POST[ 'code' ] ) ){
				if ( strlen( $_POST[ 'code' ] ) !== 8 ){
					throw new Exception ( 'VALIDATION-CODE-LENGTH' );
				}
				else{
					$isValid	=	TRUE;
				}
			}
			else{
				
				throw new Exception( 'SUBMIT-ERROR' );
	
			}

		}
		
	} 
	catch (Exception $e) {
        
		$messageCode	=	$e->getMessage();

		$message	=	array();

		$createMessage	=	FALSE;

		switch( $messageCode ){
			case 	'SUBMIT-ERROR':
				$message[ 'type' ]	=	'error';
				$message[ 'text' ]	=	'Er ontbreekt een veld';

				break;

			case	'VALIDATION-CODE-LENGTH':
				$message[ 'type' ]	=	'error';
				$message[ 'text' ]	=	'De kortingscode heeft niet de juiste grootte, kijk na of uw code juist is ingevuld';

				$createMessage	=	TRUE;

				break;
		}

		if ( $createMessage ){
            
			createMessage( $message );
		}

		infoToFile( $message );
	}

	$message	=	getMessage();

	function getMessage(){
        
		$message	=	FALSE;

		if ( isset( $_SESSION[ 'message' ] ) )
		{
			$message	=	$_SESSION[ 'message' ];
			unset( $_SESSION[ 'message' ] );
		}

		return $message;
	}


	function createMessage( $message ){
        
		$_SESSION['message']	=	$message;
	}

	
	function infoToFile( $message ){
        
		$date	=	'[' . date( 'H:i:s', time() ).']';
		$ip	=	$_SERVER['REMOTE_ADDR'];

		$errorString	=	$date . ' - ' . $ip . ' - type:[' . $message['type'] . '] ' . $message[ 'text' ] . "\n\r";

		file_put_contents( 'error.log', $errorString, FILE_APPEND );
	}


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht-error-handling</title>
  </head>
  <body>
    <div class="facade-minimal" data-url="http://www.app.local/application.php">
        <h1>Geef uw kortingscode op</h1>

        <form action="#" method="post">
            <ul>
                <li>
                    <label for="code">Kortingscode</label>
                    <input type="text" id="code" name="code">
                </li>
            </ul>

            <input type="submit" name="submit">

            <?php if (!$isValid): ?>
		              <p style="color:red"><?php echo $message["text"] ?></p>
	          <?php endif ?>
            <?php if ($isValid): ?>
		              <p style="color:green"><?php echo "U krijgt korting" ?></p>
	          <?php endif ?>

        </form>
    </div>
  </body>
</html>