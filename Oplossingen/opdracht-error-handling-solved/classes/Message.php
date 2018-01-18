<?php
    
    class Message {
        
        protected $message;
        
        public function __construct($message) {
            
            $this->message = $message;
        }
        
        public function createMessage($message) {
            $message = $this->message;
            $_SESSION['message']['text'] = $message;
        }
        
        public function showMessage() {
            
            $messageData 	= $_SESSION['message'];
			$message 		= FALSE;
            
			if ( isset( $messageData ) )
			{
				$message 	= $messageData;
				unset( $messageData );
			}
            
			return $message;
        }
    }
?>