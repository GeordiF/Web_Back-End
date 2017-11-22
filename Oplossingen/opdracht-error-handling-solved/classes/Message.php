
<?php
class Message{
    
  protected $message;
    
  public function __construct($message){
      
  $this->message = $message;
      
  }
    
  function createMessage($message){
      
      $message 	= $this->message;
      $_SESSION["message"]["text"] = $message;
      
  }
    
  function showMessage(){
      
    $message = false;
    if (isset($_SESSION["message"])){
       $message	=	$_SESSION["message"];
       unset( $_SESSION["message"]);
        
    }
      
    return $message;
      
  }
    
}
 ?>