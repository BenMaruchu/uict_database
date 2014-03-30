<?php
    /* 
     * Loader Object for loading files
     */
    class Loader{
         private $model_path = '../../includes/model/';
         private $view_path = '';
         private $service_path = '../../includes/services/';

         public function model($file=""){
         	$dir = $this->model_path.$file;
            if(file_exists($dir)){
                require($dir);
            }else{
            	throw new Exception('File "'.$file.'" does not exist in directory "'.$dir.'"');
            }
         }

         public function service($file=""){
         	$dir = $this->service_path.$file;
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

         
    }

    $load = new Loader();
?>