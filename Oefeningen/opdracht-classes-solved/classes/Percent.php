<?php

class Percent {
    
    public $relative; 
    public $hundred; 
    public $nominal; 
    
    public function __construct($nieuw, $eenheid) {
        
        $this->relative = $nieuw/$eenheid; 
        $this->formatNumber($this->relative);
        $this->hundred = $this->relative * 100;
        $this->formatNumber($this->hundred); 
        
        if($this->relative > 1 ) {
    
            $this->nominal = 'positive'; 
        
        }
        elseif($this->relative == 1) {
            
            $this->nominal = 'status quo';
            
        }
        else {
            
            $this->nominal = 'negative'; 
            
        }
    
}

    
    public function formatNumber($getal) {
        
        return floatval(number_format($getal, 3, ',', ' ')); 
        
    }
  }
    

?> 