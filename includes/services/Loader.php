<?php
    /* 
     * Loader Object for loading files
     */
    class Loader{
         protected $model_path = '../model/';
         private $view_path = './public/view/';
         private $template_path = '../../public/templates/';
	 private $service_path='./includes/services/';

         public function model($file=""){
         	$dir = $this->model_path.$file;
            if(file_exists($dir)){
                require($dir);
            }else{
            	throw new Exception('File "'.$file.'" does not exist in directory "'.$dir.'"');
            }
         }

         public function template($file=""){
         	$dir = $this->template_path.$file;
            if(file_exists($dir)){
                require($dir);
            }else{
            	throw new Exception('File "'.$file.'" does not exist in directory "'.$dir.'"');
            }
         }

         public function view($file="",$data=""){
            $dir = $this->view_path.$file;
            if(file_exists($dir)){
                require($dir);
            }else{
            	throw new Exception('File "'.$file.'" does not exist in directory "'.$dir.'"');
            }
         }

         public function service($file=""){
            if(file_exists($this->service_path.$file)){
                require($this->service_path.$file);
            }else{
            	throw new Exception('File "'.$file.'"does not exist in this directory"');
            }
         }
    }

?>