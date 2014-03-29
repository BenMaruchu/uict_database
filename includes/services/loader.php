<?php
    /* 
     * Loader Object for loading files
     */
    class Loader{
         private $model_path = '../model/';
         private $view_path = '../../public/view/';
         private $template_path = '../../public/templates/';

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

         public function view($file=""){
         	$dir = $this->view_path.$file;
            if(file_exists($dir)){
                require($dir);
            }else{
            	throw new Exception('File "'.$file.'" does not exist in directory "'.$dir.'"');
            }
         }

         public function service($file=""){
            if(file_exists($file)){
                require($file);
            }else{
            	throw new Exception('File '.$file.' does not exist in this directory');
            }
         }
    }

    $load = new Loader();
?>