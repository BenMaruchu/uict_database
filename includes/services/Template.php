<?php
class Template{
   protected $template_dir = './public/templates/';

   public function __construct($template_dir = null){
        if($template_dir !== null){
         $this->template_dir = $template_dir;
        }
   }
   
   public function render($template_file){
      
       if(file_exists($this->template_dir.$template_file)){
           include $this->template_dir.$template_file;
        
        }
        else {
            throw new Exception('no template file ' . $template_file . ' present in directory ' . $this->template_dir);
        }

   }

}

?>
