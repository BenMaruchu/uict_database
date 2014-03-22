<?php
   function redirect($url = NULLL){
      if($url != NULL){
         header('Location: '.$url);
         exit;
      }
   }

   function output_message($message=""){
       if(!empty($message)){
          return '<p>'.$message.'</p>';
       }else{
       	  return "";
       }
   }
?>