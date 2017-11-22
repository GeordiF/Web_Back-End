<?php 

    class HTMLbuilder {
        
        protected $header;
        protected $body;
        protected $footer;
        
        public function __construct($header, $body, $footer)
        {
            $this->header = $header;
            $this->body = $body;
            $this->footer = $footer;
            
            // build multiple parts
            $this->buildHeader();
            $this->buildBody();
            $this->buildFooter();
        }
        
        public function buildHeader() {
            
            $cssMap = dirname(dirname(__FILE__)) . '/css/';
            $cssArray = $this->findFiles($cssMap, 'css');
            $cssLink = $this->buildCssLinks($cssArray);
            
            include 'HTML/' . $this->header;
            
        }
        
        public function buildBody() {
            
            include 'HTML/' . $this->body;
        }
        
        public function buildFooter() {
            
            include 'HTML/' . $this->footer;
            
            $jsMap = dirname(dirname(__FILE__)) . '/js/';
            $jsArray = $this->findFiles($jsMap, 'js');
            $jsLink = $this->buildJsLinks($jsArray);
            
        }
        
        public function findFiles($dir, $file)
        {
            return glob($dir . '/*' . $file);
        }
        
        public function buildJsLinks($files)
        {
            $filesArray = array();
            
            foreach($files as $file)
            {
                $fileInfo = pathinfo($file);
                $fileName = $fileInfo['basename'];
                $filesArray[] = '<script src="js/' . $fileName . '"></script>';
            }
            
            return implode('', $filesArray);
        }
        
        public function buildCssLinks($files)
        {
            $filesArray = array();
            
            foreach($files as $file)
            {
                $fileInfo = pathinfo($file);
                $fileName = $fileInfo['basename'];
                $filesArray[] = '<link rel="stylesheet" type="text/css" href="css/' . $fileName . '">';
            }
            
            return implode('', $filesArray);
        }
        
    
        
    }

?>